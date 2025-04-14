<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Note extends Controller
{
    function index() {
        $etudiant = Auth::user()->etudiant;
        return view('etudiant.notes', compact('etudiant'));
    }
}
