<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends PageModel
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(ProfileModel::class, 'customer_id');
    }

    public function gigPackage()
    {
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }

}
