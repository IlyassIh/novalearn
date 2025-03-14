<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Note extends Controller
{
    function index() {
        return view('component.notes');
    }
}
