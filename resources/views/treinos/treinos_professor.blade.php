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

<!--"blocos de treinos" os conteiners onde os treinos vão ficar-->
            <div class="container">
            <div class="img"> <!-- qualquer imagem do exercicio--></div> 
            <div class="info-treino">*</div>
            <div class="repeticoes">*</div>
            <div class="mais-infos">*</div>
        </div>

        <div class="container">
            <div class="img"> <!-- qualquer imagem do exercicio--></div> 
            <div class="info-treino">*</div>
            <div class="repeticoes">*</div>
            <div class="mais-infos">*</div>
        </div>

        <div class="container">
            <div class="img"> <!-- qualquer imagem do exercicio--></div> 
            <div class="info-treino">*</div>
            <div class="repeticoes">*</div>
            <div class="mais-infos">*</div>
        </div>

<!--ficha do usuario aq-->
<div class="usuarios">
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuario</h2>
    </div>
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuario</h2>
    </div>
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuario</h2>
    </div>
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuario</h2>
    </div>
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuario</h2>
    </div>
    <div class="perfil">
        <img src="#" alt="#">
        <h2>usuariohigfiheqwf</h2>
    </div>
</div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    </main>

</body>
@endsection
</html>