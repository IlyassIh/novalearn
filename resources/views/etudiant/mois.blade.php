@extends('component.dashboard-etudiant')
@section('mois') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/mois.css"> @endsection
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

    <div class="card mt-3">
        <div class="card-header text-light">
            Mois Payés
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr class="m-bg">
                        <th>Jan</th>
                        <th>Fév</th>
                        <th>Mar</th>
                        <th>Avr</th>
                        <th>Mai</th>
                        <th>Juin</th>
                        <th>Juil</th>
                        <th>Août</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Déc</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="body-tr">
                        <td>✔</td>
                        <td>✔</td>
                        <td>❌</td>
                        <td>✔</td>
                        <td>❌</td>
                        <td>✔</td>
                        <td>❌</td>
                        <td>✔</td>
                        <td>❌</td>
                        <td>✔</td>
                        <td>✔</td>
                        <td>❌</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="">
        
    </div>
    
    
</div>
@endsection