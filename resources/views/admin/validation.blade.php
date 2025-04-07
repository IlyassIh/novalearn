@extends('component.dashboard-admin')
@section('css') <link rel="stylesheet" href="/css/adminCss/validation.css"> @endsection
@section('admin-approuve') clicked @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card mt-3">
        <div class="card-header text-light">
            Validation
        </div>
        <div class="card-body">
            {{-- --------------------------------- form to accept or reject an etudiant ------------------------------------------- --}}
            <form>
            <table class="table table-bordered">
                <thead class="thead-bg">
                    <tr>
                        <th>CNI</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        {{-- <th>Adresse</th> --}}
                        <th>Formation souhaitee</th>
                        <th>Niveau Etude</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="vert-center">AE221144</td>
                        <td class="vert-center">Elguarhi</td>
                        <td class="vert-center">Mohammed Amine</td>
                        <td class="vert-center">amineelguarhi@gmail.com</td>
                        <td class="vert-center">0633225588</td>
                        {{-- <td>Sale hors bab sebta</td> --}}
                        <td class="vert-center">TS.Developpemnt informatique</td>
                        <td class="vert-center">Bac</td>
                        <td class="vert-center">
                            <button class="btn btn-success rounded-circle" style="width: 40px; height: 40px;" title="Accepter">
                                ✓
                            </button>
                                                        
                            <button class="btn btn-danger rounded-circle" style="width: 40px; height: 40px;">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            </form>
            {{-- --------------------------------- ENd form to accept or reject an etudiant ------------------------------------------- --}}
        </div>
    </div>
</div>
@endsection