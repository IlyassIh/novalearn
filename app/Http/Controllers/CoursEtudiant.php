<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursEtudiant extends Controller
{
    function index() {
        $etudiant = Auth::user()->etudiant;
        return view('etudiant.cours', compact('etudiant'));
    }
}
