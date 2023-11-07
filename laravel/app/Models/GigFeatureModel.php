<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigFeatureModel extends Model
{
    use HasFactory;
    protected $table = 'gig_features'; // Nama tabel dalam database

    protected $fillable = [
        'gig_id','sort','title','price','description',
    ];

    public function gig()
    {
        return $this->belongsTo(GigModel::class, 'gig_id');
    }

}
