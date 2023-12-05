<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model {
    use HasFactory;
    protected $table = 'portfolios'; // Nama tabel dalam database

    protected $fillable = [
        'gig_package_id', 'gig_id', 'artist_id', 'customer_id', 'title', 'description',
    ];

    public function gig() {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

    public function gigPackage() {
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }

    public function profile() {
        return $this->belongsTo(ProfileModel::class, 'artist_id');
    }

    public function client() {
        return $this->belongsTo(ProfileModel::class, 'customer_id');
    }

    public function media() {
        return $this->hasMany(PortfolioMediaModel::class, 'portfolio_id');
    }

    public function showDisplay($id = 0) {
        $portfolio = PortfolioModel::where('id',$id)->with(['media' => function($query){
            $query->where('type','upload_image');
        }])->get()->first();

        $p = isset($portfolio->media)?$portfolio->media->first():null;
        $p = (empty($p))?$portfolio->media()->first():$p;
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
                        <video src="'.asset($p->media).'" class="w-100 object-fit-cover" controls></video>
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
