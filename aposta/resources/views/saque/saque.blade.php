<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apostas Esportivas</title>

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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div id="betnow">
        Sacar
    </div>

    @if (session('danger'))
        <div class="alert alert-danger mt-2">
            {{session('danger')}}
        </div>
    @endif

    <div class="container">
        <form action="/saque" method="post">
            @csrf
            <div class="mb-3">
                <label>Banco</label>
                <br>
                <select class="form-select" aria-label="Default select example" name="banco" required>
                    <option selected>Selecione o Banco</option>
                    <option value="Santander">Santander</option>
                    <option value="Itau">Itaú</option>
                    <option value="Banco do Brasil">Banco do Brasil</option>
                    <option value="Bradesco">Bradesco</option>
                  </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nome do titutlar da conta</label>
                <input type="text" class="form-control" name="titular" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número da conta</label>
                <input type="number" class="form-control" name="nConta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número da agência</label>
                <input type="number" class="form-control" name="nAgencia" required>
            </div>
            <div class="mb-3">
                <label>Tipo de conta</label>
                <br>
                <select class="form-select" aria-label="Default select example" name="tipoConta" required>
                    <option selected>Selecione o tipo de conta</option>
                    <option value="Conta poupança">Conta poupança</option>
                    <option value="Conta corrente">Conta corrente</option>
                    <option value="Conta corrente conjunta">Conta corrente conjunta</option>
                    <option value="Conta poupança conjunta">Conta poupança conjunta</option>
                  </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Valor do saque</label>
              <input type="number" class="form-control" name="valorSaque" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: grey">Sacar</button>
        </form>
        <div style="margin-top: 5px">
            <a type="submit" class="btn btn-primary" style="background-color: grey" href="/saque">Histórico de saques</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
