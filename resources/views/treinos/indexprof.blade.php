<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- CSS --}}
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
            <div class="row" style="color: blue;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>CRIAR FICHA DE ALUNO</h2>
                        </div>
                        <div class="card-body">
                            <div class="row col-12">

                                @foreach ($aluno as $aluno)
                                    <div class="alunos col-12">
                                        <div class="div" style="border:solid 2px black; padding:15px;">
                                            <a href="{{ url('/treinos/create/' . $aluno->id) }}">
                                                @if ($aluno->status_treino == 0)
                                                    <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }} {{ $aluno->dataNascimento->format(config }} SEM TREINO</h2>
                                                @else
                                                    <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }} {{ $aluno->dataNascimento->age }} COM TREINO</h2>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
