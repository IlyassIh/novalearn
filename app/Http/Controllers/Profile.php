<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Profile extends Controller
{
    function index () {
        return view('etudiant.profile');
    }

    function update(Request $request) {
        
        $etudiant = Auth::user()->etudiant;
        
        $email = $request->email;
        $telephone = $request->telephone;
        $password = $request->password;
        $lastPassword = $request->lastPassword;

        $request->validate([
            'email' => 'email|unique:etudiants,email',
            'telephone' => 'numeric|digits:10',
            
        ]);


        $etudiant->update([
            'email' => $email,
            'telephone' => $telephone
        ]);

        
        session([
            'email' => $etudiant->email,
            'telephone' => $etudiant->telephone,
        ]);

        
        return to_route('profile.index')->with('success', 'Profil mis à jour avec succès');
    }
}

