<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/src/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="/images/favicon.png">

    @yield('css')

    <title>Espace Etudiant @yield('')</title>
</head>
<body>
    <main>
        <div class="side-navbar">
            <nav>
                <div class="img-logo">
                    <img src="/images/novalearn (2).png" alt="">
                </div>
                <div class="side-links">
                    <div class="link @yield('ajouter-notes')" onclick="window.location.href='{{route('add-notes-prof.index')}}'">
                        <i class="fas fa-book-open"></i>
                        <a href="{{route('add-notes-prof.index')}}">Entrer les notes</a>
                    </div>

                    <div class="link @yield('ajouter-cours')" onclick="window.location.href='{{route('cours.index')}}'">
                        <i class="fas fa-plus-circle"></i>
                        <a href="{{route('cours.index')}}">Ajouter les cours</a>
                    </div>


                    <div class="link @yield('profile')" onclick="window.location.href='{{route('profile-prof.index')}}'">
                        <i class="fa-solid fa-user-graduate"></i>
                        <a href="{{route('profile-prof.index')}}">modifier le profile</a>
                    </div>


                    
                </div>
                <div class="logout btn btn-danger" onclick="window.location.href='{{route('login')}}'">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="{{route('login')}}" >Se Deconnecter</a>
                </div>
                
            </nav>

        </div>
        <div class="main-content">
            <div class="user-auth container">
                Bonjour, @yield('M-Mme')Your Name !
            </div>
            @yield('main-content')    
        </div>
    </main>






    <script src="src/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>