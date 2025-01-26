<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_code'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            $ticket->ticket_code = rand(0000000000000000, 9999999999999999);
        });
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
