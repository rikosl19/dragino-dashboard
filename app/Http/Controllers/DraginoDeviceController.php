<?php

namespace App\Http\Controllers;

use App\Models\SensorAirHumidity;
use App\Models\SensorAirTemperature;
use App\Models\SensorSoilMoisture;
use App\Models\SensorSoilTemperature;
use App\Models\SensorLightIntensity;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;


class DraginoDeviceController extends Controller
{

    public $restful = true;    
    public function monitorAirTemp($device): View
    {
        //dd($device);
        $data = SensorAirTemperature::orderBy('datetime', 'DESC')->where('device', $device)->get();
        // $data = SensorAirTemperature::all();
        //dd($data);
        return view('dragino-device.air-temperature.dragino-device-air-temperature-v', compact('data'));
        // return view('dragino-device.air-temperature.dragino-device-air-temperature-v');
    }

    public function monitorAirHumidity($device): View
    {
        // $data = SensorAirHumidity::all();
        $data = SensorAirHumidity::orderBy('datetime', 'DESC')->where('device', $device)->get();
        // dd($data);
        return view('dragino-device.air-humidity.dragino-device-air-humidity-v', compact('data'));
    }

    public function monitorSoilTemp($device): View
    {
        // $data = SensorSoilTemperature::all();
        $data = SensorSoilTemperature::orderBy('datetime', 'DESC')->where('device', $device)->get();
        // dd($data);
        return view('dragino-device.soil-temperature.dragino-device-soil-temperature-v', compact('data'));
    }

    public function monitorSoilMoisture($device): View
    {
        // $data = SensorSoilMoisture::all();
        $data = SensorSoilMoisture::orderBy('datetime', 'DESC')->where('device', $device)->get();
        // dd($data);
        return view('dragino-device.soil-moisture.dragino-device-soil-moisture-v', compact('data'));
    }

    public function monitorLightIntensity($device): View
    {
        // $data = SensorLightIntensity::all();
        $data = SensorLightIntensity::orderBy('datetime', 'DESC')->where('device', $device)->get();
        // dd($data);
        return view('dragino-device.light-intensity.dragino-device-light-intensity-v', compact('data'));
    }
}

