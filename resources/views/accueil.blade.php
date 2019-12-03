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
                <img src="/img/solidR.svg" width="40" height="30" class="d-inline-block align-top" alt="">
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
                            <a class="nav-link" href="{{route('categories.index')}}">les offres <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.demandesIndex')}}">les demandes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        <h2 class="=mb-5">le meilleur endroit où échanger le service dont vous avez besoin </h2>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-12">
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-md-5 mb-2 mb-md-0">
                                    <input type="recherche1" class="form-control form-control-lg" placeholder="Que recherches-tu ?">
                                </div>
                                <div class="col-12 col-md-5 mb-2 mb-md-0">
                                        <input type="recherche2" class="form-control form-control-lg" placeholder="Où ?">
                                    </div>
                                <div class="col-12 col-md-2">
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
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Je souhaite devenir un troker !</h2>
                        <hr class="divider light my-4">
                        <p class="text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit debitis, omnis est possimus quo numquam ipsa explicabo aliquid, dolorum aspernatur blanditiis praesentium unde id alias sit, veniam adipisci amet asperiores.</p>
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
                            <i class="fas fa-4x fa-vector-square text-primary mb-4"></i></a>
                            <h3 class="h4 mb-2">Lorem ipsum</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-vector-square text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Lorem ipsum</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-vector-square text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Lorem ipsum</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit§</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-vector-square text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Lorem ipsum</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class="py-5 partenaire">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/250x75" alt="">
                    </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/250x75" alt="">
                    </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/250x75" alt="">
                    </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="https://via.placeholder.com/250x75" alt="">
                    </a>
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
              <a href="#">Home</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Lorem</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Lorem</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Lorem</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
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