<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="/css/index.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #de690e;
            color: #ffffff; /* White text color */
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            margin: 0;
        }

        /* Customizing the navigation bar */
        .navbar {
            background-color: #000000; /* Black background color */
        }

        .navbar-brand {
            color: #de690e; /* Dark orange brand text color */
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #de690e; /* Dark orange navigation link text color */
        }

        /* Centering the "betnow" text */
        #betnow {
            text-align: center;
            margin-top: 20px;
        }

        #betnow a {
            color: #ffffff; /* White link text color */
            font-weight: bold;
            text-decoration: none;
        }

        /* Customizing the links section */
        .links > a {
            color: #ffffff; /* White link text color */
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        /* Customizing the carousel */
        #carouselExampleIndicators {
            margin-top: 30px;
        }

        #carouselExampleIndicators .carousel-item {
            text-align: center;
        }

        #carouselExampleIndicators img {
            max-height: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('aposta') }}">Apostas esportivas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('apostaviv') }}">Apostas ao vivo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('jogos') }}">Cassino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('deposito/create') }}">Deposito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('saque/create') }}">Saque</a>
                    </li>
                   
                </ul>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            Saldo R$
                            @php
                                echo auth()->user()->balance;
                            @endphp
                        @endauth
                    </div>
                @endif
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>

    <div id="betnow">
        Escolha o jogo e <a href="#">APOSTE AGORA!</a>
    </div>

    <div class="container">
        @guest
            <div class="links">
                <a href="{{ url('aposta') }}">Apostas esportivas</a>
                <a href="{{ url('player') }}">Apostas ao vivo</a>
                <a href="{{ url('jogos') }}">Cassino</a>
                <a href="{{ url('dashboard') }}">Dashboard</a>
            </div>
        @else
            <div class="links">
                <a href="{{ url('aposta') }}">Apostas esportivas</a>
                <a href="{{ url('apostaviv') }}">Apostas ao vivo</a>
                <a href="{{ url('jogos') }}">Cassino</a>
                <a href="{{ url('dashboard') }}">Dashboard</a>
            </div>
        @endguest

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3150913:1634900949/image/brasileiro-_11.jpg?f=16x9&h=720&q=0.8&w=1280&$p$f$h$q$w=0a87def" alt="Game 1">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3370906:1684497151/Corinthians-vs-Fluminense.jpg?f=16x9&h=720&q=0.8&w=1280&$p$f$h$q$w=91481a8" alt="Game 2">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3370928:1684497306/Flamengo-vs-Gremio.jpg?f=16x9&h=720&q=0.8&w=1280&$p$f$h$q$w=2e40969" alt="Game 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
