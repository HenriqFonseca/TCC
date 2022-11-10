<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profilecss/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="cadastro">
                <form class="form-signin" method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <h2 class="form-signin-heading">Insira seu cadastro</h2>
                    <div class="nome" style="width: 100%; display:flex; ">
                        <input type="text" class="input" name="nome" placeholder="Nome" style="padding: 10px" />
                        @error('nome')
                            <div class="error">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                        <br>
                        <input type="text" class="input" name="sobrenome" placeholder="Sobrenome" />
                        @error('sobrenome')
                            <div class="error">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <br>
                    <input type="text" class="input" name="email" id="email" autocomplete="off"
                        placeholder="Email" />
                    @error('email')
                        <div class="error">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                    <br>
                    <input type="text" class="input" name="cpf" id="cpf"
                        onkeypress="$(this).mask('000.000.000-00')" autocomplete="off" maxlength="14"
                        placeholder="CPF" />
                    @error('cpf')
                        <div class="error">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                    <br>

                    <br>

                    <br>
                    <input type="password" class="input" name="password" placeholder="Senha" />
                    @error('password')
                        <div class="error">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                    <div class="login">
                        <br>
                        <button type="submit" class="login-button">
                            Registrar
                        </button>
                        <br>
                    </div>

                </form>


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
            <div class="drop drop-5"></div>
        </div>
    </div>

    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/jQuery-Mask/dist/jquery.mask.js"></script>
</body>
