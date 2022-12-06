<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- CSS --}}
    <link href="{{ asset('/treinocss/aluno.css') }}" rel="stylesheet">
    <link href="{{ asset('/nav-bar-css/nav-bar-css.css') }}" rel="stylesheet">

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
        <div class="container-md" style="transform: translateY(5rem) !important;">
            <div class="container-user" style="background-color:blue;">
                <div class="text" style="background-color: red;">
                    <div class="img-container" style="">
                        <img src="/img/perfil/{{ auth()->user()->imagePerfil }}" class="img-perfil" alt="">
                        <p>{{ auth()->user()->nome }} {{ auth()->user()->sobrenome }}</p>
                    </div>

                </div>
                <div class="wrapper">

                    <div class="info-user">

                    </div>
                    <div class="text-user">

                    </div>
                </div>

            </div>
            <form action="/perfil/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label for="imagePerfil">Imagem de Perfil</label>
                <input type="file" name="imagePerfil" id="imagePerfil">
                <button type="submit">Definir Foto</button>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="container-md">
                        <div class="row">
                            <div class="col-12">
                                <h2>
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
                                    <br><br>

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
                                    <BR><BR>

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
                                    <BR><BR>

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
