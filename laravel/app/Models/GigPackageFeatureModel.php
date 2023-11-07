<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackageFeatureModel extends Model
{
    use HasFactory;
    protected $table = 'gig_package_features'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id', 'gig_package_head_id', 'gig_package_id', 'gig_feature_id', 'value',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }
    

    public function feature()
    {
        return $this->belongsTo(GigFeatureModel::class, 'gig_feature_id');
    }
    

    public function package()
    {
        //return $this->hasManyThrough(PackageModel::class, GigPackageModel::class, 'package_id', 'id', 'gig_package_id', 'package_id');
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }
    
}
