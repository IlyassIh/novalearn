@extends('component.dashboard-etudiant')
@section('note')
    clicked
@endsection

@section('js') 
    <script src="/js/etudiant.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/notes.css">
@endsection

@section('main-content')

        <div class="card mt-3">
            <div class="card-header text-light">Bulletin des Notes</div>
            <div class="card-body">
                <table class="table s1 table-bordered">
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

                <table class="table s2 table-bordered">
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
                            <td>php</td>
                            <td>16</td>
                            <td>15</td>
                            <td>11</td>
                            <td>10</td>
                            <td>17</td>
                            <td>3</td>
                            <td>Driss</td>
                        </tr>
                        <tr>
                            <td>java</td>
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
        </div>
@endsection
