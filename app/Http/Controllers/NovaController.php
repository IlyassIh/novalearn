<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Filier;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class NovaController extends Controller
{

    public function index () {
        return view('novalearn.index');
    }

    public function inscription (Request $request) {
        $filiers = Filier::all();
        return view('novalearn.signup', compact('filiers'));
    }

    public function create(Request $request) {
        $cni = $request->cni;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $password = $request->password;
        $telephone = $request->telephone;
        $niveau = $request->niveau;
        $adresse = $request->adresse;
        $centre = $request->centre;
        $filier = $request->filier;

        $request->validate([
            'cni' => 'required|max:10|unique:etudiants',

            'nom' => 'required|max:25',
            'prenom' => 'required|max:25',
            'email' => 'required|email|unique:etudiants|max:50',
            'password' => 'required|min:8',
            'telephone' => 'required|max:10',
            'niveau' => 'required',
            'adresse' => 'required',
            'filier' => 'required',
            'centre' => 'required'
        ], [
            'cni.required' => 'La CNI est obligatoire.',
            'cni.max' => 'La CNI ne doit pas dépasser 10 caractères.',
        
            'nom.required' => 'Le nom est obligatoire.',
            'nom.max' => 'Le nom ne doit pas dépasser 25 caractères.',
        
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 25 caractères.',
        
            'email.required' => 'L’email est obligatoire.',
            'email.email' => 'L’email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'email.max' => 'L’email ne doit pas dépasser 50 caractères.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        
            'telephone.required' => 'Le téléphone est obligatoire.',
            'telephone.max' => 'Le téléphone ne doit pas dépasser 10 chiffres.',
        
            'niveau.required' => 'Le niveau est obligatoire.',
            'adresse.required' => 'L’adresse est obligatoire.',
            'filier.required' => 'La filière est obligatoire.',
            'centre.required' => 'Le centre est obligatoire.',
        ]);

        Etudiant::create([
            'cni' => strtoupper($cni),
            'nom' => ucfirst($nom),
            'prenom' => ucfirst($prenom),
            'email' => strtolower($email),
            'password' => Hash::make($password),
            'telephone' => $telephone,
            'niveau_etude' => $niveau,
            'adresse' => $adresse,
            "filiere_id" => $filier,
            'centre' => $centre
        ]);

        User::create([
            'cni'=> strtoupper($cni),
            'email' => strtolower($email),
            'password' => Hash::make($password),
            'role' => 'Etudiant'
        ]);

        return to_route('login')->with('success', "Votre compte a été bien créé M/Mme {$nom} {$prenom}. Vous pouvez maintenant vous connecter.");
    }

    public function login () {
        return view('novalearn.login');
    }

    public function loginStore(Request $request) {
        $cni = $request->cni;
        $password = $request->password;
        $credentials = [
            'cni' => strtoupper($cni),
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if( $user->role === 'Prof') {
                return to_route('add-notes-prof.index')->with('success', 'Vous avez bien vous connecté. Bienvenue !');
            }

            else if( $user->role === 'Etudiant') {
                return to_route('accueil.index')->with('success', 'Vous avez bien vous connecté. Bienvenue !');
            }
            else {
                return back()->withErrors([
                    'cni' => 'Le CNI ou le mot de passe est incorrect.'
                ])->onlyInput('cni');
            }

        } else {
            return back()->withErrors([
                'cni' => 'Le CNI ou le mot de passe est incorrect.'
            ])->onlyInput('cni');
        }
    }

    public function logout() {
        $user = Auth::user();
        Auth::logout();
        Session::flush();
        if ($user->role === "Etudiant") {
            return to_route('login')->with('success', 'Vous avez bien vous déconnecté. Au revoir !');
        }
        else if ($user->role === "Prof") {
            return to_route('login')->with('success', 'Vous avez bien vous déconnecté. Au revoir !');
        }
        else if ($user->role === "Admin") {
            return to_route('admin');
        }

        return to_route('login')->with('success', 'Vous avez bien vous déconnecté. Au revoir !');
        
    }


}
