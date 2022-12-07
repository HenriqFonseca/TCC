<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>

    <link href="{{ asset('lista_alunos_css/lista_alunos.css') }}" rel="stylesheet">

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
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        
            <main>
                       
                        <form class="form-search" action="/treinos" method="GET">
                                <input type="text" placeholder="Pesquisar..." name="search"  id="search">
                                <button class="search-button" type="submit"><img src="img/person_search.png" alt=""></button>
                            </form>
                        
                            <div class="content">
                                
                                <!-- <h2>Buscando por: {{ $search }}</h2> -->
                                @foreach ($aluno as $aluno)
                                    <a class="link-content" href="{{ url('/treinos/create/' . $aluno->id) }}">
                                        <div class="aluno-container" >
                                                <div >
                                                    <img src="/img/toduro.jpg" >
                                                </div>
                                                <div class="dados-container" >
                                                    @if ($aluno->status_treino == 0)
                                                        <div>
                                                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h2>
                                                                 <h2>Data de Nasc:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }} </h2>
                                                                 <h2> Idade:{{ $aluno->dataNascimento->age }}</h2> 
                                                        </div>
                                                        <button class="sem-treino">
                                                            <h2>SEM TREINO</h2>
                                                        </button>
                                                        @foreach ($aluno->treinos as $item)
                                                            {{ $item->nome }}
                                                        @endforeach
                                                    @else
                                                        <div>
                                                            <h2>{{ $aluno->nome }} {{ $aluno->sobrenome }}</h2>
                                                            <h2>Data de Nasc:{{ date('d/m/Y', strtotime($aluno->dataNascimento)) }}</h2>
                                                            <h2>idade:{{ $aluno->dataNascimento->age }}</h2>
                                                        </div>
                                                             <button class="com-treino">
                                                                 <h2 class="com-treino">COM TREINO</h2>
                                                             </button>
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
