<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Note extends Controller
{
    function index() {
        $etudiant = Auth::user()->etudiant;
        $matieres = DB::table('profs')
        ->join('prof__matiere__filieres', 'prof__matiere__filieres.prof_id', '=', 'profs.id')
        ->rightJoin('matieres', 'prof__matiere__filieres.matiere_id', '=', 'matieres.id')
        ->join('filiere_matieres', 'matieres.id', '=', 'filiere_matieres.matiere_id')
        ->where('filiere_matieres.semaistre', 's1')
        ->where('filiere_matieres.filiere_id', 1)
        ->orderBy('matieres.id')
        ->select([
            'matieres.id             as matiere_id',
            'matieres.nom            as nom',
            'filiere_matieres.coef   as coef',
            'profs.nom               as prof_nom',
            'profs.prenom            as prof_prenom',
        ])
        ->get();


        $notes = DB::table('notes')
        ->where('etudiant_id', $etudiant->id)
        ->where('semaistre', 's1')
        ->whereIn('controle_id', [1,2,3,4,5])
        ->get(['matiere_id', 'controle_id', 'note'])
        ->keyBy(fn($n) => $n->matiere_id . '_' . $n->controle_id)  
        ->map(fn($n) => $n->note)  
        ->toArray();
            


        return view('etudiant.notes', compact('etudiant', 'matieres', 'notes'));
    }
    
}
