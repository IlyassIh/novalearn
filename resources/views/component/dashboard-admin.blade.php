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

    <title>Espace Admin</title>
</head>
<body>
    <main>
        <div class="side-navbar">
            <nav>
                <div class="img-logo">
                    <img src="/images/novalearn (2).png" alt="">
                </div>
                <div class="side-links">
                    <div class="link @yield('admin-prof')" onclick="window.location.href='{{route('admin-gestion-prof.index')}}'">
                        <i class="fa-solid fa-user-tie"></i>
                        <a href="{{route('admin-gestion-prof.index')}}">Gestion Prof</a>
                    </div>

                    <div class="link @yield('admin-etudiant')" onclick="window.location.href='{{route('admin-gestion-etudiant.index')}}'">
                        <i class="fa-solid fa-users"></i>
                        <a href="{{route('admin-gestion-etudiant.index')}}">Gestion Etudiant</a>
                    </div>


                    <div class="link @yield('admin-consultation')" onclick="window.location.href='{{route('admin-consultation.index')}}'">
                        <i class="fa-solid fa-eye"></i>
                        <a href="{{route('admin-consultation.index')}}">Consultation</a>
                    </div>


                    {{-- <div class="link @yield('admin-search')" onclick="window.location.href='{{route('accueil.index')}}'">
                        <i class="fa-solid fa-search"></i>
                        <a href="{{route('profile.index')}}">Rechercher</a>
                    </div> --}}

                    <div class="link @yield('admin-approuve')" onclick="window.location.href='{{route('admin-validation.index')}}'">
                        <i class="fa-solid fa-user-check"></i>
                        <a href="{{route('admin-validation.index')}}">Validation</a>
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
                Bonjour, admin
            </div>
            
            @yield('main-content')    
        </div>
    </main>






    <script src="/src/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>
</html>