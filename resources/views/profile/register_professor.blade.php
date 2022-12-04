<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profilecss/register.css" rel="stylesheet">
    <script src="js/jquery-3.6.1.min.js" defer></script>
    <script src="js/jQuery-Mask/dist/jquery.mask.js" defer></script>
    <title>Registrar</title>
</head>

<body>

    <div class="alert-container" style="max-width:500px ;">
        @if ($errors->any())
        <div class="alert" style="max-width: 500px; position: absolute; top:5vh; width:27rem;">
            <ul>
                <li style="list-style: none">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </li>
            </ul>
        </div>
        @endif
    </div>
    <div class="container">
        <div class="wrapper">

            <div class="cadastro">
                <form class="form-signin" method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <input type="hidden" name="professor" value="1">
                    <h2 class="form-signin-heading">Insira os dados</h2>
                    <br>
                    <div class="select_user"><a href="{{ route('profile.register_aluno') }}">Aluno</a><a href="{{ route('profile.register_professor') }}" id="active-user">Professor</a></div>
                    <br>
                    <div class="nome">
                        {{-- CASO HAJA UM ERRO NO INPUT NOME A CLASSE VAI MUDAR --}}
                        <input type="text" @if ($errors->has('nome'))
                        class="input-error"
                        @else
                        class="input"
                        @endif
                        name="nome" placeholder="Nome" />

                        {{-- CASO HAJA UM ERRO NO INPUT SOBRENOME A CLASSE VAI MUDAR --}}
                        <input type="text" @if ($errors->has('sobrenome'))
                        class="input-error"
                        @else class="input"
                        @endif
                        name="sobrenome" placeholder="Sobrenome" />
                    </div>
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT EMAIL A CLASSE VAI MUDAR --}}
                    <input type="text" @if ($errors->has('email'))
                    class="input-error"
                    @else class="input"
                    @endif name="email" id="email" autocomplete="off"
                    placeholder="Email" />
                    <br>
                    <input type="date" @if ($errors->has('dataNascimento'))
                    class="input-error"
                    @else class="input"
                    @endif name="dataNascimento" id="dataNascimento" autocomplete="off"
                    placeholder="" />
                    <br>
                    <input type="text" placeholder="RG" @if ($errors->has('cpf'))
                    class="input-error"
                    @else class="input"
                    @endif
                    name="cpf" id="cpf"onkeypress="$(this).mask('00.000.000-0')" autocomplete="off" maxlength="9" placeholder="RG" />
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT CPF A CLASSE VAI MUDAR --}}
                    <input type="text" @if ($errors->has('cpf'))
                    class="input-error"
                    @else class="input"
                    @endif
                    name="cpf" id="cpf"onkeypress="$(this).mask('000.000.000-00')" autocomplete="off" maxlength="14" placeholder="CPF" />
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT PASSWORD A CLASSE VAI MUDAR --}}
                    <input type="password" @if ($errors->has('password'))
                    class="input-error"
                    @else class="input"
                    @endif name="password" placeholder="Senha" />

                    <br>
                    <button type="submit" class="login-button">
                        Registrar
                    </button>



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
        </div>
    </div>



</body>