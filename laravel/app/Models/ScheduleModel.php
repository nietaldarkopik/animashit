<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleModel extends Model
{
    use HasFactory;
    protected $table = 'schedules'; // Nama tabel dalam database

    protected $fillable = [
        'order_id','gig_id','artist_id','customer_id','start_date','end_date','status',
    ];

    public function order()
    {
        return $this->belongsTo(OrderModel::class, 'order_id');
    }

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }
    public function artist()
    {
        return $this->belongsTo(ProfileModel::class, 'artist_id');
    }
    
    public function customer()
    {
        return $this->belongsTo(ProfileModel::class, 'customer_id');
    }
    
    
    public function statusSchedule()
    {
        return $this->belongsTo(ScheduleStatusModel::class, 'status');
    }
    
}
