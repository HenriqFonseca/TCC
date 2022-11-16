<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos</title>

    <!-- CSS DO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

    <!-- STYLES -->
    <link href="treinocss/treinos_aluno.css" rel="stylesheet">

    <!-- SCRIPTS -->
</head>

<body>
    <!----------NAV-BAR------------->
    @extends('navbar-pronta.nav-bar')

    @section('conteudo')
    <main>
            <!--nav bar dia da semana-->
            <div class="content">
                <div class="sequency-bar">
                    <ul>
                        <div class="sequency">
                            <li>Sequência 1</li>
                        </div>
                        <div class="sequency">
                            <li>Sequência 2</li>
                        </div>
                        <div class="sequency">
                            <li>Sequência 3</li>
                        </div>
                        <div class="sequency">
                            <li>Sequência 4</li>
                        </div>
                        <div class="sequency">
                            <li>Sequência 5</li>
                        </div>
                    </ul>
                </div>
                <!--"blocos de treinos" os conteiners onde os treinos vão ficar-->
                <div class="container">
                    <div class="treino">
                        <div class="img">
                            <!-- qualquer imagem do exercicio-->
                        </div>
                        <div class="info-treino">*</div>
                        <div class="repeticoes">*</div>
                        <div class="mais-infos">*</div>
                    </div>
                    <div class="treino">
                        <div class="img">
                            <!-- qualquer imagem do exercicio-->
                        </div>
                        <div class="info-treino">*</div>
                        <div class="repeticoes">*</div>
                        <div class="mais-infos">*</div>
                    </div>
                    <div class="treino">
                        <div class="img">
                            <!-- qualquer imagem do exercicio-->
                        </div>
                        <div class="info-treino">*</div>
                        <div class="repeticoes">*</div>
                        <div class="mais-infos">*</div>
                    </div>
                </div>
            </div>

            <!--ficha do usuario aq-->
            <div class="usuario">
                <!--img do usuario e nome-->
                <div class="img-usuario">
                    
                    <h2>Robervaldo</h2>
                </div>
                <div class="info-usuario"></div>
            </div>

            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
    </main>

</body>
@endsection

</html>