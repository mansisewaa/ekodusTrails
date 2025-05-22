<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrekDetails extends Model
{
    use HasFactory;
    protected $table = 'trek_details';
    protected $fillable = [
        'trek_id',
        'overview',
        'highlights',
        'itinerary',
        'includes',
        'excludes',
        'reviews',
    ];

    public function trek()
    {
        return $this->belongsTo(Treks::class,'trek_id', 'id');
    }
}
