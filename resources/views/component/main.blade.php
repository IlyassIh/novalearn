<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/src/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')



    <link rel="icon" href="/images/favicon.png">

    <title>NovaLearn – Groupe des écoles privées</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><img src="/images/novalearn.png" alt="logo of novalearn"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">L’ÉCOLE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formations
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">Espaces
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contact
                        </a>
                    </li>
                </ul>

                
                <button class="btn btn-outline-success" type="submit"><a href="{{route('inscription')}}">Inscription</a></button>
    
            </div>
        </div>
    </nav>

    <section>
        
    </section>

    @yield('content')

    <!-- Footer -->
    <footer class=" text-center text-lg-start  text-muted">
        <!-- Section: Social media -->
        <!-- Section: Links  -->
        <section class="container">
            <div class="container text-center text-md-start mt-2">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="../images/novalearn (2).png" alt="">
                        <p>
                            Novalearn est un site web conçu pour des écoles privées, offrant des outils et des ressources pour faciliter la gestion éducative et l'apprentissage.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Nos Formations
                        </h6>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Développement Informatique</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Développement Multimédia</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Systèmes et Réseaux Informatiques</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Gestion des Entreprises</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Comment m'y rendre
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">NovaLearn Rabat Menzeh</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">NovaLearn Rabat Ville</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">NovaLearn Salé</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">Lien utiles</h6>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> 
                                Bourses</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> 
                                Espace Prof</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Espace Étudiants</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> E-Learning</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> CGU</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset"><span>></span> Pré-inscription</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <!-- Copyright -->
    </footer>
    <div class="text-center p-1" style="background-color: rgb(255, 255, 255);">
        © 2026- Groupe NovaLearn | Conception réalisation par Ilyass Ihassane - Mohamed ElBoussoughti
        
    </div>
    <!-- Footer -->

    <script src="src/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>