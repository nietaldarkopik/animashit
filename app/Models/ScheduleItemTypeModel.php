<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleItemTypeModel extends Model
{
    use HasFactory;
    protected $table = 'schedule_item_types'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','title','description',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }
    
}
