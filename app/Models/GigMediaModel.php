<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigMediaModel extends Model
{
    use HasFactory;
    protected $table = 'gig_medias'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','title','description','media','type','display'
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

    public function uploadMedia($d = [],$media_file = [])
    {
    
        if(in_array($d->type, ['upload_image','upload_video']))
        {
            $gig_id = $d->gig_id;
            $ext = $media_file->extension();
            if($path = $media_file->storeAs(
                'uploads/gigs', 'animashit-'.$d->type.'-'.$gig_id.'-'.rand(1,99999).'.'.$ext
            ))
            {
                $d->media = $path;
                //$d->gig_id = $d->gig_id;
                //$data[$i]['sort'] = $i;
                $d->save();
            }
        }

    }
}
