<?php

namespace App\Http\Controllers;

use App\Models\Controle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class AjouterNoteProf extends Controller
{
    function index()
    {
        $prof = Auth::user()->prof;
        $filiers = DB::table('filiers')
            ->join('prof__matiere__filieres', 'filiers.id', '=', 'prof__matiere__filieres.filiere_id')
            ->where('prof__matiere__filieres.prof_id', $prof->id)
            ->groupBy('filiers.id', 'filiers.nom', 'filiers.created_at', 'filiers.updated_at') // ajoute toutes les colonnes ici
            ->select('filiers.*')
            ->get();

        $matieres = DB::table('matieres')
            ->join('prof__matiere__filieres', 'matieres.id', '=', 'prof__matiere__filieres.matiere_id')
            ->where('prof__matiere__filieres.prof_id', $prof->id)
            ->select('matieres.*')
            ->get();

        $controles = Controle::all();



        return view('prof.ajouterNote', compact('prof', 'filiers', 'matieres', 'controles'));
    }

    public function getMatieres($filiere_id)
    {
        $prof = Auth::user()->prof;
        $matieres = DB::table('matieres')
            ->join('prof__matiere__filieres', 'matieres.id', '=', 'prof__matiere__filieres.matiere_id')
            ->where('prof__matiere__filieres.prof_id', $prof->id)
            ->where('prof__matiere__filieres.filiere_id', $filiere_id)
            ->select('matieres.*')
            ->get();
        return response()->json($matieres);
    }

    public function getFiliere(Request $request)
    {
        $prof = Auth::user()->prof;
        $filieres = $request->filiere;
        $matiers = $request->matiere;
        $controle = $request->controle;

        $filiers = DB::table('filiers')
            ->join('prof__matiere__filieres', 'filiers.id', '=', 'prof__matiere__filieres.filiere_id')
            ->where('prof__matiere__filieres.prof_id', $prof->id)
            ->groupBy('filiers.id', 'filiers.nom', 'filiers.created_at', 'filiers.updated_at')
            ->select('filiers.*')
            ->get();

        $matieres = DB::table('matieres')
            ->join('prof__matiere__filieres', 'matieres.id', '=', 'prof__matiere__filieres.matiere_id')
            ->where('prof__matiere__filieres.prof_id', $prof->id)
            ->select('matieres.*')
            ->get();

        $controles = Controle::all();

        $etudiants = DB::table('etudiants')
            ->join('filiers', 'etudiants.filiere_id', '=', 'filiers.id')
            ->join('filiere_matieres', 'filiers.id', '=', 'filiere_matieres.filiere_id')
            ->join('matieres', 'filiere_matieres.matiere_id', '=', 'matieres.id')
            ->join('prof__matiere__filieres', 'matieres.id', '=', 'prof__matiere__filieres.matiere_id')
            ->join('profs', 'prof__matiere__filieres.prof_id', '=', 'profs.id')
            ->where('profs.id', $prof->id)
            ->where('filiers.id', $filieres)
            ->where('matieres.id', $matiers)
            ->select('etudiants.id as etudiant_id','etudiants.nom', 'etudiants.prenom', 'matieres.nom as matiere', 'filiere_matieres.annee_scolaire as annee_scolaire', 'filiere_matieres.semaistre as semaistre')
            ->get();
            
            // @dd($etudiants[0]->semaistre);

        if ($request->has('search')) {
            return view('prof.ajouterNote', compact('etudiants', 'prof', 'filiers', 'matieres', 'controles'));
        }
        elseif ($request->has('soumettre')) {
            // @dd($filieres, $matiers);

            // @dd($etudiants);
            
            
            $notes = $request->note; // [etudiant_id => valeur]

            foreach ($etudiants as $etudiant) {
                $noteValue = $notes[$etudiant->etudiant_id] ?? null;
            
                if (!is_null($noteValue)) {
                    $addperso = Note::create([
                        'matiere_id' => intval($matiers),
                        'etudiant_id' => $etudiant->etudiant_id,
                        'prof_id' => $prof->id,
                        'note' => $noteValue,
                        'controle_id' => intval($controle),
                        'filiere_id' => intval($filieres),
                        'annee_scolaire' => $etudiant->annee_scolaire,
                        'semaistre' => $etudiant->semaistre
                    ]);
                }
            }
            
            return view('prof.ajouterNote', compact('prof', 'filiers', 'matieres', 'controles'));
            
        }
    }
}
