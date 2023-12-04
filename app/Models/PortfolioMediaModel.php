<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PortfolioMediaModel extends Model
{
    use HasFactory;
    protected $table = 'portfolio_medias'; // Nama tabel dalam database

    protected $fillable = [
        'portfolio_id','title','description','media','type','sort'
    ];

    protected $media_types = [
        'upload_image',
        'upload_video',
        'url_image',
        'embed_video',
    ];

    public function portfolio()
    {
        return $this->belongsTo(PortfolioMediaModel::class, 'portfolio_id');
    }
    
    public function uploadMedia($portfolio_id = 0, $medias = [],$files = [])
    {
        $data = [];
        $media_files = (isset($files['media_file']))?$files['media_file']:[];

        if(is_array($medias) and count($medias) > 0)
        {
            foreach($medias as $i => $dt)
            {
                foreach($dt as $i2 => $d)
                {
                    $data[$i2] = (isset($data[$i2]))?$data[$i2]:[];
                    $data[$i2][$i] = $d;
                    
                }
            }
        }

        $file_no = 0;
        foreach($data as $i => $d)
        {
            if(in_array($d['type'], ['upload_image','upload_video']))
            {
                $curr_file = $media_files[$file_no];
                $ext = $curr_file->extension();
                if($path = $curr_file->storeAs(
                    'uploads/portfolios', 'animashit-'.$d['type'].'-'.$portfolio_id.'-'.$i.'.'.$ext
                ))
                {
                    $data[$i]['media'] = $path;
                }
                $file_no++;
            }

            $data[$i]['portfolio_id'] = $portfolio_id;
            $data[$i]['sort'] = $i;
            $this->updateOrCreate(['id' => (isset($d['id']))?$d['id']:0] , $data[$i]);
        }

    }
}
