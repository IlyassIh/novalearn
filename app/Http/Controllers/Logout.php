<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout extends Controller
{
    function destroy() {    
        Session::flush();
        Auth::logout();
        return to_route('login');
    }
}
