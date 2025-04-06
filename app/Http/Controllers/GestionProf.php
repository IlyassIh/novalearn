<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionProf extends Controller
{
    function index() {
        return view('admin.gestion-prof');
    }
}
