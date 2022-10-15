<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS DO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?" rel="stylesheet">

    <!-- ME PERMITE FAZER A TRANSIÇÃO DA NAV-BAR -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- STYLES -->
    <link href="homecss/index.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <script defer src="js/script_index.js"></script>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <title>IronWorks</title>
</head>

<body>
    <!----------NAV-BAR------------->
    @extends('navbar-pronta.nav-bar')

    @section('conteudo')
    <main>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/8225.jpg" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/897.jpg" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/lulaxbolso.jpg" alt="" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!--Carousrel end-->


        <div class="btn-grid-container">
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/dumbbell.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/location.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/chat.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/invoice.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/calendar.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/note.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
        </div>
        <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>

    </main>


    <footer>
        <div class="nav-footer">
            <nav>
                <h2>Navegue no site</h2>
                <ul>
                    <li><a href="#">Capa</a></li>
                    <li><a href="#">História dos instrumentos de metal</a></li>
                    <li><a href="#">Seja um colaborarador</a></li>
                    <li><a href="#">Quem somos</a></li>
                </ul>
            </nav>
            <nav>
                <h2>Fique conectado !</h2>
                <ul>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </nav>
        </div>
        <small>IronWorks Copyright © 2077 </small>
    </footer>

    {{-- Script Service Worker --}}
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>
@endsection
<!-- ATRIBUIÇÕES DE IMAGEM -->
<!--                       -->
<!-- <a href="https://br.freepik.com/vetores-gratis/pagina-de-destino-isometrica-de-ginasio-equipamento-de-fitness_7062176.htm#query=gym&position=42&from_view=search">Imagem de upklyak</a> no Freepik  


<a href="https://br.freepik.com/vetores-gratis/atletas-fazendo-exercicios-de-fitness-no-ginasio-com-janelas-panoramicas-isolaram-ilustracao-vetorial-plana-desenhos-animados-cardio-treinamento-e-levantamento-de-peso_10172354.htm#query=gym&position=16&from_view=search">Imagem de pch.vector</a> no Freepik

<a href="https://www.flaticon.com/br/icones-gratis/academia" title="academia ícones">Academia ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/conversacao" title="conversação ícones">Conversação ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/negocios-e-financas" title="negócios e finanças ícones">Negócios e finanças ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/esportes-e-competicao" title="esportes e competição ícones">Esportes e competição ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/academia" title="academia ícones">Academia ícones criados por Freepik - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/calendario" title="calendario ícones">Calendario ícones criados por Icongeek26 - Flaticon</a>-->


</html>