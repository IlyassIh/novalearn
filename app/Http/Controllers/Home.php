<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    function index()
    {


        $etudiant = Auth::user()->etudiant;


        return view('etudiant.home', compact('etudiant'));
    }
}
