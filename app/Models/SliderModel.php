<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;
    protected $table = 'sliders'; // Nama tabel dalam database

    protected $fillable = [
        'title','subtitle','description','media','type','button_url','button_text','sort','status',
    ];
    
    /* 
    public function getRouteKeyName(): string
    {
        return 'slug';
    } */
}
