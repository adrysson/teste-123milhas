<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Questão 1 - Calculadora de equação do 2º grau</title>

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
                    <div class="card">
                      <div class="text-white d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h5 class="white-text"></i> Informe os coeficientes da equação</h5>
                            <form action="q1/calcular" method="GET">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="a">A</label>
                                        <input class="form-control" required id="a" name="a" type="number">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="b">B</label>
                                        <input class="form-control" required id="b" name="b" type="number">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="c">C</label>
                                        <input class="form-control" required id="c" name="c" type="number">
                                    </div>
                                </div>
                                <br>
                                <input type="submit" value="Calcular" class="btn btn-success">
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
