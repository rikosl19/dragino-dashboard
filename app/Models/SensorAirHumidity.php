<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorAirHumidity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'device',
        'humidity',
        'datetime'
    ];
}