<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    use HasFactory;
    protected $table = 'pages'; // Nama tabel dalam database

    protected $fillable = [
        'slug','title','description','status','template',
    ];

}
