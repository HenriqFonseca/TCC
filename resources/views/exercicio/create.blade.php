<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>

    {{-- ICON GOOGLE --}}
    <link rel="stylesheet"
    href="{{ url('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200') }}" />
    
    {{-- CSS --}}
    <link href="{{ asset('/treinocss/index.css') }}" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js') }}"></script>

    
    <!-- scripts -->
    <script defer src="{{ asset('/js/nav-bar.js') }}"></script>
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">
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
                    <form action="/exercicio/update/{{ $exercicio->id }}" class="form-control" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 row">

                            <label class="col-sm-3 col-form-label">Nome do exercício</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $exercicio->nome }}" name="nome"
                                    id="">
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="perna" id="inlineCheckbox1"
                                value="{{ $exercicio->perna }}"@if ($exercicio->perna == 1) checked @endif>
                            <label class="form-check-label" for="inlineCheckbox1">Perna</label>
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
                            <input class="form-check-input" type="checkbox" name="abdomen" id="inlineCheckbox5"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox5">Abdomen</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="costas" id="inlineCheckbox6"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox6">Costas </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superior" id="inlineCheckbox7"
                                value="1">
                            <label class="form-check-label" for="inlineCheckbox7">Superior </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="superior" id="inlineCheckbox8"
                                value="0">
                            <label class="form-check-label" for="inlineCheckbox8">Inferior </label>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Enviar</button>
                    </form>

                </div>
            </div>

        </div>
        <div class="container-md" style="">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('exercicio.create') }}">Criar exercício</a>
                </div>
                <div class="col-12">
                    <div class="div" style="display: flex;">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                        </button>
                        <form action="/exercicio/" method="POST">
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
                </div>
            </div>

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
