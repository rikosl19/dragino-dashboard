<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DraginoDeviceController extends Controller
{
    public function index(): View
    {
        return view('dragino-device.temperature.dragino-device-temperature-v');
    }
    
    public function dataTemperature(): View 
    {
        return view('dragino-device.temperature.dragino-device-temperature-data-v');
    }

    public function visualTemperature(): View 
    {
        return view('dragino-device.temperature.dragino-device-temperature-visual-v');
    }
}
