<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treks extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function locations()
    {
        return $this->belongsTo(Location::class,'location','id');
    }

    public function trekDetails()
    {
        return $this->hasOne(TrekDetails::class,'trek_id','id');
    }
}
