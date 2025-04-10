<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Filier;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NovaController extends Controller
{

    function index () {
        return view('novalearn.index');
    }

    function inscription () {
        $filiers = Filier::all();
        return view('novalearn.signup', compact('filiers'));
    }

    function store(Request $request) {

        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = strtolower($request->email);
        $password = $request->password;
        $telephone = $request->telephone;
        $adresse = $request->adresse;
        $niveau = $request->niveau;
        $cni = strtoupper($request->cni);
        $centre_souhaite = $request->centre;
        $filier = $request->filier;

        $request->validate([
            'nom' => 'required|min:3|max:40', 
            'prenom' => 'required|min:3|max:40', 
            'email' => 'required|email|unique:etudiants,email', 
            'password' => 'required|min:8|confirmed',    
            'telephone' => 'required|numeric|digits:10', 
            'adresse' => 'required',       
            'cni' => 'required|alpha_num|max:10',        
            'centre' => 'required',
            'niveau' => 'required',
            'filier' => 'required'                
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.min' => 'Le nom doit contenir au moins 3 caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 40 caractères.',
        
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.min' => 'Le prénom doit contenir au moins 3 caractères.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 40 caractères.',
        
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.numeric' => 'Le téléphone doit contenir uniquement des chiffres.',
            'telephone.digits' => 'Le téléphone doit contenir exactement 10 chiffres.',
        
            'adresse.required' => 'L\'adresse est obligatoire.',
        
            'cni.required' => 'Le CNI est obligatoire.',
            'cni.alpha_num' => 'Le CNI doit contenir uniquement des lettres et des chiffres.',
            'cni.max' => 'Le CNI doit contenir maximum 10 caractères.',
        
            'centre.required' => 'Le choix du centre est obligatoire.',
            'niveau.required' => 'Le niveau d\'études est obligatoire.',

            'filier.required' => 'Le choix du filier est obligatoire.'
        ]
    );
        

    
        $hashedPassword = Hash::make($password);

        Etudiant::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $hashedPassword,
            'telephone' => $telephone,
            'adresse' => $adresse,
            'niveau' => $niveau,
            'cni' => $cni,
            'centre' => $centre_souhaite,
            'filiere_id' => $filier,
        ]);

        User::create([
            'cni' => $cni,
            'password' => $hashedPassword,
            'role' => 'Etudiant',
        ]);

        return to_route('login');
    }

    function login () {
        return view('novalearn.login');
    }

    function storeLogin(Request $request) {
        $cni = $request->cni;
        $password = $request->password;

        $request->validate([
            'cni' => 'required|alpha_num|max:10',        
            'password' => 'required|min:8',                
        ], [
            'cni.required' => 'Le CNI est obligatoire.',
            'cni.alpha_num' => 'Le CNI doit contenir uniquement des lettres et des chiffres.',
            'cni.max' => 'Le CNI doit contenir maximum 10 caractères.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        ]
    );

    $user = DB::table('users')
    ->join('etudiants', 'users.cni', '=', 'etudiants.cni')
    ->where('users.cni', strtoupper($cni))
    ->first();

if ($user && Hash::check($password, $user->password)) {
    Auth::loginUsingId($user->id);
    $request->session()->regenerate();
    session(['cni' => $user->cni, 'nom' => $user->nom, 'prenom' => $user->prenom]);
    return to_route('accueil.index');
}

return back()->withErrors(['password' => 'CNI ou mot de passe incorrect']);
}

}

