<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DashboardView(): View
    {
        return view('dashboard-view');
    }
}
