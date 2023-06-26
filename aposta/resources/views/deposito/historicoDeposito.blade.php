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
        Histórico de depositos
    </div>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID do depósito</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">CPF</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user->depositos as $deposito)
                    <tr>
                        <th scope="row">{{$deposito->id}}</th>
                        <td>{{date_format(date_create($deposito->data_deposito), 'd/m/Y')}}</td>
                        <td>{{$deposito->valor}}</td>
                        <td>{{$deposito->cpf}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div style="margin-top: 5px">
              <a type="submit" class="btn btn-primary" style="background-color: grey" href="/deposito/create">Voltar</a>
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
