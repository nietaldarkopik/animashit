<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    use HasFactory;
    protected $table = 'portfolios'; // Nama tabel dalam database

    protected $fillable = [
        'gig_package_id','gig_id','artist_id','customer_id','title','description',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

    public function gigPackage()
    {
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }
}