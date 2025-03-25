@extends('component.main')  
@section('content')
<section class="hero-section" id="ecole">
    <div class="container center-c">
        <h1>Inscriptions Ouvertes</h1>
        <p class="lead text-warning">Année 2024/2025</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <button class="btn btn-light v-btn">Technicien / Technicien Spécialisé</button>
            <button class="btn btn-light v-btn" >Licence / Mastère</button>
        </div>
    </div>
</section>

<section class="formation container py-5 text-center" id="formation">
    <h2 class="section-title mt-4">Vous cherchez une formation diplômante de qualité ?</h2>
    <p class="section-subtitle">Vous êtes au bon endroit !</p>

    <div class="row mt-4">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <div class="card-body">
                    <i aria-hidden="true" class="fas fa-book"></i>
                    <h5 class="card-title mt-3">Cycle Professionnel</h5>
                    <p class="card-subtitle">Technicien / Technicien spécialisé</p>
                    <p class="card-text mt-2">
                        Le Cycle Professionnel offert par Novalearn est un cycle où l’étudiant suit de façon continue sa formation...
                    </p>
                    <a href="#" class="text-link">En savoir +</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <div class="card-body">
                    <i aria-hidden="true" class="fas fa-graduation-cap"></i>
                    <h5 class="card-title mt-3">Cycle Supérieur</h5>
                    <p class="card-subtitle">Bachelor / Mastère</p>
                    <p class="card-text mt-2">
                        En collaboration avec ses partenaires, Novalearn propose aux titulaires des diplômes de Bac+2 et Bac+3 une panoplie de formations...
                    </p>
                    <a href="#" class="text-link">En savoir +</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <div class="card-body">
                    <i aria-hidden="true" class="fas fa-bookmark"></i>
                    <h5 class="card-title mt-3">Formation Continue</h5>
                    <p class="card-subtitle">Diplômante / Certifiante</p>
                    <p class="card-text mt-2">
                        La formation continue est destinée aux professionnels, aux demandeurs d’emploi, mais aussi aux candidats individuels...
                    </p>
                    <a href="#" class="text-link">En savoir +</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact" id="condidate">
    <div class="container">
        <h2>Je candidate</h2>
        <p class="v-p">
            Se former chez le Groupe Novalearn, c’est intégrer une formation avec des programmes de qualité pour
            répondre aux réels besoins de la profession. C’est donc l’assurance d’un emploi en output.
        </p>
        
        <!-- Form -->
        <form class="form-container">
            <div class="row">
                <div class="col-md-6 mb-2 espace">
                    <input type="text" class="form-control" placeholder="Prénom*" required>
                </div>
                <div class="col-md-6 mb-2 ">
                    <input type="text" class="form-control" placeholder="Nom*" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-2 espace">
                    <input type="tel" class="form-control" placeholder="Téléphone*" required>
                </div>
                <div class="col-md-6 mb-2 ">
                    <input type="email" class="form-control" placeholder="Email*" required>
                </div>
            </div>
            <div class="mb-3">
                <select class="form-select" required>
                    <option selected>Choisir le centre*</option>
                    <option value="centre1">Centre 1</option>
                    <option value="centre2">Centre 2</option>
                    <option value="centre3">Centre 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-custom w-100">Envoyer</button>
        </form>
    </div>
</div>

<!-- Statistics Section -->
<div class="stats-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="stats-box">10</p>
                <p class="stats-text">Écoles du Groupe Novalearn</p>
            </div>
            <div class="col-md-3">
                <p class="stats-box">93%</p>
                <p class="stats-text">Positive Feed-Back</p>
            </div>
            <div class="col-md-3">
                <p class="stats-box">+15,000</p>
                <p class="stats-text">Nous font déjà confiance</p>
            </div>
            <div class="col-md-3">
                <p class="stats-box">+900</p>
                <p class="stats-text">Formés par an</p>
            </div>
        </div>
    </div>
</div>

<!-- Why Novalearn Section -->
<div class="container py-5">
    <h3 class="text-center mb-4">Pourquoi intégrer Novalearn ?</h3>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>Novalearn est un établissement reconnu et accrédité par l'État</li>
                <li>Novalearn est un établissement ouvert à l’international</li>
                <li>Novalearn est un établissement ouvert aux métiers de l’entreprise</li>
                <li>Novalearn assure un accompagnement permanent et un encadrement personnalisé des étudiants</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li>Novalearn offre des conditions de formation modernisées</li>
                <li>Novalearn forme des profils recherchés par les recruteurs dès leur diplôme en mains</li>
                <li>Novalearn assure une vie associative dynamique et une ambiance parfaite</li>
            </ul>
        </div>
    </div>
</div>
@endsection