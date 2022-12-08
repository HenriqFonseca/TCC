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
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">
</head>

<body>
    <!--nav bar numero 1-->
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        <div class="container-md" style="transform: translateY(5rem) !important;">
            <div class="content">
               
                <form action="/perfil/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <label for="imagePerfil">Imagem de Perfil</label>
                    <input type="file" name="imagePerfil" id="imagePerfil">
                    <button type="submit">Definir Foto</button>
                </form>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container-md">
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    <div class="content">
                                    Treino A<br>
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_a')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                carga: {{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </div>
                                    <br><br>

                                    <div class="content">
                                    TREINO B<br>
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_b')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                carga: {{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </div>
                                    <BR><BR>

                                    <div class="content">
                                    TREINO C <br>
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_c')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                carga: {{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </div>
                                    <BR><BR>

                                        <div class="content">
                                    TREINO D
                                    <br>
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_d')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                carga: {{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
