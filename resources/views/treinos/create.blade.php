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
            <div class="row">
                <div class="col-12">

                    <form action="{{ route('treino.store') }}" method="POST" class="form-control">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <form action=""></form>
                                <label for="search">procurar exercicio</label>
                                <input type="search" class="form-control col-10 mx-auto">
                                <select name="exercicio" class="form-select" id="">Exercicios
                                    <option selected">Exercicios</option>
                                    @foreach ( $exercicios as $exercicio)
                                        
                                    <option value="nome" name="nome">{{ $exercicio->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5">
                                
                                <label for="">descrição</label>
                                <input type="text" class="form-control" name="nome">

                                <label for="">nome</label>
                                <input type="text" class="form-control" name="nome">

                                <label for="">serie</label>
                                <input type="text" class="form-control" name="nome">

                                <label for="">repeticao</label>
                                <input type="text" class="form-control" name="nome">

                                <label for="">nome</label>
                                <input type="text" class="form-control" name="nome">

                                <select name="exercicio" class="form-select" id="">Treino
                                    <option selected>Treino</option>
                                    <option value="1">Treino A</option>
                                    <option value="1">Treino B</option>
                                    <option value="1">Treino C</option>
                                    <option value="1">Treino D</option>
                                    <option value="1">Treino E</option>
                                    @foreach ( $exercicios as $exercicio)
                                        
                                    <option value="nome" name="nome">{{ $exercicio->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
