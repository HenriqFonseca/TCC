<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <link href="{{ asset('/lista_alunos_css/lista_alunos.css') }}" rel="stylesheet">

    <!-- scripts -->
    <script defer src="{{ asset('/js/nav-bar.js') }}"></script>
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>

     {{-- PWA --}}
     <meta name="theme-color" content="#6777ef" />
     <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
     <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">
</head>

<body>
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')

    <main>

        <form class="form-search" action="/treinos" method="GET">
            <input type="text" placeholder="Pesquisar..." name="search" id="search">
            <button class="search-button" type="submit"><img src="img/aluno_search.png" alt=""></button>
        </form>

        <div class="content">

            <div class="mini-container">
                <div class="mini-box">
                    <div class="mini mini1"></div><span>Com treino</span>
                </div>
                <div class="mini-box" >
                    <div class="mini mini2"></div><span>Sem treino</span>
                </div>
            </div>
            <!-- <h2>Buscando por: {{ $search }}</h2> -->
            @foreach ($aluno as $aluno)
            <a class="link-content" href="{{ url('/treinos/create/' . $aluno->id) }}">
                <div class="aluno-container">
                    <div>
                        <img src="/img/perfil/{{  $aluno->imagePerfil }}">
                    </div>
                    <div class="dados-container">
                        @if ($aluno->status_treino == 0)
                        <div class="dados">
                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h2>
                            <br>
                            <h2>Data de Nasc:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }} </h2>
                            <br>
                            <h2> Idade:{{ $aluno->dataNascimento->age }}</h2>
                        </div>
                        <div class="sem-treino">
                            <img src="img/mini_haltere.png" alt="">
                        </div>
                        @foreach ($aluno->treinos as $item)
                        {{ $item->nome }}
                        @endforeach
                        @else
                        <div class="dados">
                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h2>
                            <br>
                            <h2>Data de Nasc:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }}</h2>
                            <br>
                            <h2>idade:{{ $aluno->dataNascimento->age }}</h2>
                        </div>
                        <div class="com-treino">
                            <img src="{{ asset('/img/mini_haltere.png') }}" alt=""> 
                        </div>
                        @endif
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
    <br><br><br>
    @endsection
</body>

</html>