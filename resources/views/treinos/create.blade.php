<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    {{-- ICONES FONT AWESOME --}}
    <link href="{{ secure_asset('/fontawesome/css/all.min.css') }}" rel="stylesheet">

    {{-- CSS --}}
    <link href="{{ secure_asset('/treinocss/aluno.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('/nav-bar-css/nav-bar-css.css') }}" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- scripts -->
    <script defer src="{{ secure_asset('/js/nav-bar.js') }}"></script>
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

        <style>
            
        </style>

        <main>

            <div class="container-md container">
                <div class="user col-11 mx-auto">
                    <div class="title">
                        <h1>Aluno</h1>
                    </div>
                    <div class="img-perfil">
                        <img src="/img/perfil/perfilpadrao.png" alt="">
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
                <div class="form-container container col-11 mx-auto">
                    <div class="title">
                        <h1>Criar Treino</h1>
                    </div>
                    <form action="{{ route('treino.store') }}" class="form" method="POST" class="form-control">
                        @csrf
                        @if (count($exer) == 0)
                            <h2>NÃO HÁ EXERCÍCIOS</h2>
                        @else
                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <select name="exercicio_id"
                                        class="form-select @error('tipoTreino') is-invalid @enderror" id="selectexercicio">
                                        <option selected>Selecione o Exercicio</option>
                                        @foreach ($exer as $exercicio)
                                            <option value="{{ $exercicio->id }}">{{ $exercicio->nome }}</option>
                                        @endforeach
                                    </select>
                                    @error('exercicio_id')
                                        <span class="error-message">{{ $message }}</span> <br>
                                    @enderror
                                </div>
                                <div class="col-12 ">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-11">
                                            <label class="fw-bold" for="descricao">Descrição</label>
                                            <input type="text" autocomplete="off" placeholder="Treino de..."
                                                class="form-control @error('descricao') is-invalid @enderror"
                                                name="descricao" id="descricao">
                                            @error('descricao')
                                                <span class="error-message">{{ $message }}</span> <br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex" style="justify-content: space-around;">
                                        <div class="col-5">
                                            <label class="fw-bold" for="serie">Séries</label>
                                            <input type="text" autocomplete="off" class="form-control @error('serie') is-invalid @enderror"
                                                name="serie" id="serie">
                                            @error('serie')
                                                <span class="error-message">{{ $message }}</span> <br>
                                            @enderror
                                        </div>
                                        <div class="col-5">
                                            <label class="fw-bold" for="repeticao">Repetições</label>
                                            <input type="number"
                                                class="form-control @error('repeticao') is-invalid @enderror"
                                                name="repeticao" id="repeticao" autocomplete="off">
                                            @error('repeticao')
                                                <span class="error-message">{{ $message }}</span> <br>
                                            @enderror
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-11 mx-auto">
                                        <select class="form-select" name="tipoTreino" id="" class="form-select">
                                            <option selected>Selecione o Treino</option>
                                            <option value="treino_a">Treino A</option>
                                            <option value="treino_b">Treino B</option>
                                            <option value="treino_c">Treino C</option>
                                            <option value="treino_d">Treino D</option>
                                            <option value="treino_e">Treino E</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-secondary col-12 fw-bold">Enviar</button>
                    </form>
                </div>



                <style>
                    

                    

                    
                </style>
                <div class="treino-container container col-11">
                    <div class="title">
                        <h1>Treinos</h1>
                    </div>
                    <div class="row col-12" style="padding-left: 0 !important;">
                        <div class="treino col-10 mx-auto" style=" border: 1px solid black; margin-top:46px;">
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
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>  {{ $item->repeticao }}</p>
                                            </div>
                                            <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-treino"><i
                                                        class="fa-solid fa-xmark"></i></button><Br>
                                            </form>
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
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>  {{ $item->repeticao }}</p>
                                            </div>
                                            <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-treino"><i
                                                        class="fa-solid fa-xmark"></i></button><Br>
                                            </form>
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
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>  {{ $item->repeticao }}</p>
                                            </div>
                                            <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-treino"><i
                                                        class="fa-solid fa-xmark"></i></button><Br>
                                            </form>
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
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>  {{ $item->repeticao }}</p>
                                            </div>
                                            <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-treino"><i
                                                        class="fa-solid fa-xmark"></i></button><Br>
                                            </form>
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
                                                <p><i class="fa-solid fa-repeat" alt="Repetições"></i>  {{ $item->repeticao }}</p>
                                            </div>
                                            <form action="{{ route('treino.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-treino"><i
                                                        class="fa-solid fa-xmark"></i></button><Br>
                                            </form>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
