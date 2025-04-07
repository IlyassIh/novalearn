@extends('component.dashboard-admin')
@section('css')
    <link rel="stylesheet" href="/css/adminCss/gestion-prof.css">
@endsection
@section('admin-prof')
    clicked
@endsection
@section('js')
    <script src="/js/admin-prof.js"></script>
@endsection
@section('main-content')
    <div class="container mt-3">
        <div class="button-add">
            <button class="btn btn-success add">Ajouter un Prof</button>
        </div>

        <div class="card mt-3">
            <div class="card-header text-white">
                Gestion des Profs
            </div>
            <div class="card-body">
                {{-------------------------------------- form to delete and modifier un prof -------------------------------}}
                <form>
                    <table class="table table-bordered">
                        <thead class="thead-bg">
                            <tr>
                                <th>CNI</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="vert-center">AE1234</td>
                                <td class="vert-center">Driss</td>
                                <td class="vert-center">Chemam</td>
                                <td class="vert-center">
                                    <span class="btn btn-primary modifier">Modifier</span>
                                    <button class="btn btn-danger">Supprimer</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="vert-center">AE1234</td>
                                <td class="vert-center">Driss</td>
                                <td class="vert-center">Chemam</td>
                                <td class="vert-center">
                                    <span class="btn btn-primary modifier">Modifier</span>
                                    <button class="btn btn-danger">Supprimer</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="vert-center">AE1234</td>
                                <td class="vert-center">Driss</td>
                                <td class="vert-center">Chemam</td>
                                <td class="vert-center">
                                    <span class="btn btn-primary modifier">Modifier</span>
                                    <button class="btn btn-danger">Supprimer</button>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </form>
                {{----------------------- End form to delete and modifier un prof ------------------------------- --}}
            </div>
        </div>

        <div class="overlay"></div>

        <div class="card add-prof" style="max-width: 800px; margin: auto;">
            <div class="card-header text-white p-3 ps-4 pe-4">
                Ajouter Un Prof
            </div>
            <div class="card-body p-3 ps-4 pe-4">
                {{------------------------ form to add un prof --------------------------------}}
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="cni" class="form-label">CNI</label>
                            <input type="text" class="form-control" id="cni" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="niveau" class="form-label">Matiere</label>
                            <select class="form-select" id="matiere" required>
                                <option value="">-- Sélectionner --</option>
                                <option>PHP</option>
                                <option>JAVA</option>
                                <option>VB</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success ">Ajouter</button>
                    <button type="submit" class="btn btn-danger annuler ">Annuler</button>
                </form>
                {{-- ----------------------- End form to add un prof ------------------------------- --}}
            </div>
        </div>

    </div>
@endsection
