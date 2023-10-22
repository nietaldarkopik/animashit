<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
    protected $table = 'schedules'; // Nama tabel dalam database

    protected $fillable = [
        'type','title','keyword','value','description',
    ];

}
