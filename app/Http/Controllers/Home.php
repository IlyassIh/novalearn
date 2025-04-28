<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class Home extends Controller
{
    function index()
    {


        $etudiant = Auth::user()->etudiant;

        $notes = Note::join('matieres', 'notes.matiere_id', '=', 'matieres.id')
            ->where('notes.etudiant_id', $etudiant->id)
            ->orderBy('notes.id', 'desc')
            ->select('notes.*', 'matieres.*')
            ->take(3)
            ->get();

// @dd($notes);

        return view('etudiant.home', compact('etudiant', 'notes'));
    }
}
