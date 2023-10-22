<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigMediaModel extends Model
{
    use HasFactory;
    protected $table = 'gig_medias'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','title','description','media','type',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }
}
