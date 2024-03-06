<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class maids extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'experience',
        'working_type',
        'hourly_rate',
        'status',
        'mobile',
        'alternate_mobile',
        'email',
        'idproof',
        'monthly_rate',
        'daily_rate',

    ];

    public function booking(){
        return $this->belongsTo(booking::class);
    }
}
