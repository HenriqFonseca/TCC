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
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200') }}" />
    {{-- CSS --}}
    <link href="{{ asset('/exerciciocss/exercicio.css') }}" rel="stylesheet">
    <link href="{{ asset('/nav-bar-css/nav-bar-css.css') }}" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' "></script>

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
    <!--nav bar numero 1-->
    @extends('navbar-pronta.nav-bar')
    @section('conteudo')
        <div class="container-md ">
            <div class="row">
                <div class=" col-8 mx-auto " style="width: 100%;">
                    <form action="/exercicio/update/{{ $exercicio->id }}" class="form-control" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" style="font-weight: bold;">Nome do exercício</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" value="{{ $exercicio->nome }}" name="nome"
                                    id="">
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        ERRO AI
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="wrapper">

                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Biceps</h6>
                                </div>
                                <input type="hidden" name="biceps" value="0">
                                <input type="checkbox" name="biceps" id="dessert-2" value="1"
                                @if ($exercicio->biceps || old('biceps', 0) === 1) checked @endif>
                                <label for="dessert-2"><img src="{{ asset('/img/biceps100x100.png') }}" alt="biceps"></label>
                            </div>

                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Triceps</h6>
                                </div>
                                <input type="hidden" name="triceps" value="0">
                                <input type="checkbox" name="triceps" id="dessert-3" value="1"
                                @if ($exercicio->triceps || old('triceps', 0) === 1) checked @endif>
                                <label for="dessert-3"><img src="{{ asset('/img/triceps100x100.png') }}" alt="triceps"></label>
                            </div>


                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Abdomen</h6>
                                </div>
                                <input type="hidden" name="abdomen" value="0">
                                <input type="checkbox" name="abdomen" id="dessert-1"
                                value="1"@if ($exercicio->abdomen || old('abdomen', 0) === 1) checked @endif>
                                <label for="dessert-1"><img src="{{ asset('/img/abdomen100x100.png') }}" alt="abdomen"></label>
                            </div>


                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Peito</h6>
                                </div>
                                <input type="hidden" name="peito" value="0">
                                <input type="checkbox" name="peito" id="dessert-8" value="1"
                                @if ($exercicio->peito || old('peito', 0) === 1) checked @endif>
                                <label for="dessert-8"><img src="{{ asset('/img/peito100x100.png') }}" alt="peito"></label>
                            </div>



                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Ombro</h6>
                                </div>
                                <input type="hidden" name="ombro" value="0">
                                <input type="checkbox" name="ombro" id="dessert-6" value="1"
                                @if ($exercicio->ombro || old('ombro', 0) === 1) checked @endif>
                                <label for="dessert-6"><img src="{{ asset('/img/ombro100x100.png') }}" alt="ombro"></label>
                            </div>

                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Costas</h6>
                                </div>
                                <input type="hidden" name="costas" value="0">
                                <input type="checkbox" name="costas" id="dessert-7" value="1"
                                @if ($exercicio->costas || old('costas', 0) === 1) checked @endif>
                                <label for="dessert-7"><img src="{{ asset('/img/costas100x100.png') }}" alt="costas"></label>
                            </div>



                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Panturrilha</h6>
                                </div>
                                <input type="hidden" name="panturrilha" value="0">
                                <input type="checkbox" name="panturrilha" id="dessert-4" value="1"
                                @if ($exercicio->panturrilha || old('panturrilha', 0) === 1) checked @endif>
                                <label for="dessert-4"><img src="{{ asset('/img/panturrilha100x100.png') }}" alt="panturrilha"></label>
                            </div>



                            <div class="containercheck">
                                <div class="h6">
                                    <h6>Coxa</h6>
                                </div>
                                <input type="hidden" name="coxa" value="0">
                                <input type="checkbox" name="coxa" id="dessert-5" value="1"
                                    @if ($exercicio->coxa || old('coxa', 0) === 1) checked @endif>
                                <label for="dessert-5"><img src="{{ asset('/img/coxa100x100.png') }}"
                                        alt="coxa"></label>
                            </div>
                        </div>


                        <button type="submit" style="font-weight: bold; margin-top:10px;"
                            class="btn btn-secondary col-12">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
