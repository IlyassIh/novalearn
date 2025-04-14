<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursProf extends Controller
{
    function index() {
        $prof = Auth::user()->prof;
        return view('prof.cours', compact('prof'));
    }
}
