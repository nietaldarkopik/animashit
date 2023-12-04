<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleStatusModel extends Model
{
    use HasFactory;
    protected $table = 'schedule_status'; // Nama tabel dalam database

    protected $fillable = [
        'title', 'description', 'bg', 'color', 'sorting',
    ];
}
