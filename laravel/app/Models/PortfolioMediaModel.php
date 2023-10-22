<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioMediaModel extends Model
{
    use HasFactory;
    protected $table = 'portfolio_medias'; // Nama tabel dalam database

    protected $fillable = [
        'portfolio_id','title','description','media','type',
    ];

    public function portfolio()
    {
        return $this->belongsTo(PortfolioMediaModel::class, 'portfolio_id');
    }
    
}
