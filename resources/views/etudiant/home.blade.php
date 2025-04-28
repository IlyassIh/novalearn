@extends('component.dashboard-etudiant')
@section('home')
    clicked
@endsection
@section('css')
    <link rel="stylesheet" href="/css/home.css">
@endsection
@section('title-card')
    Accueil
@endsection
@section('js')
    <script>
        const xMark = document.querySelector('.xMark');
        const message = document.querySelector('.message');
        const element = document.querySelector('.element');

        xMark.addEventListener('click', () => {
            console.log(message);
            message.style.setProperty('display', 'none', 'important');
        });
    </script>
@endsection
@section('main-content')
    <div class="card card-note mx-auto mt-5">
        <div class="card-header text-white">
            Dernières notes
        </div>
        <div class="card-body">
            @foreach ($notes as $note)
                <div class="last-notes mb-3">
                    <div>
                        <label for="">{{$note->nom}} : </label>
                        <label for="">{{$note->note}}
                        </label>
                    </div>

                    <a href="{{ route('note.index') }}" class="text-black"><i
                            class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            @endforeach

            
        </div>
    </div>
@endsection
