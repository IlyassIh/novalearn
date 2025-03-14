@extends('component.main')  

@section('css')
    <link rel="stylesheet" href="/css/signup.css">
@endsection

@section('content')

    <section class="element bg-light d-flex justify-content-center align-items-center flex-column">
        <div class="container text-center">
            <p class="mb-0">Groupe NovaLearn</p>
            <h2 class="mt-0">Inscription</h2>
        </div>
    </section>

    <section class="signup w-100 pt-4">
        <div class="container w-50">
            <form method="post">
                <h3 class="text-center">Bienvenue!</h3>
                <p class="text-center">NovaLearn vous souhaite la bienvenue, veuillez indiquer le centre de votre choix
                    NovaLearn Rabat, NovaLearn Rabat Ville ou NovaLearn Salé.</p>
                <div class="inputs">
                    <div class="row gap-1 mb-2">
                        <input class="col col-lg-6  col-sm-12 col-12 p-2" type="text " name="nom" placeholder="Nom*" required>
                        <input class="col p-2" type="text" name="prenom" placeholder="Prenom*" required>
                    </div>

                    <div class="row gap-1 mb-2">
                        <input class="col col-lg-6  col-sm-12 col-12 p-2" type="text " name="email" placeholder="Email*" required>
                        <input class="col p-2" type="text" name="telephone" placeholder="Telephone*" required>
                    </div>

                    <div class="row gap-1 mb-2">
                        <input class="col col-lg-6  col-sm-12 col-12 p-2" type="text " name="cni" placeholder="CNI*" required>
                        <input class="col p-2" type="text" name="adresse" placeholder="Adresse*" required>
                    </div>

                    <div class="row gap-1 mb-2">
                        <input class="col col-lg-6  col-sm-12 col-12 p-2" type="text " name="password" placeholder="Mot de passe*" required>
                        <input class="col p-2" type="text" name="pass" placeholder="Confirmation de mot de passe*"
                            required>
                    </div>

                    <div class="row gap-1 mb-2">
                        <select class="col col-lg-6  col-sm-12 col-12 p-2" name="niveau" id="">
                            <option value="">Niveau d'études ? </option>
                            <option value="bac">Bac</option>
                            <option value="bac+1">Bac+1</option>
                            <option value="bac+2">Bac+2</option>
                            <option value="bac+3">Bac+3</option>
                        </select>

                        <select class="col p-2" name="centre" id="">
                            <option value="">Centre souhaité ? </option>
                            <option value="rabat-menzeh">NovaLearn Rabat Menzeh</option>
                            <option value="rabat-ville">NovaLearn Rabat Ville</option>
                            <option value="rabat-sale">NovaLearn Sale</option>
                        </select>
                    </div>

                    <div class="row gap-1 mb-2">
                        <select class="col col-lg-12  col-sm-12 col-12 p-2" name="formation" id="">
                            <option value="">Formation souhaitée ? </option>
                            <option value="TS. Développement Informatique">TS. Développement Informatique</option>
                            <option value="TS. Développement Multimédia">TS. Développement Multimédia</option>
                            <option value="TS. Systèmes et Réseaux Informatiques">TS. Systèmes et Réseaux Informatiques
                            </option>
                            <option value="TS. Gestion des Entreprises">TS. Gestion des Entreprises</option>
                        </select>
                    </div>


                </div>
                <div class="row gap-1 mb-2 mt-3">
                    <input class="send col col-sm-12 p-2" type="submit" value="S'inscrire" name="send">
                </div>
                <p class="text-center">Vous avez un compte ? <a class="deja" href="{{route('login')}}">Connectez-vous.</a> </p>
            </form>
        </div>

    </section>

    @endsection