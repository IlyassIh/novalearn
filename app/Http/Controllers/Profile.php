<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    function index () {
        $etudiant = Auth::user()->etudiant;
        return view('etudiant.profile', compact('etudiant'));
    }
}
