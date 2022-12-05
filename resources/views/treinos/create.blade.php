<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    {{-- ICONES FONT AWESOME --}}
    <link href="/fontawesome/css/all.min.css" rel="stylesheet">

    {{-- CSS --}}
    <link href="{{ asset('/treinocss/create.css') }}" rel="stylesheet">

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
            
            <div class="row">
                <div class="col-12">


                    <form action="{{ route('treino.store') }}" class="need-validation" method="POST" class="form-control">
                        @csrf
                        @if (count($exer) == 0)
                            <h2>NÃO HÁ EXERCÍCIOS</h2>
                        @else
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <select name="exercicio_id" id="selectexercicio">
                                        <option selected>Selecione o Exercicio</option>
                                        @foreach ($exer as $exercicio)
                                            <option value="{{ $exercicio->id }}">{{ $exercicio->nome }}</option>
                                        @endforeach
                                    </select>
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


                                    <select name="tipoTreino" id="">
                                        <option value="treino_a">Treino A</option>
                                        <option value="treino_b">Treino B</option>
                                        <option value="treino_c">Treino C</option>
                                        <option value="treino_d">Treino D</option>
                                        <option value="treino_e">Treino E</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary">Enviar</button>
                    </form>


                    <div class="container-md">
                        <div class="row">
                            <div class="col-12">
                                    Treino A<br>
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_a')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                Carga <i class="fa-solid fa-dumbbell"></i>: {{ $item->carga }} <br><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>
                                    TREINO E
                                    @foreach ($user->treinos as $item)
                                        @if ($item->tipoTreino == 'treino_e')
                                            @foreach ($item->exercicios as $exercicio)
                                                nome do exercicio: {{ $exercicio->nome }}
                                                descricao: {{ $item->descricao }}
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
