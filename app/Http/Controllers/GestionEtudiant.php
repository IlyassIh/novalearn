<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class GestionEtudiant extends Controller
{
    function index() {
        $etudiants = Etudiant::all();
        return view('admin.gestion-etudiant', compact('etudiants'));
    }
}
