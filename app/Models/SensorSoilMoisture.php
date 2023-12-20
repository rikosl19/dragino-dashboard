<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorSoilMoisture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'device',
        'soil_moisture',
        'datetime'
    ];
}
