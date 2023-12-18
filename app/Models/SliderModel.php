<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;
    protected $table = 'sliders'; // Nama tabel dalam database

    protected $fillable = [
        'title','subtitle','description','media','type','button_url','button_text','sort','status',
    ];
    
    /* 
    public function getRouteKeyName(): string
    {
        return 'slug';
    } */

    
    public function showDisplay($id = 0) {
        $p = SliderModel::where('id',$id)->first();
        //$p = (empty($p))?$slider->media()->first():$p;
        $output = '';
        
        if(!empty($p))
        {
            if($p->type == "image") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <a href="'.asset($p->media).'" target="_blank">
                            <img src="'.asset($p->media).'" class="img-fluid w-100 object-fit-cover" style="max-height: 300px;"/>
                        </a>
                    </div>';
            } elseif($p->type == "video") {
                $output .= '
                    <div class="ratio ratio-16x9">
                        <video src="'.asset($p->media).'" class="w-100 object-fit-cover" loop muted autoplay></video>
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
    
}
