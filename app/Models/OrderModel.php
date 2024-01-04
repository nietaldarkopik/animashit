<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders'; // Nama tabel dalam database

    protected $fillable = [
        'customer_id','gig_package_id','price','status','date','note'
    ];

    public function customer()
    {
        return $this->belongsTo(ProfileModel::class, 'customer_id');
    }

    public function gigPackage()
    {
        return $this->belongsTo(GigPackageModel::class, 'gig_package_id');
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'status');
    }
}
