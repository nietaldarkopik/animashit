<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function userType()
    {
        return $this->belongsTo(UserTypeModel::class,'user_type');
    }

    public function packages()
    {
        return $this->hasMany(GigPackageHeadModel::class,"profile_id");
    }

    public function currentProfile(){
        $user = Auth::user();
        $profile = $this->where('user_id',$user->id)->get()->first();
        return $profile;
    }
}
