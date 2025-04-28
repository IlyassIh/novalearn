<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\User;
use App\Models\Filier;
use App\Models\Matiere;
use App\Models\Prof_Matiere_Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GestionProf extends Controller
{
    function index()
    {
        $profs = Prof::all();
        
        return view('admin.gestion-prof', compact('profs'));
    }

    public function create(Request $request)
    {
        $cni = strtoupper($request->cni);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = strtolower($request->email);
        $telephone = $request->telephone;
        $password = $request->password;

        $request->validate([
            'cni' => 'required|max:10|unique:profs',

            'nom' => 'required|max:25',
            'prenom' => 'required|max:25',
            'email' => 'required|email|unique:profs|max:50',
            'password' => 'required|min:8|confirmed',
            'telephone' => 'required|max:10',
        ], [
            'cni.required' => 'La CNI est obligatoire.',
            'cni.max' => 'La CNI ne doit pas dépasser 10 caractères.',

            'nom.required' => 'Le nom est obligatoire.',
            'nom.max' => 'Le nom ne doit pas dépasser 25 caractères.',

            'prenom.required' => 'Le prenom est obligatoire.',
            'prenom.max' => 'Le prenom ne doit pas dépasser 25 caractères.',

            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit avoir un format valide.',
            'email.max' => 'L\'email ne doit pas dépasser 50 caractères.',
            'email.unique' => 'L\'email est deja utilisé.',

            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit avoir au moins 8 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',

            'telephone.required' => 'Le telephone est obligatoire.',
            'telephone.max' => 'Le telephone ne doit pas dépasser 10 caractères.',
        ]);

        try {
            DB::beginTransaction();

            Prof::create([
                'cni' => $cni,
                'nom' => ucfirst($nom),
                'prenom' => ucfirst($prenom),
                'email' => $email,
                'telephone' => $telephone,
                'password' => Hash::make($password)
            ]);

            User::create([
                'cni' => $cni,
                'email' => $email,
                'password' => Hash::make($password),
                'role' => 'Prof'
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Erreur lors de l’enregistrement.');
        }




        return to_route('admin-gestion-prof.index');
    }

    public function destroy($cni)
    {
        $cni = strtoupper($cni);
        $prof = Prof::where('cni', $cni)->first();
        if ($prof) {
            $prof->delete();
        }

        $user = User::where('cni', $cni)->first();
        if ($user) {
            $user->delete();
        }
        return to_route('admin-gestion-prof.index');
    }

    public function addMat(Request $request ,$id) {
        $prof = Prof::findORFail($id);
        $a = Prof_Matiere_Filiere::create([
            'prof_id' => $prof->id,
            'matiere_id' => $request->matiere,
            'filiere_id' => $request->filiere,
            'semaistre' => $request->semestre,
            'annee_scolaire' => $request->annee_scolaire

        ]);
        return to_route('admin-gestion-prof.index');
    }

    public function showAddMat($id) {
        $prof = Prof::findORFail($id);
        $filieres = Filier::all();
        $matieres = Matiere::all();
        return view('admin.addMat', compact('filieres', 'matieres', 'prof'));
    }
}
