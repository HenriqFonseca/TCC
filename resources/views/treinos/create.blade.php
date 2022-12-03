<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- CSS --}}
    <link href="{{ asset('treinocss/index.css') }}" rel="stylesheet">
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
        <div class="container-md">

            {{-- @foreach ($treinos as $treino)
            @foreach ($treino->exercicios as $exercicio)
            <h2>{{ $exercicio->nome }}</h2>
            @endforeach
                <h2>{{ $treino->nome }}</h2>
            @endforeach --}}
            <div class="row">
                <div class="col-12">

                    <form action="{{ route('treino.store') }}" method="POST" class="form-control">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <label for="search">procurar exercicio</label>
                                <input type="search" class="form-control col-10 mx-auto">
                                    @foreach ($exer as $exercicio)
                                        
                                    <input type="checkbox" class="form-check-input" value="{{ $exercicio->id }}" name="exercicio_id" id="exercicio">
                                    <label for="exercicio" class="form-check-label">{{ $exercicio->nome }}</label>
                                    
                                    @endforeach
                            </div>
                            <div class="col-5">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <label for="">descrição</label>
                                <input type="text" class="form-control" name="descricao">

                                <label for="">nome</label>
                                <input type="text" class="form-control" name="nome">

                                <label for="">serie</label>
                                <input type="text" class="form-control" name="serie">

                                <label for="">repeticao</label>
                                <input type="text" class="form-control" name="repeticao">

                                <label for="">carga</label>
                                <input type="text" class="form-control" name="carga">

                                {{-- @foreach ($treinos as $treino)
                                @endforeach

                                @foreach ($treinos as $treino)
                                    @if ($treino->user_id == $user->id)
                                        {{ $treino->id }}
                                    @endif
                                @endforeach --}}
                                <select name="tipoTreino" id="">
                                    <option value="treino_a">Treino A</option>
                                    <option value="treino_b">Treino B</option>
                                    <option value="treino_c">Treino C</option>
                                    <option value="treino_d">Treino D</option>
                                    <option value="treino_e">Treino E</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>


                    <div class="container-md">
                        <div class="row">
                            <div class="col-12">
                                <h2>@foreach ($user->treinos as $item )
                                    @foreach ($item->exercicios as $exercicio)
                                        

                                    nome do exercicio: {{ $exercicio->nome }}
                                    descricao:         {{ $item->descricao }}
                                    carga:             {{ $item->carga }} <br><Br>
                                        @endforeach
                                @endforeach</h2>
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
