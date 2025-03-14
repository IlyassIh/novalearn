<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/src/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <div class="link @yield('home')">
                        <i class="fa-solid fa-house"></i>
                        <a href="#">Accueil</a>
                    </div>

                    <div class="link @yield('note')">
                        <i class="fa-solid fa-book"></i>
                        <a href="#">Voire les notes</a>
                    </div>


                    <div class="link @yield('mois')">
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="#">Voire les mois payés</a>
                    </div>


                    <div class="link @yield('profile')">
                        <i class="fa-solid fa-user-graduate"></i>
                        <a href="#">modifier le profile</a>
                    </div>


                    
                </div>
                <div class="logout btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="#" >Se Deconnecter</a>
                </div>
                
            </nav>

        </div>
        <div class="main-content">
            @yield('main-content')    
        </div>
    </main>






    <script src="src/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>