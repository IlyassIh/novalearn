<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterNoteProf extends Controller
{
    function index () {
        return view('prof.ajouterNote');
    }
}
