@extends('component.dashboard-etudiant')
@section('home') clicked @endsection
@section('css') <link rel="stylesheet" href="/css/home.css"> @endsection
@section('main-content')

    
    <div class="card card-note mx-auto mt-5">
        <div class="card-header text-white">
            Dernières notes
        </div>
        <div class="card-body">
            <div class="last-notes mb-3">
                <div>
                    <label for="">PHP : </label>
                    <label for="">16</label>
                </div>
                
                <a href="{{route('note.index')}}" class="text-black"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>

            <div class="last-notes">
                <div>
                    <label for="">JAVA : </label>
                    <label for="">16</label>
                </div>
                
                <a href="{{route('note.index')}}" class="text-black"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
        </div>
    </div>
    
    
@endsection