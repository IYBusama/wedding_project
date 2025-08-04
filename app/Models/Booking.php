<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'eventSelect',
        'userName',
        'userEmail',
        'bookingDate',
    ];
}
