<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <link href="{{ secure_asset('/lista_alunos_css/lista_alunos.css') }}" rel="stylesheet">

    <!-- scripts -->
    <script defer src="{{ secure_asset('/js/nav-bar.js') }}"></script>
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
                    <div class="image-container">
                        @if ($aluno->imagePerfil == null)
                        <img class="profile-image" src="/img/perfil/perfilpadrao.png">
                        @else
                        <img class="profile-image" src="/img/perfil/{{  $aluno->imagePerfil }}">
                        @endif
                    </div>
                    <div class="dados-container">
                        
                        <div class="dados">
                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h2>
                            <br>@if($aluno->sexo == 'f')
                            <h2>Sexo: Feminino</h2>
                            @else<h2>Sexo: Masculino</h2>@endif
                            <br>
                            <h2> Idade:{{ $aluno->dataNascimento->age }}</h2>
                        </div>
                        
                    </div>@if ($aluno->status_treino == 0)
                        <div class="sem-treino">
                            <img src="img/mini_haltere.png" alt="">
                        </div>
                        @else
                        <div class="com-treino">
                            <img src="{{ secure_asset('/img/mini_haltere_fill.png') }}" alt=""> 
                        </div>
                        @endif
                </div>
            </a>

            @endforeach
        </div>
    </main>


    <br><br><br>
    @endsection
</body>

</html>