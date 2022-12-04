<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <link href="{{ asset('treinocss/index.css') }}" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- styles -->
    <script defer src="js/nav-bar.js"></script>

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- pwa -->
    <link rel="manifest" href="./manifest.json" />

    <script src="./pwa.dev.min.js"></script>
    <script>
        if (navigator.serviceWorker) {
            navigator.serviceWorker.register('./sw.js')
        }
    </script>
</head>

<body>
    <style>
        .row a {
            color: black;
            text-decoration: none;
        }
    </style>
    <!--nav bar numero 1-->
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        <div class="container-md" style="border: 1px solid black; transform: ">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h2 style="font-size: 50px;">CRIAR FICHA DE ALUNO</h2>
                    </div>
                    <div class="row col-12">
                        <form action="/treinos" method="GET">
                            <input type="text" placeholder="Pesquisar..." name="search" class="form-control col-12"  id="search">
                        </form>
                        <h2>Buscando por: {{ $search }}</h2>
                        @foreach ($aluno as $aluno)
                            <a class="col-12" href="{{ url('/treinos/create/' . $aluno->id) }}">
                                <div class="alunos col-md-12" style="border-radius: 5px;">
                                    <div class="div col-md-12"
                                        style="border:solid 2px black; padding:15px; border-radius:5px; display:flex; max-height:150px; ">
                                        <div class="img-fluid col-md-2 mx-auto" style="max-height:150px; max-width:150px;">
                                            <img src="/img/toduro.jpg" class="img-fluid col-md-12" alt=""
                                                style=" max-height:100px; border-radius:10%; height:100%; ">
                                        </div>
                                        <div class="col-10" style="padding-left:5px;">
                                            @if ($aluno->status_treino == 0)
                                                <h2 class="text-md-start">{{ $aluno->nome }} {{ $aluno->sobrenome }} Data
                                                    de Nascimento:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }} idade:{{ $aluno->dataNascimento->age }} SEM TREINO</h2>
                                                @foreach ($aluno->treinos as $item)
                                                    {{ $item->nome }}
                                                @endforeach
                                            @else
                                                <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }} Data de
                                                    Nascimento:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }}
                                                    idade:{{ $aluno->dataNascimento->age }} COM TREINO</h2>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <style>
            .alunos {
                padding: 10px;
            }
        </style>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
