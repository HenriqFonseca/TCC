<!DOCTYPE html>
<html lang="pt-br">

<head>
    {{-- ================ FONTES =============== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profilecss/login.css" rel="stylesheet">
    <title>Login</title>
    <script src="js/jquery-3.6.1.min.js" defer></script>
    <script src="js/jQuery-Mask/dist/jquery.mask.js" defer></script>
    <script src="{{ asset('js/toastmessage.js') }}" defer></script>

</head>

<body>
    @if (session('logado'))
        <div class="toast" id="toast">
            <p>{{ session('logado') }}</p>
        </div>
    @endif
    <div class="container">
        <div class="wrapper">
            <div class="alert-container">
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            <li>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="cadastro">
            <h2 class="form-signin-heading">Insira seus dados</h2>
                <form class="form-signin" method="POST" action="login">
                    @csrf
                    <input type="text" class="input" name="cpf" onkeypress="$(this).mask('000.000.000-00')"
                        autocomplete="off" maxlength="14" placeholder="CPF" />
                    <br>
                    <input type="password" class="input" name="password" placeholder="Senha" />
                    <div class="login">
                        <br>
                        <button class="login-button">
                            Login
</button>
                    </div>

                </form>
                <div class="alternative">
                    <a class="alternative-item" href="">Esqueci minha senha.</a>
                    <a class="alternative-item" href="{{ route('profile.register') }}">Não tem cadastro? Registrar.</a>
              </div>
                
            </div>
            <a href="{{ route('home.index') }}" class="logo-box">
                <img class="img" src="img/logo-vertical.png" alt="">
            </a>
        </div>
        <div class="drops">
            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
        </div>
    </div>
 
    
</body>
