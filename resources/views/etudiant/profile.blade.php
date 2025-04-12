@extends('component.dashboard-etudiant')
@section('profile') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/profile.css"> @endsection

@section('main-content')
<div class="container mt-3 c1">
    <div class="card">
        <div class="card-header bg-primary text-white">Profil</div>
        <div class="card-body c-body">
            {{------------------------------------------- form to take information from user -----------------------------}}
            <form method="POST" action="{{route('profile.update')}}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="{{session('nom')}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="{{session('prenom')}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cni" class="form-label">CNI</label>
                        <input type="text" class="form-control" id="cni" placeholder="{{session('cni')}}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="{{session('email')}}" name="email">
                        @error('email')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" value="{{session('telephone')}}" name="telephone">
                    @error('telephone')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="niveau_etude" class="form-label">Niveau d'étude</label>
                    <input type="text" class="form-control" id="niveau_etude" placeholder="{{session('filier')}}" disabled>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" name="lastPassword">
                        @error('lastPassword')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="new_password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="new_password" placeholder="Entrez votre nouveau mot de passe" name="password">
                        @error('password')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="new_password" class="form-label">Comfirmer mot de passe</label>
                        <input type="password" class="form-control" id="new_password" placeholder="Entrez votre nouveau mot de passe" name="password_confirmation">
                        @error('password_confirmation"')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn save-profile">Enregistrer</button>
            </form>
            {{----------------------------------------------------- end of form ------------------------------------------}}
        </div>
    </div>
</div>
@endsection