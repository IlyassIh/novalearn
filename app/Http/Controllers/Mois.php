<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mois extends Controller
{
    function index () {
        return view('etudiant.mois');
    }
}
