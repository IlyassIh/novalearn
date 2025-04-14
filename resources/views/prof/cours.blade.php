@extends('component.dashboard-prof')

@section('css') <link rel="stylesheet" href="/css/profCss/cours.css"> @endsection
@section('ajouter-cours') clicked @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-white">Enseignant</div>
        <div class="card-body">
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="{{$prof->nom}}" disabled>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="{{$prof->prenom}}" disabled>
                </div>
            </div>
        
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="specialites" class="form-label">Spécialités</label>
                    <input type="text" class="form-control" id="specialites" name="specialites" placeholder="DEV, RESEAU" disabled>
                </div>
                <div class="col-md-6">
                    <label for="matieres" class="form-label">Matières enseignées</label>
                    <input type="text" class="form-control" id="matieres" name="matieres" disabled placeholder="PHP, VB, HTML, CSS">
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
    
</div>
@endsection