<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigModel extends Model
{
    use HasFactory;
    protected $table = 'gigs'; // Nama tabel dalam database

    protected $fillable = [
        'title', 'description',
    ];

    public function gigMedias()
    {
        return $this->hasMany(GigMediaModel::class,'gig_id');
    }

    public function gigPackages()
    {
        return $this->hasMany(GigPackageModel::class,'gig_id');
    }
    
    public function gigHeads()
    {
        return $this->hasMany(GigPackageHeadModel::class, 'gig_id');
    }
    
    public function portfolios()
    {
        return $this->hasMany(PortfolioModel::class, 'gig_id');
    }
}
