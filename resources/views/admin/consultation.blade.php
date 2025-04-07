@extends('component.dashboard-admin')
@section('css') <link rel="stylesheet" href="/css/adminCss/consultation.css"> @endsection
@section('admin-consultation') clicked @endsection
@section('main-content')
    <div class="container mt-3">
        <form class="d-flex" role="search">
            <form class="d-flex align-items-center gap-2" role="search">
                <input class="form-control" type="search" placeholder="Enter numero CNI" aria-label="Search">
                
                <select class="form-select" name="role">
                    <option value="">Tous</option>
                    <option value="etudiant">Étudiant</option>
                    <option value="professeur">Professeur</option>
                </select>
                
                <button class="btn btn-outline-primary" type="submit">Rechercher</button>
            </form>
        </form>

        <div class="card mt-3">
            <div class="card-header text-light">
                Consultation des Etudiants et Professeurs
            </div>

            <div class="card-body">
                <table class="table s1 table-bordered">
                    <thead class="thead-bg">
                        <tr>
                            <th>CNI</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Role</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AE12233</td>
                            <td>Driss</td>
                            <td>Chemam</td>
                            <td>Professeur</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>

                        <tr>
                            <td>AE778899</td>
                            <td>Elgarhi</td>
                            <td>Mohammed Amine</td>
                            <td>Etudian</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>

                        <tr>
                            <td>AE12233</td>
                            <td>Driss</td>
                            <td>Chemam</td>
                            <td>Professeur</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>

                        <tr>
                            <td>AE778899</td>
                            <td>Elgarhi</td>
                            <td>Mohammed Amine</td>
                            <td>Etudian</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>

                        <tr>
                            <td>AE12233</td>
                            <td>Driss</td>
                            <td>Chemam</td>
                            <td>Professeur</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>

                        <tr>
                            <td>AE778899</td>
                            <td>Elgarhi</td>
                            <td>Mohammed Amine</td>
                            <td>Etudian</td>
                            <td><a href="#" class="text-dark">Voir plus</a></td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection