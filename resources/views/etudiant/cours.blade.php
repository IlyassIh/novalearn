@extends('component.dashboard-etudiant')
@section('voir-cours') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/cours.css"> @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-white">Etudiant</div>
        <div class="card-body">
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label" >Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" disabled placeholder="{{ session('nom')}}">
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label" >Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" disabled placeholder="{{session('prenom')}}">
                </div>
            </div>
    
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="niveau-etude" class="form-label" >Niveau d'étude</label>
                    <input type="text" class="form-control" id="niveau-etude" name="niveau-etude" disabled placeholder="{{session('filier')}}">
                </div>
                <div class="col-md-6">
                    <label for="groupe" class="form-label" >Groupe</label>
                    <input type="text" class="form-control" id="groupe" name="groupe" disabled placeholder="1">
                </div>
            </div>
        
    </div>
    </div>
    <div class="card mt-3">
        <div class="card-header text-light">
            Cours
        </div>
        <div class="card-body">
            <div class="alert alert-warning mb-0" role="alert">
                Bientôt disponible
            </div>
        </div>
    </div>
    
    
</div>
@endsection