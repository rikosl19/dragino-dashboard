<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorAirTemperature extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'temperature',
        'date',
        'time'
    ];
}
