<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Treinos</title>

    {{-- CSS --}}
    <link href="{{ asset('/treinocss/aluno.css') }}" rel="stylesheet">
    <link href="{{ asset('/nav-bar-css/nav-bar-css.css') }}" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- scripts -->
    <script defer src="{{ asset('/js/nav-bar.js') }}"></script>
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>

    {{-- PWA --}}
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>
    <!--nav bar numero 1-->
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        <div class="container-md" style="transform: translateY(5rem) !important;">
            <div class="container-md container">
                <div class="user col-11 mx-auto">
                    {{-- <div class="title">
                        <h1>Aluno</h1>
                    </div> --}}
                    <div class="img-perfil"
                        style="display: flex; justify-content: center; flex-direction: column; text-align: center;">
                        <form action="{{ route('user.image', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="formFileSm">
                                @if ($user->imagePerfil == null)
                                    <img src="/img/perfil/perfilpadrao.png" alt="">
                                @else<img src="/img/perfil/{{ $user->imagePerfil }}" alt="">
                                @endif
                            </label>
                            {{-- <input class="form-control" id="formFileSm" type="file" name="imagePerfil" id="" s> --}}
                            <button type="submit" class="btn btn-secondary">Alterar imagem</button>
                        </form>
                    </div>
                    <div class="infos">
                        <div class="nome">
                            <h2>{{ $user->nome }} {{ $user->sobrenome }}</h2>
                        </div>
                        <div class="idade">
                            <h2>{{ $user->dataNascimento->age }} Anos</h2>
                        </div>
                        <div class="sexo">
                            <h2> Sexo: @if ($user->sexo == 'f')
                                    Feminino
                                @else
                                    Masculino
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="treino-container container col-11">
                    <div class="title">
                        <h1>Meus Treinos</h1>
                    </div>
                    <div class="row col-12" style="padding-left: 0 !important;">
                        <div id="treinoa" class="treino col-10 mx-auto" style=" border: 1px solid black; margin-top:46px;">
                            <div class="title-treino">
                                <h4 class="fw-bold">TREINO A</h4><br>
                            </div>
                            @foreach ($user->treinos as $item)
                                @if ($item->tipoTreino == 'treino_a')
                                    @foreach ($item->exercicios as $exercicio)
                                        <div class="treino-body">
                                            <div class="descricao">
                                                <p>Descrição: {{ $item->descricao }}</p>
                                                <p>{{ $exercicio->nome }}
                                                <p>
                                            </div>
                                            <div class="info-exercicio">
                                                <p> <i class="fa-solid fa-list-check"></i> {{ $item->serie }}</p>
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>
                                                    {{ $item->repeticao }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <br><br>

                        <div class="treino col-10 mx-auto" style="border: 1px solid black; margin-top:46px;">
                            <div class="title-treino">
                                <h4 class="fw-bold">TREINO B</h4><br>
                            </div>
                            @foreach ($user->treinos as $item)
                                @if ($item->tipoTreino == 'treino_b')
                                    @foreach ($item->exercicios as $exercicio)
                                        <div class="treino-body">
                                            <div class="descricao">
                                                <p>Descrição: {{ $item->descricao }}</p>
                                                <p>{{ $exercicio->nome }}
                                                <p>
                                            </div>
                                            <div class="info-exercicio">
                                                <p> <i class="fa-solid fa-list-check"></i> {{ $item->serie }}</p>
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>
                                                    {{ $item->repeticao }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <BR><BR>


                        <div class="treino col-10 mx-auto" style="border: 1px solid black; margin-top:46px;">
                            <div class="title-treino">
                                <h4 class="fw-bold">TREINO C</h4><br>
                            </div>
                            @foreach ($user->treinos as $item)
                                @if ($item->tipoTreino == 'treino_c')
                                    @foreach ($item->exercicios as $exercicio)
                                        <div class="treino-body">
                                            <div class="descricao">
                                                <p>Descrição: {{ $item->descricao }}</p>
                                                <p>{{ $exercicio->nome }}
                                                <p>
                                            </div>
                                            <div class="info-exercicio">
                                                <p> <i class="fa-solid fa-list-check"></i> {{ $item->serie }}</p>
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>
                                                    {{ $item->repeticao }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <BR><BR>

                        <div class="treino col-10 mx-auto" style="border: 1px solid black; margin-top:46px;">
                            <div class="title-treino">
                                <h4 class="fw-bold">TREINO D</h4><br>
                            </div>
                            @foreach ($user->treinos as $item)
                                @if ($item->tipoTreino == 'treino_d')
                                    @foreach ($item->exercicios as $exercicio)
                                        <div class="treino-body">
                                            <div class="descricao">
                                                <p>Descrição: {{ $item->descricao }}</p>
                                                <p>{{ $exercicio->nome }}
                                                <p>
                                            </div>
                                            <div class="info-exercicio">
                                                <p> <i class="fa-solid fa-list-check"></i> {{ $item->serie }}</p>
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>
                                                    {{ $item->repeticao }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <br>

                        <div class="treino col-10 mx-auto" style="border: 1px solid black; margin-top:46px;">
                            <div class="title-treino">
                                <h4 class="fw-bold">TREINO E</h4><br>
                            </div>
                            @foreach ($user->treinos as $item)
                                @if ($item->tipoTreino == 'treino_e')
                                    @foreach ($item->exercicios as $exercicio)
                                        <div class="treino-body">
                                            <div class="descricao">
                                                <p>Descrição: {{ $item->descricao }}</p>
                                                <p>{{ $exercicio->nome }}
                                                <p>
                                            </div>
                                            <div class="info-exercicio">
                                                <p> <i class="fa-solid fa-list-check"></i> {{ $item->serie }}</p>
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>
                                                    {{ $item->repeticao }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media screen and (max-width: 1300px){

                #treinoa{
                    margin-top: 59px;
                }
                .title{
                    width: 12%;
                }
            }
        </style>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
