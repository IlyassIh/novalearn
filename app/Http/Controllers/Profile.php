<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Controller
{
    function index () {
        $etudiant = Auth::user()->etudiant;
        return view('etudiant.profile', compact('etudiant'));
    }


    public function update(Request $request) {
        
        $email = strtolower($request->email);
        $telephone = $request->telephone;
        $password = $request->password;

        

        $request->validate([
            'email' => 'required|email|unique:etudiants,email,' . Auth::user()->etudiant->cni . ',cni',
            'telephone' => 'required|max:10',
            'password' => 'confirmed',
        ], [
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 10 chiffres.',
            
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]);

        $updated = false;

        DB::transaction(function () use ($email, $telephone, $password, &$updated) {
            $etudiant = Auth::user()->etudiant;
            $user = Auth::user(); // Ensure this returns an instance of a User model
            if (!$user instanceof \App\Models\User) {
                throw new \Exception('Authenticated user is not an instance of the User model.');
            }
    
            if ($etudiant->email !== $email) {
                $etudiant->email = $email;
                $updated = true;
            }
    
            if ($etudiant->telephone !== $telephone) {
                $etudiant->telephone = $telephone;
                $updated = true;
            }
    
            if (!empty($password)) {
                $etudiant->password = Hash::make($password);
                $updated = true;
            }
    
            if ($updated) $etudiant->save();
    
            // Reset flag if user data changes
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
            return to_route('accueil.index')->with('success', 'Votre profil a bien été mis à jour.');
        } else {
            return to_route('accueil.index')->with('success', 'Rien n\'a été modifié.');
        }
    }
}
