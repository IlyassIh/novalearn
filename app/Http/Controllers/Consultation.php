<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Consultation extends Controller
{
    function index () {
        return view('admin.consultation');
    }
}
