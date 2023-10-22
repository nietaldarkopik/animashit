<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackageMediaModel extends Model
{
    use HasFactory;
    protected $table = 'gig_package_medias'; // Nama tabel dalam database

    protected $fillable = [
        'gig_package_id','title','description','media','type',
    ];

    public function gigPackage()
    {
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }

}
