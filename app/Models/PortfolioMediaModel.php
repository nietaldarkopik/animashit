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
        $media_files = $files; //(isset($files['media_file']))?$files['media_file']:[];

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

        $id_exists = [];
        $file_no = 0;
        foreach($data as $i => $d)
        {
            if(in_array($d['type'], ['upload_image','upload_video']))
            {
                $curr_file = (isset($media_files[$file_no]))?$media_files[$file_no]:false;
                if($curr_file !== false)
                {
                    $ext = $curr_file->extension();
                    $path = $curr_file->storeAs(
                        'uploads/portfolios', 'animashit-'.$d['type'].'-'.$portfolio_id.'-'.$i.'-'.date("YmdHis").'.'.$ext
                    );
                    
                    if($path)
                    {
                        $data[$i]['media'] = $path;
                    }
                }
                $file_no++;
            }

            $data[$i]['portfolio_id'] = $portfolio_id;
            $data[$i]['sort'] = $i;
            $portfolio_media = false;

            if(isset($d['id']) and !empty($d['id']))
            {
                $portfolio_media = PortfolioMediaModel::find($d['id'])->update($data[$i]);
                $id_exists[] = $d['id'];
            }else{
                $portfolio_media = $this->create($data[$i]);
                $id_exists[] = $portfolio_media->id;
            }
        }

        $deleteNotIn = $this->where('portfolio_id',$portfolio_id)->whereNotIn('id',$id_exists)->delete();
    }
    
    public function showDisplay($id = 0) {
        $portfolio = PortfolioMediaModel::where('id',$id)->first();

        $p = (!empty($portfolio))?$portfolio:null;
        $output = '';
        
        if(!empty($p))
        {
            if($p->type == "upload_image") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <a href="'.asset($p->media).'" target="_blank">
                            <img src="'.asset($p->media).'" class="img-fluid w-100 object-fit-cover" style="max-height: 300px;"/>
                        </a>
                    </div>';
            } elseif($p->type == "upload_video") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <video src="'.asset($p->media).'" class="w-100 object-fit-cover" autoplay controls></video>
                    </div>';
            } elseif($p->type == "url_image") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <a href="'.asset($p->media).'" target="_blank">
                            <img src="'.$p->media.'" class="img-fluid w-100 object-fit-cover" style="max-height: 300px;"/>
                        </a>
                    </div>';
            } elseif($p->type == "embed_video") {
    
                $output .= '
                    <div class="ratio ratio-16x9">
                        '. $p->media .'
                    </div>';
            }
        }

        return $output;
    }

    public function getDisplay($id = 0) {
        $portfolio = PortfolioMediaModel::where('id',$id)->first();

        $p = (!empty($portfolio))?$portfolio:null;
        $output = '';
        
        if(!empty($p))
        {
            if($p->type == "upload_image") {
                $output .= '<img src="'.asset($p->media).'" class="img-fluid w-100 object-fit-cover"/>';
            } elseif($p->type == "upload_video") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <video src="'.asset($p->media).'" class="w-100 object-fit-cover" muted autoplay controls></video>
                    </div>';
            } elseif($p->type == "url_image") {
                $output .= '<img src="'.$p->media.'" class="img-fluid w-100 object-fit-cover"/>';
            } elseif($p->type == "embed_video") {
    
                $output .= '
                    <div class="ratio ratio-16x9">
                        '. $p->media .'
                    </div>';
            }
        }

        return $output;
    }
}
