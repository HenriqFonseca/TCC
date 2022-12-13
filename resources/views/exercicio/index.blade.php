<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>


    {{-- FONTS AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    {{-- ICON GOOGLE --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200') }}" />
    {{-- CSS --}}
    <link href="{{ asset('/exerciciocss/exercicio.css') }}" rel="stylesheet">
    <link href="{{ asset('/nav-bar-css/nav-bar-css.css') }}" rel="stylesheet">

    <!-- styles -->
    <script defer src="{{ asset('/js/nav-bar.js') }}'"></script>

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'"></script>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
    <main>
        <div class="content">

            <div class="create-container">
                <div class="title-box">
                    <div class="title">
                        Criar exercício
                    </div>
                </div>

                
                    <form action="{{ route('exercicio.store') }}" class="form-control" method="POST">
                        @csrf
                        <div class="form-container">
                            
                                <input class="form-control" type="text" name="nome" placeholder="Nome do exercício" id="">
                                @if ($errors->has('nome'))
                                <div class="invalid-feedback">
                                    ERRO AI
                                </div>
                                @endif
                            
                            <div class="wrapper">
                                <div class="containercheck">
                                    <div class="h6">
                                        <h6>Biceps</h6>
                                    </div>
                                        <input type="checkbox" name="biceps" id="dessert-2" value="1" >
                                        <label for="dessert-2"><img src="{{ asset('/img/biceps100x100.png') }}" alt="biceps"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Triceps</h6>
                                        <input type="checkbox" name="triceps" id="dessert-3" value="1">
                                        <label for="dessert-3"><img src="{{ asset('/img/triceps100x100.png') }}" alt="triceps"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Abdomen</h6>
                                        <input type="checkbox" name="abdomen" id="dessert-1" value="1">
                                        <label for="dessert-1"><img src="{{ asset('/img/abdomen100x100.png') }}" alt="abdomen"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Peito</h6>
                                        <input type="checkbox" name="peito" id="dessert-8" value="1">
                                        <label for="dessert-8"><img src="{{ asset('/img/peito100x100.png') }}" alt="peito"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Ombro</h6>
                                        <input type="checkbox" name="ombro" id="dessert-6" value="1">
                                        <label for="dessert-6"><img src="{{ asset('/img/ombro100x100.png') }}" alt="ombro"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Costas</h6>
                                        <input type="checkbox" name="costas" id="dessert-7" value="1">
                                        <label for="dessert-7"><img src="{{ asset('/img/costas100x100.png') }}" alt="costas"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Panturrilha</h6>
                                        <input type="checkbox" name="panturrilha" id="dessert-4" value="1">
                                        <label for="dessert-4"><img src="{{ asset('/img/panturrilha100x100.png') }}" alt="panturrilha"></label>
                                    </div>
                                    <div class="containercheck">
                                        <h6>Coxa</h6>
                                        <input type="checkbox" name="coxa" id="dessert-5" value="1">
                                        <label for="dessert-5"><img src="{{ asset('/img/coxa100x100.png') }}" alt="coxa"></label>
                                    </div>
                                </div>
                                <button type="submit">Enviar</button>
                        </div>
                    </form>
            </div>

            <div class="edit-container">
                <div class="title-box">
                    <div class="title">
                        Editar exercício
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Nome do Exercício</th>
                                <th scope="col">Grupo Muscular</th>
                                <th scope="col">Classificação</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exercicio as $item)
                            <tr>
                                <td>
                                    <h5>{{ $item->nome }}</h5>
                                </td>
                                @if ($item->superior == 1)
                                <td>
                                    <h5>Superior</h5>
                                </td>
                                @else
                                <td>
                                    <h5>Inferior</h5>
                                </td>
                                @endif
                                <td>
                                    @if ($item->triceps == 1 && $item->biceps == 1)
                                    <h5>Triceps e Biceps</h5>
                                    @elseif ($item->coxa == 1 && $item->panturrilha == 1)
                                    <h5>Coxa e Panturrilha</h5>
                                    @elseif ($item->ombro == 1 && $item->peito == 1)
                                    <h5>Ombro e Peito</h5>
                                    @elseif ($item->triceps == 1)
                                    <h5>Triceps</h5>
                                    @elseif ($item->coxa == 1)
                                    <h5>Coxa</h5>
                                    @elseif ($item->panturrilha == 1)
                                    <h5>Panturrilha</h5>
                                    @elseif ($item->biceps == 1)
                                    <h5>Biceps</h5>
                                    @elseif ($item->perna == 1)
                                    <h5>Perna </h5>
                                    @elseif ($item->abdomen == 1)
                                    <h5>Abdomen </h5>
                                    @elseif ($item->costas == 1)
                                    <h5>Costas </h5>
                                    @elseif ($item->peito == 1)
                                    <h5>Peito </h5>
                                    @endif
                                </td>
                                <td>
                                    <div class="div">
                                        <a href="exercicio/edit/{{ $item->id }}"> <button type="button" class="btn btn-primary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                        </a>
                                        <form action="/exercicio/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <span class="material-symbols-outlined">
                                                    delete_forever
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>