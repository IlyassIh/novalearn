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
        <div class="overlay"></div>

        <div class="card ajouter-mat" style="max-width: 800px; margin: auto;">
            <div class="card-header text-white p-3 ps-4 pe-4">
                Ajouter Une filieres et matiere
            </div>
            <div class="card-body p-3 ps-4 pe-4">
                {{-- --------------------------------- form to modifier un prof ------------------------------------------- --}}
                <form method="POST" action="{{route('prof.addMat', $prof)}}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="filiere" class="form-label">Filière</label>
                            <select class="form-select" name="filiere" id="filiere">
                                <option value="">-- Sélectionner --</option>
                                @foreach ($filieres as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->nom}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    
                        <div class="col-md-6">
                            <label for="matiere" class="form-label">Matière</label>
                            <select class="form-select" name="matiere" id="matiere">
                                <option value="">-- Sélectionner --</option>
                                @foreach ($matieres as $matiere)
                                    
                                <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="annee_scolaire" class="form-label">Année Scolaire</label>
                            <select class="form-select" name="annee_scolaire" id="annee_scolaire">
                                <option value="">-- Sélectionner --</option>
                                <option value="1">2024-2025</option>
                                <option value="2">2025-2026</option>
                            </select>
                        </div>
                    
                        <div class="col-md-6">
                            <label for="semestre" class="form-label">Semestre</label>
                            <select class="form-select" name="semestre" id="semestre">
                                <option value="">-- Sélectionner --</option>
                                <option value="1">Semestre 1</option>
                                <option value="2">Semestre 2</option>
                                <option value="3">Semestre 3</option>
                                <option value="4">Semestre 4</option>
                            </select>
                        </div>
                    </div>
                    


                    <button type="submit" class="btn btn-success ">Ajouter</button>
                    <button class="btn btn-danger annuler ">Annuler</button>
                    </form>
                    {{-- --------------------------------- End form to modifier un prof ------------------------------------------- --}}
            </div>
        </div>

    </div>
@endsection
