<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Questão 3 - Encontrar valores em texto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 my-5">
                    <h1 align="center">Calculadora de equação do 2º grau</h1>
                    @if (session('message'))
                        <div class="alert alert-danger">
                            Erro: {{ session('message') }}
                        </div>
                    @endif
                    @if (session('values'))
                        <div class="alert alert-success">
                            Valores encontrados: {{ implode(', ', session('values')) }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="text-white align-items-center rgba-black-strong py-5 px-4">
                            <div>
                            <h5 class="white-text"></i> Informe o texto a ser analisado</h5>
                            <form action="buscar" method="GET">
                                <div class="row"></div>
                                <label for="text">Texto</label>
                                <textarea class="form-control" required id="text" name="text"></textarea>
                                <br>
                                <input type="submit" value="Buscar" class="btn btn-success">
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
