<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="{{ asset('treinocss/index.css') }}" rel="stylesheet">

>
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

    <div class="container-md" style="border: 1px solid black; transform: ">
        <div class="row">
            <div class="col-6">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta sunt ut nisi odit quo iusto excepturi harum doloribus vero laboriosam reiciendis hic, ex dolor dolores dolorem saepe maxime enim pariatur sit? Odit eum delectus illo vel eius! Corporis fuga, inventore accusantium repellendus mollitia facilis molestias, nesciunt nihil est ipsa quia ad minus, aspernatur sed ea vel libero similique rem deserunt? Eos laborum accusamus doloremque atque facilis earum quidem deleniti mollitia, molestiae odio placeat deserunt quos culpa quam animi aliquam delectus quibusdam nulla quas consequatur. Veritatis iusto asperiores accusamus minima?</h2>
            </div>
            <div class="col-6">
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam dicta sunt ut nisi odit quo iusto excepturi harum doloribus vero laboriosam reiciendis hic, ex dolor dolores dolorem saepe maxime enim pariatur sit? Odit eum delectus illo vel eius! Corporis fuga, inventore accusantium repellendus mollitia facilis molestias, nesciunt nihil est ipsa quia ad minus, aspernatur sed ea vel libero similique rem deserunt? Eos laborum accusamus doloremque atque facilis earum quidem deleniti mollitia, molestiae odio placeat deserunt quos culpa quam animi aliquam delectus quibusdam nulla quas consequatur. Veritatis iusto asperiores accusamus minima?</h2>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @endsection
</body>

</html>
