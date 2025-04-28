<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/src/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="/images/favicon.png">

    @yield('css')

    <title>Espace Etudiant</title>
</head>

<body>
    <main>
        <div class="side-navbar">
            <nav>
                <div class="img-logo">
                    <img src="/images/novalearn (2).png" alt="">
                </div>
                <div class="side-links">
                    <div class="link @yield('home')" onclick="window.location.href='{{ route('accueil.index') }}'">
                        <i class="fa-solid fa-house"></i>
                        <a href="{{ route('accueil.index') }}">Accueil</a>
                    </div>

                    <div class="link @yield('note')" onclick="window.location.href='{{ route('note.index') }}'">
                        <i class="fa-solid fa-book"></i>
                        <a href="{{ route('note.index') }}">Voire les notes</a>
                    </div>


                    <div class="link @yield('mois')" onclick="window.location.href='{{ route('mois.index') }}'">
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="{{ route('mois.index') }}">Voire les mois payés</a>
                    </div>


                    <div class="link @yield('profile')" onclick="window.location.href='{{ route('profile.index') }}'">
                        <i class="fa-solid fa-user-graduate"></i>
                        <a href="{{ route('profile.index') }}">modifier le profile</a>
                    </div>

                    <div class="link @yield('voir-cours')"
                        onclick="window.location.href='{{ route('cours-etudiant.index') }}'">
                        <i class="fas fa-plus-circle"></i>
                        <a href="{{ route('cours-etudiant.index') }}">Voir les cours</a>
                    </div>

                </div>
                <div class="logout btn btn-danger" onclick="window.location.href='{{ route('logout') }}'">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="{{ route('logout') }}">Se Deconnecter</a>
                </div>

            </nav>

        </div>
        <div class="main-content">
            <div class="user-auth container">
                Bonjour, {{ $etudiant->nom }} {{ $etudiant->prenom }}!
            </div>
            <div class="container mt-3">
                @if ($etudiant->validation == 1)

                    @if (Session()->has('success'))
                        <div class="message alert alert-success text-start d-flex justify-content-between mt-3">
                            <div>{{ Session('success') }}</div>
                            <div class="xMark"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                    @endif
                @endif
                <div class="card profile-hide">
                    <div class="card-header text-white">@yield('title-card')</div>
                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" disabled
                                    placeholder="{{ $etudiant->nom }}">
                            </div>
                            <div class="col-md-6">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" disabled
                                    placeholder="{{ $etudiant->prenom }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="niveau-etude" class="form-label">Niveau d'étude</label>
                                <input type="text" class="form-control" id="niveau-etude" name="niveau-etude"
                                    disabled placeholder="{{ $etudiant->filiere->nom }}">
                            </div>
                            <div class="col-md-6">
                                <label for="groupe" class="form-label">Annee Scolaire</label>
                                <input type="text" class="form-control" id="groupe" name="groupe" disabled
                                    placeholder="{{$etudiant->annee_scolaire}}">
                            </div>
                        </div>
                        @yield('search')

                    </div>
                </div>

                @if ($etudiant->validation == 0)
                    <div class=" container mt-3 alert alert-info">
                        Ton dossier est en attente de validation
                    </div>
                @else
                    @yield('main-content')
                @endif

            </div>
        </div>
    </main>






    <script src="/src/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
