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
            <form method="POST" action="{{ route('etudiant.create') }}">
                @csrf
                <h3 class="text-center">Bienvenue!</h3>
                <p class="text-center">NovaLearn vous souhaite la bienvenue, veuillez indiquer le centre de votre choix
                    NovaLearn Rabat, NovaLearn Rabat Ville ou NovaLearn Salé.</p>
                <div class="inputs">
                    <div class="row mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="nom" placeholder="Nom*" value="{{ old('nom') }}">
                            @error('nom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="prenom" placeholder="Prenom*" value="{{ old('prenom') }}">
                            @error('prenom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="email" placeholder="Email*" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="telephone" placeholder="Telephone*" value="{{ old('telephone') }}">
                            @error('telephone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <div class="row  mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="cni" placeholder="CNI*" value="{{ old('cni') }}">
                            @error('cni')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="text" name="adresse" placeholder="Adresse*" value="{{ old('adresse') }}">
                            @error('adresse')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <div class="row  mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="password" name="password" placeholder="Mot de passe*">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <input class="form-control p-2" type="password" name="password_confirmation" placeholder="Confirmation de mot de passe*">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <div class="row  mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <select class="form-control p-2" name="niveau">
                                <option value="" disabled selected>Niveau d'études ?</option>
                                <option value="bac" {{ old('niveau') == 'bac' ? 'selected' : '' }}>Bac</option>
                                <option value="bac+1" {{ old('niveau') == 'bac+1' ? 'selected' : '' }}>Bac+1</option>
                                <option value="bac+2" {{ old('niveau') == 'bac+2' ? 'selected' : '' }}>Bac+2</option>
                                <option value="bac+3" {{ old('niveau') == 'bac+3' ? 'selected' : '' }}>Bac+3</option>
                            </select>
                            @error('niveau')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-lg-6 col-sm-12 col-12 p-1">
                            <select class="form-control p-2" name="centre">
                                <option value="" disabled selected>Centre souhaité ?</option>
                                <option value="NovaLearn Rabat Menzeh" {{ old('centre') == 'rabat-menzeh' ? 'selected' : '' }}>NovaLearn Rabat Menzeh</option>
                                <option value="NovaLearn Rabat Ville" {{ old('centre') == 'rabat-ville' ? 'selected' : '' }}>NovaLearn Rabat Ville</option>
                                <option value="NovaLearn Sale" {{ old('centre') == 'rabat-sale' ? 'selected' : '' }}>NovaLearn Sale</option>
                            </select>
                            @error('centre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <div class="row  mb-2">
                        <div class="col col-lg-6 col-sm-12 col-12 p-1 w-100">
                            <select class="form-control p-2" name="filier">
                                <option value="" disabled selected>Formation souhaitée ?</option>
                                @foreach ($filiers as $filier)
                                    <option value="{{$filier->id}}" >{{$filier->nom}}</option>
                                @endforeach
                                
                            </select>
                            @error('filier')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            
                <div class="row  mb-2 mt-3">
                    <input class="send col col-sm-12 p-2" type="submit" value="S'inscrire" name="send">
                </div>
                <p class="text-center">Vous avez un compte ? <a class="deja" href="{{ route('login') }}">Connectez-vous.</a></p>
            </form>
            
        </div>

    </section>
@endsection
