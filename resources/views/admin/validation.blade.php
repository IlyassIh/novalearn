@extends('component.dashboard-admin')
@section('css')
    <link rel="stylesheet" href="/css/adminCss/validation.css">
@endsection
@section('admin-approuve')
    clicked
@endsection
@section('main-content')
    <div class="container mt-3">
        <div class="card mt-3">
            <div class="card-header text-light">
                Validation
            </div>
            <div class="card-body">
                {{-- --------------------------------- form to accept or reject an etudiant ------------------------------------------- --}}
                @if($etudiants->where('validation', 0)->count() > 0)
                <table class="table table-bordered">
                    <thead class="thead-bg">
                        <tr>
                            <th>CNI</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Centre</th>
                            <th>Formation souhaitee</th>
                            <th>Niveau Etude</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($etudiants as $etudiant)
                        @if ($etudiant->validation == 0)
                        <tr>
                            <td class="vert-center">{{ $etudiant->cni }}</td>
                            <td class="vert-center">{{ $etudiant->nom }}</td>
                            <td class="vert-center">{{ $etudiant->prenom }}</td>
                            <td class="vert-center">{{ $etudiant->email }}</td>
                            <td class="vert-center">{{ $etudiant->telephone }}</td>
                            <td class="vert-center">{{$etudiant->centre}}</td>
                            <td class="vert-center">{{ $etudiant->filiere->nom }}</td>
                            <td class="vert-center">{{ $etudiant->niveau }}</td>
                            <td class="vert-center">
                                <div class="d-flex gap-1">


                                    <form method="post" action="{{ route('etudiant.accept', $etudiant->cni) }}">
                                        @csrf
                                        @method('put')
                                        <button type="submit"class="btn btn-success rounded-circle"
                                            style="width: 40px; height: 40px;" title="Accepter">
                                            ✓
                                        </button>
                                    </form>
                                    <form method="post" action="{{ route('etudiant.reject', $etudiant->cni) }}">
                                        @csrf
                                        @method('put')

                                        <button type="submit"class="btn btn-danger rounded-circle"
                                            style="width: 40px; height: 40px;">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info">
                    Aucun Etudiant n'a encore ete ajouter.
                </div>
                @endif

                {{-- --------------------------------- ENd form to accept or reject an etudiant ------------------------------------------- --}}
            </div>
        </div>
    </div>
@endsection
