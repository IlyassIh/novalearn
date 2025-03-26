@extends('component.dashboard')
@section('home') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/home.css"> @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-white">Page d'accueil</div>
        <div class="card-body">
            
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label" >Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label" >Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" disabled>
                    </div>
                </div>
        
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="niveau-etude" class="form-label" >Niveau d'étude</label>
                        <input type="text" class="form-control" id="niveau-etude" name="niveau-etude" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="groupe" class="form-label" >Groupe</label>
                        <input type="text" class="form-control" id="groupe" name="groupe" disabled>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="card card-note mx-auto mt-5">
        <div class="card-header text-white">
            Dernières notes
        </div>
        <div class="card-body">
            <div class="last-notes mb-3">
                <div>
                    <label for="">PHP : </label>
                    <label for="">16</label>
                </div>
                
                <a href="{{route('note.index')}}" class="text-black"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>

            <div class="last-notes">
                <div>
                    <label for="">JAVA : </label>
                    <label for="">16</label>
                </div>
                
                <a href="{{route('note.index')}}" class="text-black"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
    </div>
    
    
</div>
@endsection