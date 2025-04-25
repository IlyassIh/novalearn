@extends('component.dashboard-etudiant')
@section('note')
    clicked
@endsection
@section('search') <div class="mb-3">
    <label for="select-s" class="form-label">Sélectionnez une option</label>
    <div class="select-flex">
        <select class="form-select" id="select-s" name="select-s">
            <option value="" selected disabled>-- Sélectionner -- </option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s3">S3</option>
            <option value="s4">S4</option>
        </select>
        <span class="btn btn-success search"><i class="fa-solid fa-magnifying-glass"></i></span>
    </div>
</div>
@endsection

@section('js') 
    <script src="/js/etudiant.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/notes.css">
@endsection
@section('title-card') Notes @endsection

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
                        @foreach ($matieres as $m)
                            @php
                                // ميثود مختصرة لجلب الدرجة أو إرجاع فراغ
                                $note = fn($ctrl) => $notes[$m->matiere_id . '_' . $ctrl] ?? '';
                            @endphp

                            <tr>
                                <td>{{ $m->nom }}</td>
                                <td>{{ $note(1) }}</td>  {{-- Controle N1 --}}
                                <td>{{ $note(2) }}</td>  {{-- Controle N2 --}}
                                <td>{{ $note(3) }}</td>  {{-- Controle N3 --}}
                                <td>{{ $note(4) }}</td>  {{-- Exam théorique --}}
                                <td>{{ $note(5) }}</td>  {{-- Exam pratique --}}
                                <td>{{ $m->coef }}</td>
                                <td>{{ $m->prof_nom ?? 'aucun prof' }} {{ $m->prof_prenom }}</td>
                            </tr>
                        @endforeach
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
