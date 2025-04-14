<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GestionProf extends Controller
{
    function index() {
        
        return view('admin.gestion-prof');
    }

    public function create (Request $request) {
        $cni = strtoupper($request->cni);
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = strtolower($request->email);
        $telephone = $request->telephone;
        $password = $request->password;

        Prof::create([
            'cni' => $cni,
            'nom' => $nom,
            'prenom' => $prenom,
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

        

        return to_route('admin-gestion-prof.index');
    }
}
