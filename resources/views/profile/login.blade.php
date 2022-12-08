<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/profilecss/login.css') }}" rel="stylesheet">
    <title>Login</title>
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}" defer></script>
    <script src="{{ asset('/js/jQuery-Mask/dist/jquery.mask.js') }}" defer></script>
    <script src="{{ asset('/js/toastmessage.js') }}" defer></script>

     <!-- PWA  -->
     <meta name="theme-color" content="#6777ef" />
     <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
     <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">
</head>

<body>
    @if (session('logado'))
        <div class="toast" id="toast">
            <p>{{ session('logado') }}</p>
        </div>
    @endif
    <div class="container">
        <div class="wrapper">
            <div class="cadastro">
                <h2 class="form-signin-heading">Insira seus dados</h2>
                <form class="form-signin" method="POST" action="login">
                    @csrf
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="text" @if($errors->has('cpf')) class="input-error" name="cpf" onkeypress="$(this).mask('000.000.000-00')"
                                autocomplete="off" maxlength="14" placeholder="CPF" />
                                <small style="color: red; background-color: white; text-align:left;">@error('cpf') {{ $message }} @enderror</small>
                                @else class="input" name="cpf" onkeypress="$(this).mask('000.000.000-00')"
                                autocomplete="off" maxlength="14" placeholder="CPF" />
                                @endif
                        </div>
                    </div>
                    <br>
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="password" @if($errors->has('password')) class="input-error" name="password" placeholder="Senha" />
                            <small style="color: red; background-color: white; text-align:left;">@error('password') {{ $message }} @enderror</small>
                            @else class="input" name="password" maxlength="8" placeholder="Senha" />
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            {{-- LEMBRAR DE REMOVER O MAXLENGTH DA SENHA --}}
                            @endif
                        </div>
                    </div>

                    <div class="login">
                        <br>
                        <button class="login-button">
                            Login
                        </button>
                    </div>

                </form>
                <div class="alternative">
                    <a class="alternative-item"
                        href="http://d3ugyf2ht6aenh.cloudfront.net/stores/914/032/products/6-caneca-personalizada-da-teus-pulos-laranja-frente1-33047fcd763035766b16286118539596-640-0.jpg">Esqueci
                        minha senha.</a>
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
