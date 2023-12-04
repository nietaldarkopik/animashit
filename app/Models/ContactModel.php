<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contacts'; // Nama tabel dalam database

    protected $fillable = [
        'name','email','country','subject','message','status'
    ];

}
