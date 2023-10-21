<?php

namespace App\Http\Controllers;

use App\Models\SensorAirHumidity;
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

    public function monitorAirHumidity(): View
    {
        $data = SensorAirHumidity::all();
        // dd($data);
        return view('dragino-device.air-humidity.dragino-device-air-humidity-v', compact('data'));
    }

    public function monitorSoilTemp(): View
    {
        $data = SensorAirHumidity::all();
        // dd($data);
        return view('dragino-device.soil-temperature.dragino-device-soil-temperature-v', compact('data'));
    }

    public function monitorSoilMoisture(): View
    {
        $data = SensorAirHumidity::all();
        // dd($data);
        return view('dragino-device.soil-moisture.dragino-device-soil-moisture-v', compact('data'));
    }

    public function monitorLightIntensity(): View
    {
        $data = SensorAirHumidity::all();
        // dd($data);
        return view('dragino-device.light-intensity.dragino-device-light-intensity-v', compact('data'));
    }
}