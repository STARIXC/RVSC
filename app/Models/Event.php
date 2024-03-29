<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'event_name',
        'event_description',
        'entrance_fee',
        'event_date',
        'event_from',
        'event_to',
        'event_venue',
        'event_image',
        ];
}
