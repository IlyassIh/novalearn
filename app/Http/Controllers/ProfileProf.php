<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileProf extends Controller
{
    function index()
    {
        $prof = Auth::user()->prof;
        return view('prof.profile-prof', compact('prof'));
    }

    function update(Request $request)
    {
        $email = $request->email;
        $telephone = $request->telephone;
        $password = $request->password;

        $request->validate([
            'email' => 'email|unique:profs,email,' . Auth::user()->prof->cni . ',cni',
            'telephone' => 'max:10|unique:profs,telephone,' . Auth::user()->prof->cni . ',cni',

        ],
        [
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 10 chiffres.',
            'telephone.unique' => 'Ce numéro de téléphone est déjà utilisée.',
            
            // 'password.required' => 'Le mot de passe est obligatoire.',
            // 'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            // 'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        $updated = false;

        DB::transaction(function () use ($email, $telephone, $password, &$updated) {
            $prof = Auth::user()->prof;

            if ($prof->email !== $email) {
                $prof->email = $email;
                $updated = true;
            }

            if ($prof->telephone !== $telephone) {
                $prof->telephone = $telephone;
                $updated = true;
            }

            if (!empty($password)) {
                $prof->password = Hash::make($password);
                $updated = true;
            }

            if ($updated) {
                $prof->save();
            }

            $user = Auth::user();

            $userChanged = false;
    
            if ($user->email !== $email) {
                $user->email = $email;
                $userChanged = true;
            }
    
            if (!empty($password)) {
                $user->password = Hash::make($password);
                $userChanged = true;
            }
    
            if ($userChanged) {
                $user->save();
                $updated = true;
            }
        });
        if ($updated) {

            return to_route('add-notes-prof.index')->with('success', 'Profil mis à jour avec succès');
        } else {
            return to_route('add-notes-prof.index')->with('success', 'Aucune mise à jour effectuée');
        }
    }
}
