<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackageExtraModel extends Model
{
    use HasFactory;
    protected $table = 'gig_package_extras'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id', 'gig_package_head_id', 'gig_feature_id', 'value',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }
}
