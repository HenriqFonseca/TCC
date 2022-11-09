<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="treinocss/treinos.css" rel="stylesheet">


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
    <div class="container-sm" style="transform: translateY(5rem);">
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt harum iusto consequatur dolore, et, error fuga asperiores cupiditate labore tenetur, autem sapiente dicta? Fugiat excepturi consequuntur atque perferendis libero non perspiciatis maiores deleniti aperiam cum aliquid sunt animi et, optio rem quasi similique laborum magni delectus dolorum quos officia harum. Nemo illo sit iste dignissimos, nam commodi ex, cumque, voluptas consectetur vel necessitatibus ullam nostrum quas repellat! Totam, ipsa cum.</h2>

        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt harum iusto consequatur dolore, et, error fuga asperiores cupiditate labore tenetur, autem sapiente dicta? Fugiat excepturi consequuntur atque perferendis libero non perspiciatis maiores deleniti aperiam cum aliquid sunt animi et, optio rem quasi similique laborum magni delectus dolorum quos officia harum. Nemo illo sit iste dignissimos, nam commodi ex, cumque, voluptas consectetur vel necessitatibus ullam nostrum quas repellat! Totam, ipsa cum.</h2>
    </div>
    @endsection
</body>

</html>
