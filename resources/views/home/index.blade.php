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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?" rel="stylesheet"> --}}

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

    <!-- STYLES -->
    <link href="{{ asset('/homecss/index.css') }}" rel="stylesheet">

    <!-- SCRIPTS -->
    <script src="{{ asset('/js/script_index.js') }}" defer></script>



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
                        <img src="{{ asset('img\homem.jp') }}g" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/mulher.jpg') }}" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/supino.jpg') }}" alt="" class="d-block w-100">
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
                @guest
                    <a class="grid-link" href="{{ route('profile.login') }}">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="{{ asset('img/dumbbell.png') }}" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Meus treinos</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="{{ asset('img/gym.png') }}" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Unidades</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="#footer">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="{{ asset('img/chat.png') }}" alt="">
                            </button>
                            <div class="btn-caption">
                                <h3>Fale conosco</h3>
                            </div>
                        </div>
                    </a>
                    <a class="grid-link" href="">
                        <div class="btn-box">
                            <button class="btn-small">
                                <img src="{{ asset('img/invoice.png') }}" alt="">
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
                                    <img src="{{ asset('/img/dumbbell.png') }}" alt="">
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
                                    <img src="{{ asset('/img/gym.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Unidades</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="#footer">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('/img/chat.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Fale conosco</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('img/invoice.png') }}" alt="">
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
                                    <img src="{{ asset('img/alunos.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Lista de alunos</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="{{ route('exercicio.index') }}">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('img/dumbbell.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Exercícios</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="{{ route('profile.register_aluno') }}">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('img/invoice.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Registrar Usuário</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('/img/gym.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Unidades</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="#footer">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('/img/chat.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Fale conosco</h3>
                                </div>
                            </div>
                        </a>
                        <a class="grid-link" href="">
                            <div class="btn-box">
                                <button class="btn-small">
                                    <img src="{{ asset('img/invoice.png') }}" alt="">
                                </button>
                                <div class="btn-caption">
                                    <h3>Planos</h3>
                                </div>
                            </div>
                        </a>
                    @endif
                @endauth


                <style>
                    .text-cards {
                        height: 250px;
                        width: 100%;
                        background-color: #0f1d2785;
                        text-align: center;
                        position: relative;
                    }

                    .text-cards h1 {
                        font-size: 240px;
                        position: absolute;
                        margin: auto;
                        right: 0;
                        left: 0;
                        top: 50%;
                        transform: translateY(-50%);
                        color: hsla(42, 44%, 56%, 0.2);
                        font-weight: bold;
                        font-family: 'Roboto', sans-serif;
                    }

                    .img-card {
                        position: absolute;
                        margin: auto;
                        right: 0;
                        left: 0;
                        top: 50%;
                        transform: translateY(-50%)
                    }


                    .container-cards {
                        height: 400px;
                        max-width: 1320px;
                        width: 100%;
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 5px;
                    }

                    .card img {
                        width: 100% !important;
                        height: 230px;
                        margin-bottom: 20px !important;
                        margin: auto;

                    }

                    .card {
                        color: white;
                        height: 500px;
                        width: 350px !important;
                        background-color: #0f1d2785 !important;
                    }

                    .card-title {
                        font-size: 30px !important;
                        font-weight: 500;
                    }

                    .card-text {
                        margin-bottom: 60px !important;
                    }

                    .card-body {
                        /* position: absolute; */
                        bottom: 0;
                    }


                    /* MEDIA SCREEN CARDS */
                    @media screen and (max-width: 600px) {

                        /* FAIXA COM ATIVIDADES */
                        .text-cards {
                            height: 150x;
                            width: 100%;
                            background-color: #0f1d2785;
                            text-align: center;
                            position: relative;
                        }

                        .text-cards h1 {
                            font-size: 78px;
                            position: absolute;
                            margin: auto;
                            right: 0;
                            left: 0;
                            top: 50%;
                            transform: translateY(-50%);
                            color: hsla(42, 44%, 56%, 0.2);
                            font-weight: bold;
                            font-family: 'Roboto', sans-serif;
                        }

                        .img-card {
                            position: absolute;
                            width: 94vw;
                            margin: auto;
                            right: 0;
                            left: 0;
                            top: 50%;
                            transform: translateY(-50%)
                        }

                        /* CARDS DE ATIVIDADES*/
                        .container-cards {
                            align-items: center;
                            height: auto !important;
                            grid-template-columns: repeat(1, 1fr) !important;
                            gap: 19px !important;
                            display: flex;
                            flex-direction: column !important;
                            margin-bottom: 1100px;
                        }

                        .card {
                            color: black;
                            width: 76vw !important;
                            height: 500px;
                            margin-bottom: 50px;
                        }

                        .card img {
                            width: 100% !important;
                            margin: auto;

                        }


                        .card-body {
                            /* position: absolute; */
                            bottom: 0;
                        }
                    }
                </style>





            </div>

            <div class="text-cards">
                <img class="img-card" src="/img/text-card3.png" alt="">
                <h1 class="text-atividades">ATIVIDADES</h1>
            </div>

            <div class="container-cards">
                <div class="card" style="width: 18rem;">
                    <img src="/img/musculacao.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Musculação</h5>
                        <p class="card-text">Diversas opções de máquinas para exercícios juntamente à uma plataforma para
                            acompanhar seus treinos pelo celular</p>
                        @guest <a href="{{ route('profile.login') }}" class="btn btn-dark">Vamos!</a> @endguest
                        @auth
                            @if (auth()->user()->professor == 1)
                                <a class="btn btn-dark" href="{{ route('treino.index') }}" class="btn btn-dark">Vamos!</a>
                            @elseif(auth()->user()->aluno == 1)
                                <a class="btn btn-dark" href="{{ route('treino.show', auth()->user()->id) }}" class="btn btn-dark">Vamos!</a>
                            @endif
                        @endauth

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="/img/muaythai.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muay Thai</h5>
                        <p class="card-text">Novidades em breve...</p>
                        <a href="#" style="margin-top: 48px;" class="btn btn-secondary">Em breve...</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="/img/dance.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Danças</h5>
                        <p class="card-text">Novidades em breve...</p>
                        <a href="#" style="margin-top: 48px;" class="btn btn-secondary">Em breve...</a>
                    </div>
                </div>

            </div>

            <div>
                <br><br><br><br>
            </div>

        </main>

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
<!-- SCRIPT PARA ADD VARIOS USERS -->
<!--

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,professor,email,password,created_at,updated_at) VALUES('Professor','Sobrenome','2003-01-03','000.000.000-00','00-000-000-0',1,'1professor@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-12-07 00:38:36','2022-12-07 00:38:36');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('Henrique','Sobrenome','2001-12-12','111.111.111-11','11-111-111-1',1,'email1@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-12-06 23:33:09','2022-12-06 23:33:09');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('Alexandre','Sobrenome','2003-07-22','222.222.222-22','22-222-222-2',1,'email2@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-22-06 23:33:09','2022-22-06 23:33:09');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('kaua','Sobrenome','2002-02-25','333.333.333-33','33-333-333-3',1,'email3@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-32-06 23:33:09','2022-32-06 23:33:09');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('Luciano','Sobrenome','1999-12-02','444.444.444-44','44-444-444-4',1,'email4@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-42-06 23:33:09','2022-42-06 23:33:09');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('Rafael','Sobrenome','2004-06-30','555.555.555-55','55-555-555-5',1,'email5@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-52-06 23:33:09','2022-52-06 23:33:09');

    INSERT INTO users(nome,sobrenome,`dataNascimento`,cpf,rg,aluno,email,password,created_at,updated_at) VALUES('Bruna','Sobrenome','2003-06-30','666.666.666-66','66-666-666-6',1,'email6@gmail.com','$2y$10$vwf54R5D28DIoyCN5eKjEuuclB4FiGzqZ57uxIuHl.FhuUbbABhaK','2022-52-06 23:33:09','2022-52-06 23:33:09');

    -->

{{-- 
    
    --}}

</html>
