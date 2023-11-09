<?php

declare(strict_types=1);

namespace Animashit\Ytdl;

use SplFileInfo;
use Symfony\Component\Filesystem\Filesystem;
use YoutubeDl\Entity\Extractor;
use YoutubeDl\Entity\Mso;
use YoutubeDl\Entity\SubListItem;
use YoutubeDl\Entity\Thumbnail;
use YoutubeDl\Entity\Video;
use YoutubeDl\Entity\VideoCollection;
use YoutubeDl\Exception\MsoNotParsableException;
use YoutubeDl\Exception\NoDownloadPathProvidedException;
use YoutubeDl\Exception\NoUrlProvidedException;
use YoutubeDl\Metadata\DefaultMetadataReader;
use YoutubeDl\Metadata\MetadataReaderInterface;
use YoutubeDl\Process\ArgvBuilder;
use YoutubeDl\Process\DefaultProcessBuilder;
use YoutubeDl\Process\ProcessBuilderInterface;
use YoutubeDl\Process\TableParser;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Options;

use const PREG_SET_ORDER;

use function basename;
use function count;
use function explode;
use function in_array;
use function preg_match;
use function str_starts_with;
use function strpos;
use function substr;
use function trim;

class YoutubeDlshit extends YoutubeDl
{
    public const PROGRESS_PATTERN = '#\[download\]\s+(?<percentage>\d+(?:\.\d+)?%)\s+of\s+(?<size>[~]?\d+(?:\.\d+)?(?:K|M|G)iB)(?:\s+at\s+(?<speed>(\d+(?:\.\d+)?(?:K|M|G)iB/s)|Unknown speed))?(?:\s+ETA\s+(?<eta>([\d:]{2,8}|Unknown ETA)))?(\s+in\s+(?<totalTime>[\d:]{2,8}))?#i';

    private ProcessBuilderInterface $processBuilder;
    private MetadataReaderInterface $metadataReader;
    private Filesystem $filesystem;
    private ?string $binPath = null;
    private ?string $pythonPath = null;

    /**
     * @var callable
     */
    private $progress;

    /**
     * @var callable
     */
    private $debug;
    public function __construct(ProcessBuilderInterface $processBuilder = null, MetadataReaderInterface $metadataReader = null, Filesystem $filesystem = null)
    {
        $this->processBuilder = $processBuilder ?? new DefaultProcessBuilder();
        $this->metadataReader = $metadataReader ?? new DefaultMetadataReader();
        $this->filesystem = $filesystem ?? new Filesystem();
        $this->progress = static function (?string $progressTarget, string $percentage, string $size, ?string $speed, ?string $eta, ?string $totalTime): void {};
        $this->debug = static function (string $type, string $buffer): void {};
    }

    public function setBinPath(?string $binPath): self
    {
        $this->binPath = $binPath;

        return $this;
    }

    public function setPythonPath(?string $pythonPath): self
    {
        $this->pythonPath = $pythonPath;

        return $this;
    }
    public function videoList(Options $options): VideoCollection
    {
        $urls = $options->getUrl();

        if (count($urls) === 0) {
            throw new NoUrlProvidedException('Missing configured URL to download.');
        }

        $arguments = [
            '--ignore-config',
            '--ignore-errors',
            '--write-info-json',
            ...ArgvBuilder::build($options),
        ];

        $parsedData = [];
        $currentVideo = null;
        $progressTarget = null;

        $process = $this->processBuilder->build($this->binPath, $this->pythonPath, $arguments);
        $process->run(function (string $type, string $buffer) use (&$currentVideo, &$parsedData, &$progressTarget): void {
            ($this->debug)($type, $buffer);

            if (preg_match('/\[(?<extractor>.+)]\s(?<id>.+):\sDownloading (pc )?webpage/', $buffer, $match) === 1) {
                if ($currentVideo !== null) {
                    $parsedData[] = $currentVideo;
                    $currentVideo = null;
                }

                $currentVideo['extractor'] = $match['extractor'];
                $currentVideo['id'] = $match['id'];
            } elseif (str_starts_with($buffer, 'ERROR:')) {
                $currentVideo['error'] = trim(substr($buffer, 6));
            } elseif (preg_match('/Writing video( description)? metadata as JSON to:\s(?<metadataFile>.+)/', $buffer, $match) === 1) {
                $currentVideo['metadataFile'] = $match['metadataFile'];
            } elseif (preg_match('/\[(ffmpeg|Merger)] Merging formats into "(?<file>.+)"/', $buffer, $match) === 1) {
                $currentVideo['fileName'] = $match['file'];
            } elseif (preg_match('/\[(download|ffmpeg|ExtractAudio)] Destination: (?<file>.+)/', $buffer, $match) === 1 || preg_match('/\[download] (?<file>.+) has already been downloaded/', $buffer, $match) === 1) {
                $currentVideo['fileName'] = $match['file'];
                $progressTarget = basename($match['file']);
            } elseif (preg_match_all(static::PROGRESS_PATTERN, $buffer, $matches, PREG_SET_ORDER) !== false) {
                if (count($matches) > 0) {
                    $progress = $this->progress;

                    foreach ($matches as $match) {
                        $progress($progressTarget, $match['percentage'], $match['size'], $match['speed'] ?? null, $match['eta'] ?? null, $match['totalTime'] ?? null);
                    }
                }
            }
        });

        if ($currentVideo !== null && !in_array($currentVideo, $parsedData, true)) {
            $parsedData[] = $currentVideo;
        }

        $videos = [];
        $metadataFiles = [];

        foreach ($parsedData as $parsedRow) {
            if (isset($parsedRow['error'])) {
                $videos[] = new Video([
                    'error' => $parsedRow['error'],
                    'extractor' => $parsedRow['extractor'] ?? 'generic',
                ]);
            } elseif (isset($parsedRow['metadataFile'])) {
                $metadataFile = $parsedRow['metadataFile'];
                $metadataFiles[] = $metadataFile;
                $metadata = $this->metadataReader->read($metadataFile);
                if (isset($parsedRow['fileName'])) {
                    $metadata['_filename'] = $parsedRow['fileName'];
                    $metadata['file'] = new SplFileInfo($metadata['_filename']);
                }
                $metadata['metadataFile'] = new SplFileInfo($metadataFile);

                $videos[] = new Video($metadata);
            }
        }

        if ($options->getCleanupMetadata()) {
            $this->filesystem->remove($metadataFiles);
        }

        return new VideoCollection($videos);
    }

}
