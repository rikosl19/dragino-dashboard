<?php

namespace App\Http\Controllers;

use App\Models\SensorAirTemperature;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class DraginoDeviceController extends Controller
{
    public function index(): View
    {
        $data = SensorAirTemperature::latest()->paginate(10);
        // return view('dragino-device.air-temperature.dragino-device-air-temperature-v', ['sensor' => $data['sensor']]);
        return view('dragino-device.air-temperature.dragino-device-air-temperature-v', compact('data'));
    }

    // public function dataTemperature(): View
    // {

    //     return view('dragino-device.air-temperature.dragino-device-air-temperature-data-v');
    // }

    // public function visualTemperature(): View
    // {
    //     return view('dragino-device.air-temperature.dragino-device-air-temperature-visual-v');
    // }
}
