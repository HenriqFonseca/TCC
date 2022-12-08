<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS DO BOOTSTRAP-->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- FONTS -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:wght@300;400&display=swap') }}" rel="stylesheet">
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
                <a href="{{ route('profile.register_professor') }}" style="background-color:black;">TESTE REGISTER PROF</a>
                <a href="{{ route('profile.register_aluno') }}" style="background-color:black;">TESTE REGISTER ALUNO</a>
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



</html>
