<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionEtudiant extends Controller
{
    function index() {
        return view('admin.gestion-etudiant');
    }
}
