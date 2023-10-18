<?php

namespace App\Http\Controllers;

use App\Models\SensorAirTemperature;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class DraginoDeviceController extends Controller
{
    public function monitorAirTemp(): View
    {
        $data = SensorAirTemperature::all();
        return view('dragino-device.air-temperature.dragino-device-air-temperature-v', compact('data'));
    }
}
