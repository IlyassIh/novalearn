<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiant extends Controller
{
    function index () {
        return view('component.dashboard');
    }
}
