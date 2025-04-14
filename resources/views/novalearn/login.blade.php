@extends('component.main')  
@section('js') <script src="/js/login.js"></script> @endsection
@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')

    <section class="element bg-light d-flex justify-content-center align-items-center flex-column">
        <div class="container text-center">
            @if (Session()->has('success'))

            <div class="message alert alert-success text-start d-flex justify-content-between mt-3">
                <div>{{Session('success')}}</div>
                <div class="xMark"><i class="fa-solid fa-xmark"></i></div>
            </div>
            @endif
            
            <p class="mb-0">Groupe NovaLearn</p>
            <h2 class="mt-0">Se Connecter</h2>
        </div>
    </section>

    <section class="signup w-100 pt-4" style="height: calc(100vh - 283px)">
        <div class="container w-25">
            <form method="post" action="{{ route('login.store') }}">
                @csrf
                <h3 class="text-center">Bienvenue!</h3>
                <p class="text-center">NovaLearn vous souhaite la bienvenue, veuillez indiquer le centre de votre choix
                    NovaLearn Rabat, NovaLearn Rabat Ville ou NovaLearn Salé.</p>

                    <div class="row gap-1 mb-2 w-20">
                        <input class="col col-lg-12  col-sm-12 col-12 p-2" type="text " name="cni" placeholder="CNI*" required>
            
                    </div>

                    <div class="row gap-1 mb-2">
                        <input class="col col-lg-12 col-sm-12 col-12 p-2" type="password" name="password" placeholder="Mot de passe*" required>
                    </div>

                    
                    <p class="text-end mr"><a class="deja" href="../login/login.html">Mot de passe oublie?</a> </p>
                    
                    <div class="row gap-1 mb-2">
                        <input class="send col col-sm-12 p-2" type="submit" value="Se Connecter" name="send">
                    </div>
                    <p class="text-center">Vous n'avez pas de compte ?<a class="deja" href="{{route('inscription')}}"> Inscrivez-vous.</a></p>
                </div>
            </form>
        </div>

    </section>

    @endsection