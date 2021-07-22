<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
      'room-selection',
        'checkin',
        'checkout',
        'adult',
        'child',
        'customer-name',
        'customer-email',
        'phone',
        'address',
        'city',
        'region',
        'postal-code',
        'special-request',
        'room-id',
        'room-price',
        'room-name',
        
    ];
   
}
