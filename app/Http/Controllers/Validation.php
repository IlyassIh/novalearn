<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class Validation extends Controller
{
    function index()
    {
        $etudiants = Etudiant::all();
        return view('admin.validation', compact('etudiants'));
    }

    function accept($cni)
    {
        
        $etudiant = Etudiant::where('cni', strtoupper($cni))->first();
        
        if ($etudiant) {

            $etudiant->validation = 1;
            $etudiant->save();
        } 


        return to_route('admin-validation.index');
    }

    function reject($cni)
    {
        $etudiant = Etudiant::where('cni', strtoupper($cni))->first();
        if ($etudiant) {
            $etudiant->delete();
        }
        $user = User::where('cni', strtoupper($cni))->first();
        if ($user) {
            $user->delete();
        }
        return to_route('admin-validation.index');
    }
}
