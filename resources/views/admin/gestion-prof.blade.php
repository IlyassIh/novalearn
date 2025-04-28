@extends('component.dashboard-admin')
@section('css')
    <link rel="stylesheet" href="/css/adminCss/gestion-prof.css">
@endsection
@section('admin-prof')
    clicked
@endsection
@section('js')
    <script src="/js/admin-prof.js"></script>
    <script src="/js/login.js"></script>
@endsection
@section('main-content')
    <div class="container mt-3">
        @if (Session()->has('success'))
            <div class="message alert alert-success text-start d-flex justify-content-between mt-3">
                <div>{{ Session('success') }}</div>
                <div class="xMark"><i class="fa-solid fa-xmark"></i></div>
            </div>
        @endif
        <div class="button-add">
            <button class="btn btn-success add">Ajouter un Prof</button>
        </div>

        <div class="card mt-3">
            <div class="card-header text-white">
                Gestion des Profs
            </div>
            <div class="card-body">
                {{-- ------------------------------------ form to delete and modifier un prof ----------------------------- --}}

                <table class="table table-bordered">
                    @if ($profs->isEmpty())
                        <div class="alert alert-warning">
                            Aucun Prof n'a encore ete ajouter.
                        </div>
                    @else
                        <thead class="thead-bg">
                            <tr>
                                <th>CNI</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($profs as $prof)

                                <tr>
                                    <td class="vert-center">{{ $prof->cni }}</td>
                                    <td class="vert-center">{{ $prof->nom }}</td>
                                    <td class="vert-center">{{ $prof->prenom }}</td>
                                    <td class="vert-center">
                                        <span class="btn btn-primary modifier">Modifier</span>
                                        <form method="POST" action="{{ route('prof.destroy', $prof->cni) }}"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                        <a href="{{route('show-matiere', $prof->id)}}" class="btn btn-success ajouter-filiere">Ajouter Filieres</a>
                                    </td>
                                </tr>
                            
                            @endforeach


                        </tbody>
                    @endif


                </table>
                {{-- --------------------- End form to delete and modifier un prof ------------------------------- --}}
            </div>
        </div>

        <div class="overlay"></div>

        <div class="card add-prof" style="max-width: 800px; margin: auto;">
            <div class="card-header text-white p-3 ps-4 pe-4">
                Ajouter Un Prof
            </div>
            <div class="card-body p-3 ps-4 pe-4">
                {{-- ---------------------- form to add un prof ------------------------------ --}}
                <form method="post" action="{{ route('prof.create') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="cni" class="form-label">CNI</label>
                            <input type="text" class="form-control" id="cni" name="cni">
                            @error('cni')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                            @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom">
                            @error('prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone">
                            @error('telephone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="niveau" class="form-label">Matiere</label>
                            <select class="form-select" id="matiere" >
                                <option value="">-- Sélectionner --</option>
                                <option>PHP</option>
                                <option>JAVA</option>
                                <option>VB</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            @error('confirmation_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success ">Ajouter</button>
                    <button class="btn btn-danger annuler ">Annuler</button>
                </form>
                {{-- ----------------------- End form to add un prof ------------------------------- --}}
            </div>
        </div>

        <div class="card modifier-prof" style="max-width: 800px; margin: auto;">
            <div class="card-header text-white p-3 ps-4 pe-4">
                Modifier un Professeur
            </div>
            <div class="card-body p-3 ps-4 pe-4">
                {{-- --------------------------------- form to modifier un prof ------------------------------------------- --}}
                <form>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="cni" class="form-label">CNI</label>
                            <input type="text" class="form-control" name="cni" id="cni">
                        </div>
                        <div class="col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone">
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="niveau" class="form-label">Matiere</label>
                            <select class="form-select" id="matiere">
                                <option value="">-- Sélectionner --</option>
                                <option>PHP</option>
                                <option>JAVA</option>
                                <option>VB</option>
                            </select>
                        </div> --}}
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            @error('confirmation_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success ">Modifier</button>
                    <button class="btn btn-danger annuler ">Annuler</button>
                    </form>
                    {{-- --------------------------------- End form to modifier un prof ------------------------------------------- --}}
            </div>
        </div>



    </div>
@endsection
