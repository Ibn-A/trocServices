<!doctype html>
<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/1d87572e97.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Style CSS -->
        <link href="{{ asset('css/accueil.css') }}" rel="stylesheet">

        <title>trocServices</title>
    </head>

    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/solidR.svg" width="40" height="30" class="d-inline-block align-top" alt="logo">
                trocServices
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav ml-auto">  
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{route('offreServices.create')}}" role="button"> Proposer un service</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('les offres')}}">les offres <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('les demandes')}}">les demandes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class ="dropdown-item" href=""> {{__('Mon profil')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Se deconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <!-- Masthead -->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
                <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5">trocServices</h1>
                        <h2 class="mb-5">le meilleur endroit où échanger le service dont vous avez besoin </h2>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-12">
                        <form action="{{ route('search') }}" method="GET">
                            <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                    <input type="text" class="form-control form-control-lg md-8" placeholder="Que recherches-tu ?" name="query" id="query">
                                </div>
                                <div class="col-12 col-md-3">

                                    <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section class="page-section bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="text-white mt-0">Je souhaite devenir un troker !</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-8">Etape 1 : Inscrivez-vous sur le site. 
                        <p class="text-white-50 mb-8">Etape 2 : Connectez-vous ensuite dès que possible. </p>
                        <p class="text-white-50 mb-8">Etape 3 : Trouvez le service dont vous avec besoin.</p>

                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Les thèmes les plus échangés</h2>
                <hr class="divider my-4">

                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href ="">
                            <img src="/img/ico_sport" width="90" height="90" class="text-primary mb-4" alt="icone_bien être"></a>
                            <h3 class="h4 mb-2">Beauté et bien être</h3>
                            <p class="text-muted mb-0">Etre en meilleur forme en échangeant avec son voisin, 
                                les trokers apprécient. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href ="">
                            <img src="/img/ico_cours" width="90" height="90" class="text-primary mb-4" alt="icone_cours"></a>
                            <h3 class="h4 mb-2">Cours particuliers</h3>

                            <p class="text-muted mb-0"> Plus d'une centaines de trokers s'échangent déjà leur connaissances.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href ="">
                            <img src="/img/ico_chaton" width="90" height="90" class="text-primary mb-4" alt="icone_chat"></a>
                            <h3 class="h4 mb-2">Animaux</h3>
                            <p class="text-muted mb-0">Prendre soin de son animal grâce à l'échange de service, les trokers adorent!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <a href ="">
                            <img src="/img/ico_dem" width="90" height="90" class="text-primary mb-4" alt="icone_demenagement"></a>
                            <h3 class="h4 mb-2">Démenagement</h3>
                            <p class="text-muted mb-0">Un déménagement facile, grâce a l'échange de service avec vos futurs voisins!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class="py-5 partenaire">
            <div class="container">
                <h2 class="text-center mt-0">Nos partenaires</h2>
                <hr class="divider my-4">
                <div class="row py-3" >
                    <div class="col-md-3 col-sm-6">
                    <a href="https://www.grandest.fr/" target="_blank">
                        <img class="img-fluid d-block mx-auto " src="/img/Grand_Est_Logo.png" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="https://www.strasbourg.eu/" target="_blank">
                        <img class="img-fluid d-block mx-auto"  src="/img/ico_eurom.jpg" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="https://www.gouvernement.fr/" target="_blank">
                        <img class="img-fluid d-block mx-auto"  src="/img/Logo_RF.svg" alt=""></a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="https://www.bas-rhin.fr/" target="_blank">
                        <img class="img-fluid d-block mx-auto "  src="img/logo_Bas_Rhin.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
  <footer class="footer bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Accueil</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#services">Les thèmes</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#partenaires">Les partenaires</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Nous contacter</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; trocServices 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>