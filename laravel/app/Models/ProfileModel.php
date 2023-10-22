<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    use HasFactory;
    protected $table = 'profiles'; // Nama tabel dalam database

    protected $fillable = [
        'name','nickname','avatar','country','email','phone','twitter','ig','facebook','youtube','user_type','user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
