<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    use HasFactory;
    protected $table = 'packages'; // Nama tabel dalam database

    protected $fillable = [
        'title', 'description',
    ];

    public function gigPackages()
    {
        return $this->hasMany(GigPackageModel::class,'package_id');
    }

    public function gigFeatures()
    {
        return $this->hasManyThrough(GigPackageFeatureModel::class, GigPackageModel::class, 'package_id', 'gig_package_id', 'id', 'id');
    }

    public function gigPackageHead()
    {
        return $this->hasMany(GigPackageHeadModel::class,'gig_package_head_id');
    }
    
}
