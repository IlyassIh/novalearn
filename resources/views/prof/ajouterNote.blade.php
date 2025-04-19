@extends('component.dashboard-prof')

@section('css')
    <link rel="stylesheet" href="/css/profCss/ajouter-notes.css">
@endsection
@section('ajouter-notes')
    clicked
@endsection
@section('js')
    <script src="/js/prof.js"></script>
    <script>
        document.getElementById('filiere').addEventListener('change', function() {
            let filiereId = this.value;
            let matiereSelect = document.getElementById('matiere');

            // Reset and disable while loading
            matiereSelect.innerHTML = '<option selected disabled>Chargement...</option>';
            matiereSelect.disabled = true;

            fetch(`/get-matieres/${filiereId}`)
                .then(response => response.json())
                .then(data => {
                    matiereSelect.innerHTML =
                        '<option selected disabled>-- Sélectionner la matière --</option>';
                    data.forEach(matiere => {
                        let option = document.createElement('option');
                        option.value = matiere.id;
                        option.textContent = matiere.nom;
                        matiereSelect.appendChild(option);
                    });
                    matiereSelect.disabled = false;
                });
        });
    </script>
@endsection
@section('main-content')
    <div class="container mt-3">
        @if (Session()->has('success'))
            <div class="message alert alert-success text-start d-flex justify-content-between mt-3">
                <div>{{ Session('success') }}</div>
                <div class="xMark"><i class="fa-solid fa-xmark"></i></div>
            </div>
        @endif
        <div class="card">
            <div class="card-header text-white">Enseignant</div>
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom"
                            placeholder="{{ $prof->nom }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom"
                            placeholder="{{ $prof->prenom }}" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="specialites" class="form-label">Spécialités</label>
                        <select class="form-select w-100"name="specialites">
                            <option value="" selected disabled>-- Votre Filieres -- </option>
                            @foreach ($filiers as $filiere)
                                <option value="dev" disabled>{{ $filiere->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="matieres" class="form-label">Matières enseignées</label>
                        <select class="form-select w-100"name="specialites">
                            <option value="" selected disabled>-- Votre Matieres -- </option>
                            @foreach ($matieres as $matiere)
                                <option value="" disabled>{{ $matiere->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header text-white">Entrer les notes des matières</div>
            <div class="card-body">

                <form method="post" action="{{ route('get-filiere') }}">
                    <div class="mb-3">
                        @csrf

                        <label for="select-s" class="form-label">Choisir la filiere </label>
                        <div class="select-flex">
                            <select class="form-select" id="filiere" name="filiere">
                                <option value="" selected disabled>-- Sélectionner la filiere -- </option>
                                @foreach ($filiers as $filiere)
                                    <option value="{{ $filiere->id }}"
                                        {{ old('filiere') === $filiere->id ? 'selected' : '' }}>{{ $filiere->nom }}</option>
                                @endforeach
                            </select>

                            <select class="form-select" disabled id="matiere" name="matiere">
                                <option value="" selected disabled>-- Sélectionner la matiere -- </option>
                            </select>

                            <select class="form-select" disabled id="exams" name="controle">
                                <option value="" selected disabled>-- Sélectionner l'examen -- </option>
                                @foreach ($controles as $controle)
                                    <option value="{{ $controle->id }}">{{ $controle->nom_controle }}</option>
                                @endforeach
                            </select>


                            <button type="submit" name="search" class="btn btn-success search"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>

                        </div>
                    </div>
                    {{-- --------------------------------------------- form for prof to enter notes ------------------------- --}}

                    <table class="table dev table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nom de l'étudiant</th>
                                <th scope="col">Matière</th>
                                <th scope="col">Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- foreach --}}
                            @isset($etudiants)
                                @foreach ($etudiants as $etudiant)
                                    <tr>
                                        <td><input type="text" class="form-control" name="nom_etudiant[]"
                                                placeholder="{{ $etudiant->nom }} {{ $etudiant->prenom }}" disabled></td>
                                        <td><input type="text" class="form-control" name="matiere[]"
                                                placeholder="{{ $etudiant->matiere }}" disabled>
                                        </td>
                                        <td><input type="number" class="form-control" name="note[{{ $etudiant->etudiant_id }}]" step="0.01"
                                                placeholder="Note">
                                        </td>

                                    </tr>
                                @endforeach
                            @endisset

                            {{-- endforeach --}}

                        </tbody>
                    </table>
                    <button type="submit" name="soumettre" class="btn btn-primary save"
                        style="display: block">Soumettre</button>
                </form>
                {{-- ----------------------------------------------- end form for prof to enter notes --------------------------- --}}
            </div>
        </div>


    </div>

    </div>
@endsection
