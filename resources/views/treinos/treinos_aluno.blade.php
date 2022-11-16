<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos</title>
    <!-- CSS -->
    <link href="treinocss/treinos.css" rel="stylesheet">

    <!-- CSS DO BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>

<body>
    <!----------NAV-BAR------------->
    @extends('navbar-pronta.nav-bar')

    @section('conteudo')
    <main>
        <div class="main-container">
            
            <!--nav bar dia da semana-->
            <div class="week-bar2">
                <ul>
                    <div class="segunda">
                        <li></li>
                    </div>
                    <div class="terca">
                        <li></li>
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

            <!--"blocos de treinos" os conteiners onde os treinos vão ficar-->
            <div class="container">
                <div class="img">
                    <!-- qualquer imagem do exercicio-->
                </div>
                <div class="info-treino">*</div>
                <div class="repeticoes">*</div>
                <div class="mais-infos">*</div>
            </div>

            <div class="container">
                <div class="img">
                    <!-- qualquer imagem do exercicio-->
                </div>
                <div class="info-treino">*</div>
                <div class="repeticoes">*</div>
                <div class="mais-infos">*</div>
            </div>

            <div class="container">
                <div class="img">
                    <!-- qualquer imagem do exercicio-->
                </div>
                <div class="info-treino">*</div>
                <div class="repeticoes">*</div>
                <div class="mais-infos">*</div>
            </div>

            <!--ficha do usuario aq-->
            <div class="usuario">
                <!--img do usuario e nome-->
                <div class="img-usuario">
                    <img src="#" alt="#">
                    <h2>sla</h2>
                </div>
                <div class="info-usuario"></div>
            </div>

            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>


        </div>
    </main>

</body>
@endsection

</html>