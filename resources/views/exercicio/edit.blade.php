<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>

    {{-- ICON GOOGLE --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                                <input class="form-control" type="text" value="{{ $exercicio->nome }}"  name="nome"
                                    id="">
                            </div>
                        </div>

                       
                        <div class="form-check form-check-inline">
                            <input type="hidden" name="perna" value="0">
                            <input class="form-check-input" type="checkbox" name="perna" id="inlineCheckbox1"
                                value="1" @if ($exercicio->perna || old('perna', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox1">Perna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="hidden" name="triceps" value="0">
                            <input class="form-check-input" type="checkbox" name="triceps" id="inlineCheckbox2"
                            value="1" @if ($exercicio->triceps || old('triceps', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox2">Triceps</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="hidden" name="biceps" value="0">
                            <input class="form-check-input" type="checkbox" name="biceps" id="inlineCheckbox3"
                            value="1" @if ($exercicio->biceps || old('biceps', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox3">Biceps</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="hidden" name="ombro" value="0">
                            <input class="form-check-input" type="checkbox" name="ombro" id="inlineCheckbox4"
                            value="1" @if ($exercicio->ombro || old('ombro', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox4">Ombro</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="hidden" name="abdomen" value="0">
                            <input class="form-check-input" type="checkbox" name="abdomen" id="inlineCheckbox5"
                            value="1" @if ($exercicio->abdomen || old('abdomen', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox5">Abdomen</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="hidden" name="costas" value="0">
                            <input class="form-check-input" type="checkbox" name="costas" id="inlineCheckbox6"
                            value="1" @if ($exercicio->costas || old('costas', 0)=== 1) checked @endif >
                            <label class="form-check-label" for="inlineCheckbox6">Costas </label>
                        </div>
                       
                        <button type="submit" class="btn btn-primary col-12">Enviar</button>
                    </form>

                </div>
            </div>

        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>