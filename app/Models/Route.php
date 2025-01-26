<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_point',
        'arrival_point',
        'departure_date',
        'departure_time',
        'arrival_date',
        'arrival_time',
        'cost'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
