<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <link href="{{ asset('lista_alunos_css/lista_alunos.css') }}" rel="stylesheet">

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
        
            <main>
                       
                        <form class="form-search" action="/treinos" method="GET">
                                <input type="text" placeholder="Pesquisar..." name="search"  id="search">
                            </form>
                        
                            <div class="content">
                                
                                <!-- <h2>Buscando por: {{ $search }}</h2> -->
                                @foreach ($aluno as $aluno)
                                    <a class="list-content" href="{{ url('/treinos/create/' . $aluno->id) }}">
                                        <div >
                                            <div >
                                                <div >
                                                    <img src="/img/toduro.jpg" >
                                                </div>
                                                <div style="background-color: black;" >
                                                    @if ($aluno->status_treino == 0)
                                                        <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }} Data
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
            </main>

        <style>
            .alunos {
                padding: 10px;
            }
        </style>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
