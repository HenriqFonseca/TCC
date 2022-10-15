<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="usuario">
            <!--img do usuario e nome-->
            <div class="img-usuario">
                <img src="#" alt="#">
                <h2>sla</h2>
            </div>
            <div class="info-usuario"></div>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    </main>
    <!--footer aq pq n pode faltar n-->
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
            <small>IronWorks Copyright &copy; 2010 </small>
        </footer>
</body>
@endsection
</html>