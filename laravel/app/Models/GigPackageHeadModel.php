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
        return $this->hasMany(GigPackageModel::class, 'package_id');
    }

    public function artist()
    {
        return $this->belongsTo(ProfileModel::class, 'profile_id');
    }
}
