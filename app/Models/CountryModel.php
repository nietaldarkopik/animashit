<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;
    protected $table = 'geo_countries'; // Nama tabel dalam database
    protected $primaryKey = 'code'; // Nama tabel dalam database

    protected $fillable = [
        'name','abv','abv3','abv3_alt','code','slug'
    ];
    
}
