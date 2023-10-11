<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DraginoDeviceController extends Controller
{
    public function index(): View
    {
        return view('dragino-device-v');
    }
    
    public function temperature(): View 
    {
        return view('dragino-device-temperature-v');
    }
}
