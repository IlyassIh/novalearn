<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursEtudiant extends Controller
{
    function index() {
        return view('etudiant.cours');
    }
}
