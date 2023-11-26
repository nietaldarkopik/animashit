<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleItemModel extends Model
{
    use HasFactory;
    protected $table = 'schedule_items'; // Nama tabel dalam database

    protected $fillable = [
        'schedule_id','schedule_item_type_id','color','start_date','end_date','status',
    ];

    public function schedule()
    {
        return $this->belongsTo(ScheduleModel::class, 'schedule_id');
    }

    public function statusSchedule()
    {
        return $this->belongsTo(ScheduleStatusModel::class, 'status');
    }

    public function scheduleType()
    {
        return $this->belongsTo(ScheduleItemTypeModel::class, 'schedule_item_type_id');
    }
}
