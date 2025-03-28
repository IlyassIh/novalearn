@extends('component.dashboard-prof')
@section('profile') clicked @endsection
@section('M-Mme') M/Mme @endsection
@section('css') <link rel="stylesheet" href="/css/profCss/profile-prof.css"> @endsection

@section('main-content')
<div class="container mt-3 c1">
    <div class="card">
        <div class="card-header bg-primary text-white">Profil</div>
        <div class="card-body c-body">
            <form>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="Chemam" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Driss" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cni" class="form-label">CNI</label>
                        <input type="text" class="form-control" id="cni" placeholder="AB1234" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="drisschemam@gmail.com">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="0655667788">
                </div>
                {{-- <div class="mb-3">
                    <label for="niveau_etude" class="form-label">Niveau d'étude</label>
                    <input type="text" class="form-control" id="niveau_etude" placeholder="Entrez votre niveau d'étude" disabled>
                </div> --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="col-md-6">
                        <label for="new_password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new_password" placeholder="Entrez votre nouveau mot de passe">
                    </div>
                </div>
                <button type="submit" class="btn save-profile">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection