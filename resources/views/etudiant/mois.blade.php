@extends('component.dashboard')
@section('mois') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/mois.css"> @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-white">Voir les mois payees</div>
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
    <div class="mb-3 mt-4">
        <label class="form-label mois">Mois Payés</label>
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
    </table>
    
</div>
@endsection