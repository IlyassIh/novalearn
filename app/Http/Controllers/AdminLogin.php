<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLogin extends Controller
{
    public function index() {
        return view('admin.login-admin');
    }

    public function store (Request $request) {
        $cni = $request->cni;
        $password = $request->password;

        $credentials = [
            'cni' => strtoupper($cni),
            'password' => $password
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('admin-gestion-prof.index')->with('success', 'Connexion réussie');
        }
        else {
            return back()->withErrors([
                'cni' => 'CNI ou mot de passe incorrect.'
            ])->onlyInput('cni');
        }

        // User::create([
        //     // 'username' => strtolower($username),
        //     'cni' => strtoupper('vexo'),
        //     'email' => 'vexo@vexo.com',
        //     'password' => Hash::make('vexo@2025'),
        //     'role' => 'Admin'
        // ]);

        // return to_route('admin-gestion-prof.index');
    }
}
