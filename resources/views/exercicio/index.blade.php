<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>

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
                <div class="col-12">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Triceps</th>
                                <th scope="col">Perna</th>
                                <th scope="col">Biceps</th>
                                <th scope="col">Ombro</th>
                                <th scope="col">Abdomen</th>
                                <th scope="col">Costas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exercicio as $item)
                                
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->nome }}</td>
                               @if ($item->triceps == 1) <td>TEM TRICEPS</td> @else <td>SEM TRICEPS</td>@endif
                               @if ($item->perna == 1) <td>TEM perna</td> @else <td>SEM perna</td>@endif
                               @if ($item->biceps == 1) <td>TEM biceps</td> @else <td>SEM biceps</td>@endif
                               @if ($item->ombro == 1) <td>TEM ombro</td> @else <td>SEM ombro</td>@endif
                               @if ($item->abdomen == 1) <td>TEM abdomen</td> @else <td>SEM abdomen</td>@endif
                               @if ($item->costas == 1) <td>TEM costas</td> @else <td>SEM costas</td>@endif
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
