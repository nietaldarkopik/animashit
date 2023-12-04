<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportDatabase extends Command
{
    protected $signature = 'export:database';

    protected $description = 'Export the database to an SQL file';

    public function handle()
    {
        //$filename = storage_path('app/backups/backup-'.date("YmdHis").'.sql');
        $filename = app_path('../backups/backup-'.date("YmdHis").'.sql');

        $command = sprintf(
            storage_path('../../../../bin/mysql/mysql8.0.27/bin').'/mysqldump -u %s -p%s %s > %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            $filename
        );

        // Run the mysqldump command
        $process = proc_open($command, [], $pipes);

        // Wait for the process to complete
        proc_close($process);

        $this->info('Database exported to ' . $filename . $command);
    }
}
