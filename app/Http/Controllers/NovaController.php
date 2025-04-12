<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovaController extends Controller
{

    public function index () {
        return view('novalearn.index');
    }

    public function inscription () {
        return view('novalearn.signup');
    }

    public function login () {
        return view('novalearn.login');
    }
}
