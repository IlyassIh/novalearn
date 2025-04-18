@extends('component.dashboard-etudiant')
@section('profile') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/profile.css"> @endsection

@section('main-content')
<div class="container mt-3 c1">
    <div class="card">
        <div class="card-header bg-primary text-white">Profil</div>
        <div class="card-body c-body">
            {{------------------------------------------- form to take information from user -----------------------------}}
            <form method="POST" action="{{route('update.profile')}}">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="{{$etudiant->nom}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="{{$etudiant->prenom}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cni" class="form-label">CNI</label>
                        <input type="text" class="form-control" id="cni" placeholder="{{$etudiant->cni}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$etudiant->email}}"
                        >
                        @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" value="{{$etudiant->telephone}}">
                    @error('telephone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                </div>
                <div class="mb-3">
                    <label for="niveau_etude" class="form-label">Niveau d'étude</label>
                    <input type="text" class="form-control" id="niveau_etude" name="filiere" placeholder="{{$etudiant->filiere->nom}}" disabled>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre nouveau mot de passe">
                        @error('password')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="new_password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new_password" name="password_confirmation" placeholder="Confirmer votre nouveau mot de passe">
                    </div>
                </div>
                <button type="submit" class="btn save-profile">Enregistrer</button>
            </form>
            {{----------------------------------------------------- end of form ------------------------------------------}}
        </div>
    </div>
</div>
@endsection