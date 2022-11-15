<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- CSS --}}
    <link href="{{ asset('treinocss/index.css') }}" rel="stylesheet">

>
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
    <!--nav bar numero 1-->
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        <div class="container-md" style="border: 1px solid black; transform: ">
            <div class="row" style="color: blue;">
                <div class="text col-6">
                    <h2>CRIAR FICHA DE ALUNO</h2>
                </div>
            </div>
            <div class="row">
                <div class="search">
                    <h2>Selecionar o aluno:</h2>
                </div>
            </div>
            <div class="row">
                <div class="aluno col-12">
                    @foreach ($aluno as $aluno)
                        <div class="alunos col-12">
                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}@if($aluno->status_treino == 0)
                                SEM TREINO</h2>
                                @endif
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <style>
            .alunos{
                padding: 10px;
            }
        </style>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
