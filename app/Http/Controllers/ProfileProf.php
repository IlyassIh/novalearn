<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileProf extends Controller
{
    function index() {
        return view('prof.profile-prof');
    }
}
