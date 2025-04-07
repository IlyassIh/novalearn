@extends('component.dashboard-prof')
@section('M-Mme')M/Mme @endsection
@section('css') <link rel="stylesheet" href="/css/profCss/ajouter-notes.css"> @endsection
@section('ajouter-notes') clicked @endsection
@section('js') <script src="/js/prof.js"></script> @endsection
@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-white">Enseignant</div>
        <div class="card-body">
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Chemam" disabled>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Driss" disabled>
                </div>
            </div>
        
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="specialites" class="form-label">Spécialités</label>
                    <input type="text" class="form-control" id="specialites" name="specialites" placeholder="DEV, RESEAU" disabled>
                </div>
                <div class="col-md-6">
                    <label for="matieres" class="form-label">Matières enseignées</label>
                    <input type="text" class="form-control" id="matieres" name="matieres" disabled placeholder="PHP, VB, HTML, CSS">
                </div>
            </div>
        
        
        </div>
    </div>
    
    <div class="card mt-3">
        <div class="card-header text-white">Entrer les notes des matières</div>
        <div class="card-body">
            <div class="mb-3">
                <label for="select-s" class="form-label">Choisir la filiere </label>
                <div class="select-flex">
                    <select class="form-select" id="filiere" name="select-s">
                        <option value="" selected disabled>-- Sélectionner la filiere -- </option>
                        <option value="dev">Developpement Informatique</option>
                        <option value="reseau">Reseau</option>
                    </select>

                    <select class="form-select" disabled id="matiere" name="select-s">
                        <option value="" selected disabled>-- Sélectionner la matiere -- </option>
                        <option value="dev">PHP</option>
                        <option value="reseau">HTML</option>
                        <option value="reseau">CSS</option>
                    </select>

                    
                    <span class="btn btn-success search"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            {{----------------------------------------------- form for prof to enter notes ---------------------------}}
            <form>
                <table class="table dev table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nom de l'étudiant</th>
                            <th scope="col">Matière</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Ihassane Ilyass" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="PHP" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                            
                        </tr>
                        
                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Elboussoughti Mohammed" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="JAVA" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Elguarhi Mohammed Amine" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="CSS" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                        </tr>
                        
                    </tbody>
                </table>

                <table class="table reseau table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nom de l'étudiant</th>
                            <th scope="col">Matière</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Nom de l'étudiant" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="PACKET TRACER" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                        </tr>
                        
                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Nom de l'étudiant" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="JAVA" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                        </tr>


                        <tr>
                            <td><input type="text" class="form-control" name="nom_etudiant[]" placeholder="Nom de l'étudiant" disabled></td>
                            <td><input type="text" class="form-control" name="matiere[]" placeholder="CYBER SECURITY" disabled></td>
                            <td><input type="number" class="form-control" name="note[]" step="0.01" placeholder="Note"></td>
                        </tr>
                        
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary save">Soumettre</button>
            </form>
            {{-- ----------------------------------------------- end form for prof to enter notes --------------------------- --}}
        </div>
    </div>
    
    
</div>
    
</div>
@endsection