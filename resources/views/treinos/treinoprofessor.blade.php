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
    <main>
        <!--nav bar dia da semana-->
        <div class="nav-bar2">
            <ul>
                <div class="segunda">
                    <li></li>
                </div>
                <div class="terca"><li></li>
                </div>
                <div class="quarta">
                    <li></li>
                </div>
                <div class="quinta">
                    <li></li>
                </div>
                <div class="sexta">
                    <li></li>
                </div>
            </ul>
        </div>



        <style>
            .wrapper{
                margin: auto;
                width: 100%;
                background-color: rosybrown;
                display: flex;
            }
            .treino-container{
                width: 70%;
                border: 3px solid black;
            }
            .exercicio-container{
                border: 3px solid black;
                border-left: none;
                width: 30%;
            }
            .treino{
                width: 80%;
                height: 200px;
                margin: auto;
                border-radius: 15px;
                border: 3px solid black;
                margin-top: 40px;
                text-align: center;
                display: flex;

            }
            .img{
                width: 23%;
                height: 100%;
                background-color: red;
            }
            .conteudo{
                width: 77%;
                background-color: violet;
            }
        </style>
        <div class="wrapper">
            <div class="treino-container">
                <h2>TREINOS</h2>
                <hr>
                <div class="treino">
                    <div class="img">
                        <h2>IMAGEM</h2>
                    </div>
                    <div class="conteudo">
                        <h2>CONTEUDO</h2>
                    </div>
                </div>
                <div class="treino">
                    treininho
                </div>
                <div class="treino">
                    treininho
                </div>
                <div class="treino">
                    treininho
                </div>
            </div>
            <div class="exercicio-container">
                <h2>EXERCICIOS</h2>
                <hr>
            </div>
        </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    </main>

</body>
@endsection
</html>