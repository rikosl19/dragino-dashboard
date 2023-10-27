<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
 public function index() : View {
    return view('dashboard-v');
 }
}
