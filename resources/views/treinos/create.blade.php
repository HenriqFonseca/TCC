<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    {{-- ICONES FONT AWESOME --}}
    <link href="{{ asset('/fontawesome/css/all.min.css') }}" rel="stylesheet">

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
        <div style="background-color: var(--footer-color); width:67%;">
            <div class="container-md">

                <div class="row">
                    <div class="col-12">


                        <form action="{{ route('treino.store') }}" class="need-validation" method="POST"
                            class="form-control">
                            @csrf
                            @if (count($exer) == 0)
                                <h2>NÃO HÁ EXERCÍCIOS</h2>
                            @else
                                <div class="row">
                                    <div class="col-md-12 mx-auto">
                                        <select name="exercicio_id" class="form-select" id="selectexercicio">
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
                                        @error('descricao')
                                            <span class="error-message">{{ $message }}</span> <br>
                                        @enderror


                                        <label for="">nome</label>
                                        <input type="text" class="form-control" name="nome">
                                        @error('nome')
                                            <span class="error-message">{{ $message }}</span> <br>
                                        @enderror

                                        <label for="">serie</label>
                                        <input type="text" class="form-control" name="serie">
                                        @error('serie')
                                            <span class="error-message">{{ $message }}</span> <br>
                                        @enderror

                                        <label for="">repeticao</label>
                                        <input type="text" class="form-control" name="repeticao">
                                        @error('repeticao')
                                            <span class="error-message">{{ $message }}</span> <br>
                                        @enderror
                                        <br>

                                        <select name="tipoTreino" id="" class="form-select">
                                            <option value="treino_a">Treino A</option>
                                            <option value="treino_b">Treino B</option>
                                            <option value="treino_c">Treino C</option>
                                            <option value="treino_d">Treino D</option>
                                            <option value="treino_e">Treino E</option>
                                        </select>
                                        <br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>: {{ $item->carga }} <br>
                                                <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-treino"><i
                                                            class="fa-solid fa-xmark"></i></button><Br>
                                                </form>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br>
                                                <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-treino"><i
                                                            class="fa-solid fa-xmark"></i></button><Br>
                                                </form><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br>
                                                <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-treino"><i
                                                            class="fa-solid fa-xmark"></i></button><Br>
                                                </form><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br>
                                                <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-treino"><i
                                                            class="fa-solid fa-xmark" style="margin: auto"></i></button><Br>
                                                </form><Br>
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
                                                Carga <i class="fa-solid fa-dumbbell"></i>:{{ $item->carga }} <br>
                                                <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-treino"><i
                                                            class="fa-solid fa-xmark"></i></button><Br>
                                                </form><Br>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <br>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <br><br><br><br><br><br><br><br><br>
        @endsection
</body>

</html>
