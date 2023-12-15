<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AuthLogin extends Controller
{
    //
    public function login(): View {
        return view('auth.login-v');
     }
}
