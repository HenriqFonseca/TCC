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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- CSS --}}
    <link href="{{ asset('exerciciocss/exercicio.css') }}" rel="stylesheet">
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
        <div class="container-md" style="">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('exercicio.create') }}">Criar exercício</a>
                </div>
                <div class="col-8 mx-auto">
                    <form action="{{ route('exercicio.store') }}" class="form-control" method="POST">
                        @csrf
                        <div class="mb-3 row">

                            <label class="col-sm-3 col-form-label">Nome do exercício</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="nome" id="">
                            </div>
                        </div>
                        <div class="teste" style="display: flex; flex-direction:column;">
                            <div class="texto">

                                <div class="wrapper" style="display: flex">
                                    <div class="containercheck">
                                        <input type="checkbox" name="abdomen" id="dessert-1" value="1">
                                        <label for="dessert-1"><img src="/img/abdomen100x100.png" alt="abdomen"></label>
                                    </div>
                                    <h2>ola pessoal</h2>
                                </div>
                                    
                                <div class="containercheck">
                                    <input type="checkbox" name="biceps" id="dessert-2" value="1">
                                    <label for="dessert-2"><img src="/img/biceps100x100.png" alt="biceps"></label>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="coxa" id="inlineCheckbox1"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox1">Coxa</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="panturrilha" id="inlineCheckbox7"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox7">Panturrilha</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="triceps" id="inlineCheckbox2"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox2">Triceps</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="biceps" id="inlineCheckbox3"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox3">Biceps</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="ombro" id="inlineCheckbox4"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox4">Ombro</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="peito" id="inlineCheckbox8"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox8">Peito</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="abdomen" id="inlineCheckbox5"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox5">Abdomen</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="costas" id="inlineCheckbox6"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox6">Costas </label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary col-12">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="container-md" style="">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('exercicio.create') }}">Criar exercício</a>
                    </div>
                    <div class="col-12">

                        <table class="table border-secondary" style="border: solid 1px black; border-radius: 5px;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Grupo Muscular</th>
                                    <th scope="col">Classificação</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exercicio as $item)
                                    <tr>
                                        <th>
                                            <h5>{{ $item->id }}</h5>
                                        </th>
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
                                            @elseif ($item->triceps == 1)
                                                <h5>Triceps</h5>
                                            @elseif ($item->biceps == 1)
                                                <h5>Biceps</h5>
                                            @elseif ($item->perna == 1)
                                                <h5>Perna </h5>
                                            @elseif ($item->abdomen == 1)
                                                <h5>Abdomen </h5>
                                            @elseif ($item->costas == 1)
                                                <h5>Costas </h5>
                                            @endif
                                        </td>


                                        <td>
                                            <div class="div" style="display: flex; right:0;">

                                                <a href="exercicio/edit/{{ $item->id }}"> <button type="button"
                                                        class="btn btn-primary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        <span class="material-symbols-outlined">
                                                            edit
                                                        </span>
                                                    </button>
                                                </a>
                                                <form action="/exercicio/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        <span class="material-symbols-outlined" style="margin-left:3px;">
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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @endsection
</body>

</html>
