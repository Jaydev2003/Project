<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'client_name',
        'client_address',
        'client_landmark',
        'booking_date',
        'start_date_time',
        'end_date_time',
        'maid_id',
        'booking_type',
        'booking_rate',
       ' monthly_rate',
       'status',
        'remarks',


    ];

     public function maids(){
         return $this->hasMany(maids::class);
     }
}
