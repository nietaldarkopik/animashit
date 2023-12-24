<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackageHeadModel extends Model
{
    use HasFactory;
    protected $table = 'gig_package_head'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','profile_id',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

    public function packages()
    {
        return $this->hasMany(GigPackageModel::class, 'gig_package_head_id');
    }

    public function artist()
    {
        return $this->belongsTo(ProfileModel::class, 'profile_id');
    }
    
    public function minPrice()
    {
        return  $this->hasMany(GigPackageModel::class, 'gig_package_head_id')->min('price');
    }
    
    public function maxPrice()
    {
        return $this->hasMany(GigPackageModel::class, 'gig_package_head_id')->max('price');
    }
    
    public function scheduleSummary($artist = 0,$status = 1)
    {
        return $this->belongsToMany(ScheduleModel::class, 'gig_package_head', 'gig_id', 'profile_id','gig_id','artist_id')->where('artist_id',$artist)->where('schedules.status',$status)->count();
        //return new ScheduleModel::class, GigPackageModel::class, 'gig_id', 'artist_id')->where('artist_id',$artist)->where('status',$status)->count();
    }
}
