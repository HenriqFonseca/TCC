<!DOCTYPE html>
<html lang="pt-br">

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
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?" rel="stylesheet"> --}}

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

    <!-- STYLES -->
    <link href="homecss/index.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <script src="js/script_index.js" defer></script>



    <title>Dev Fit</title>
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
                        <img src="img/homem.jpg" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mulher.png" alt="" class="d-block w-100">
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
                <a href="{{ route('profile.register_professor') }}" style="background-color:black;">TESTE REGISTER PROF</a>
                <a href="{{ route('profile.register_aluno') }}" style="background-color:black;">TESTE REGISTER ALUNO</a>
                @guest
                    <a class="grid-link" href="{{ route('profile.login') }}">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/dumbbell.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Meus treinos</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/gym.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Unidades</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="#footer">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/chat.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Fale conosco</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/invoice.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Planos</h3>
                            </div>
                        </div>
                    </a>
                @endguest
                @auth
                    @if (auth()->user()->aluno == 1)
                        <a class="grid-link" href="/treinos/show/{{ auth()->user()->id }} ">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/dumbbell.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Meus treinos</h3>
                                </div>
                            </div>
                        </a>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/gym.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Unidades</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="#footer">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/chat.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Fale conosco</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="img/invoice.png" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Planos</h3>
                            </div>
                        </div>
                    </a>
                    @else
                        <a class="grid-link" href="{{ route('treino.index') }}">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/dumbbell.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Alunos</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="{{ route('exercicio.index') }}">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/dumbbell.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Exercícios</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/gym.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Unidades</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="#footer">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/chat.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Fale conosco</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="img/invoice.png" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Planos</h3>
                                </div>
                            </div>
                        </a>
                    @endif
                @endauth

                {{-- <a class="grid-link" href="">
                    <div class="btn-box">
                        <button class="btn-small">
                            <img src="img/gym.png" alt="">
                        </button>
                        <div class="btn-caption">
                            <h3>Unidades</h3>
                        </div>
                    </div>
                </a>
                <a class="grid-link" href="#footer">
                    <div class="btn-box">
                        <button class="btn-small">
                            <img src="img/chat.png" alt="">
                        </button>
                        <div class="btn-caption">
                            <h3>Fale conosco</h3>
                        </div>
                    </div> --}}
                
                <!-- <a class="grid-link" href="">
                                    <div class="btn-box">
                                        <button class="btn-small">
                                            <img src="img/calendar.png" alt="">
                                        </button>
                                        <div class="btn-caption">
                                            <h3>Algum Texto</h3>
                                        </div>
                                    </div>
                                </a> -->
                
            </div>

            <div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>

        </main>
        </footer>

        {{-- Script Service Worker --}}
        <script src="{{ secure_asset('sw.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("sw.js").then(function(reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>
    </body>
@endsection
<!-- ATRIBUIÇÕES DE IMAGEM -->
<!--                       -->
<!-- <a href="https://www.flaticon.com/free-icons/dumbbell" title="dumbbell icons">Dumbbell icons created by Icongeek26 - Flaticon</a>  -->
<!-- <a href="https://www.flaticon.com/free-icons/gym" title="gym icons">Gym icons created by Icongeek26 - Flaticon</a> -->
<!-- <a href="https://www.flaticon.com/free-icons/gym" title="gym icons">Gym icons created by Icongeek26 - Flaticon</a> -->
<!-- <a href="https://www.flaticon.com/free-icons/invoice" title="invoice icons">Invoice icons created by Icongeek26 - Flaticon</a> -->
<!-- <a href="https://www.flaticon.com/free-icons/architecture-and-city" title="architecture and city icons">Architecture and city icons created by Icongeek26 - Flaticon</a> -->
<!-- <a href="https://www.flaticon.com/free-icons/gym" title="gym icons">Gym icons created by Icongeek26 - Flaticon</a> -->





</html>
