@extends('component.dashboard')
@section('note')
    clicked
@endsection

@section('css')
    <link rel="stylesheet" href="/css/notes.css">
@endsection

@section('main-content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-white">Bulletin des Notes</div>
            <div class="card-body">
                <form>
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
            
                    <div class="mb-3">
                        <label for="select-s" class="form-label">Sélectionnez une option</label>
                        <select class="form-select" id="select-s" name="select-s">
                            <option value="" selected disabled>-- Sélectionner -- </option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                            <option value="s4">S4</option>
                        </select>
                    </div>
                </form>
            </div>
            
            
        </div>
        <table class="table table-bordered mt-4">
            <thead class="thead-bg">
                <tr>
                    <th>Matière</th>
                    <th>Controle N1</th>
                    <th>Controle N2</th>
                    <th>Controle N3</th>
                    <th>Exam theorique</th>
                    <th>Exam pratique</th>
                    <th>Coefficient</th>
                    <th>Nom prof</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathématiques</td>
                    <td>16</td>
                    <td>15</td>
                    <td>11</td>
                    <td>10</td>
                    <td>17</td>
                    <td>3</td>
                    <td>Driss</td>
                </tr>
                <tr>
                    <td>Physique</td>
                    <td>16</td>
                    <td>15</td>
                    <td>11</td>
                    <td>10</td>
                    <td>17</td>
                    <td>3</td>
                    <td>Driss</td>
                </tr>
                <tr>
                    <td>Informatique</td>
                    <td>16</td>
                    <td>15</td>
                    <td>11</td>
                    <td>10</td>
                    <td>17</td>
                    <td>3</td>
                    <td>Driss</td>
                </tr>
                <tr>
                    <td>Français</td>
                    <td>16</td>
                    <td>15</td>
                    <td>11</td>
                    <td>10</td>
                    <td>17</td>
                    <td>3</td>
                    <td>Driss</td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
