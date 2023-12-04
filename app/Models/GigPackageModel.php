<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackageModel extends Model
{
    use HasFactory;
    protected $table = 'gig_packages'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','package_id','gig_package_head_id','sort','title','price','description','image','video',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

    public function package()
    {
        return $this->belongsTo(PackageModel::class, 'package_id');
    }

    public function artist()
    {
        return $this->belongsTo(ProfileModel::class, 'profile_id');
    }

    public function head()
    {
        return $this->belongsTo(GigPackageHeadModel::class, 'gig_package_head_id');
    }

    public function features()
    {
        return $this->hasMany(GigPackageFeatureModel::class, 'gig_package_id');
    }
}
