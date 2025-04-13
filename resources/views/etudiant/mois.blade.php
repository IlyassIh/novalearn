@extends('component.dashboard-etudiant')
@section('mois') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/mois.css"> @endsection
@section('main-content')


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
    
    
    

@endsection