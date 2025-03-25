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
