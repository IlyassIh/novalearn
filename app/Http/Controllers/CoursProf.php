<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursProf extends Controller
{
    function index() {
        return view('prof.cours');
    }
}
