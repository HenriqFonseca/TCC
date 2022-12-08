<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/profilecss/register.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}" defer></script>
    <script src="{{ asset('/js/jQuery-Mask/dist/jquery.mask.js') }}" defer></script>
    <title>Registrar</title>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ secure_asset('/img/logo.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

</head>

<body>

   
    <div class="container">
        <div class="wrapper">

            <div class="cadastro">
                <form class="form-signin" method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <input type="hidden" name="professor" value="1">
                    <h2 class="form-signin-heading">Insira os dados</h2>
                    <br>
                    <div  class="select_user"><a  href="{{ route('profile.register_aluno') }}">Aluno</a><a href="{{ route('profile.register_professor') }}" id="active-user">Professor</a></div>
                    <br>
                    <div class="nome">
                        {{-- CASO HAJA UM ERRO NO INPUT NOME A CLASSE VAI MUDAR --}}
                        <div class="container-erro-nome">
                            <input type="text" @if ($errors->has('nome'))
                            class="input-error" name="nome" placeholder="Nome" />
                            <small style="color: red; background-color: white; text-stroke:;">@error('nome') {{ $message }} @enderror</small>
                            @else
                            class="input" name="nome" placeholder="Nome" />
                            @endif
                        </div>

                        {{-- CASO HAJA UM ERRO NO INPUT SOBRENOME A CLASSE VAI MUDAR --}}
                        <div class="container-erro">

                            <input type="text" @if ($errors->has('sobrenome'))
                            class="input-error" name="sobrenome" placeholder="Sobrenome" />
                            <small style="color: red; background-color: white;">@error('sobrenome') {{ $message }} @enderror</small>
                            @else class="input" name="sobrenome" placeholder="Sobrenome" />
                            @endif
                        </div>
                    </div>
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT EMAIL A CLASSE VAI MUDAR --}}
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                        <input type="text" @if ($errors->has('email'))
                        class="input-error" name="email" id="email" autocomplete="off"
                        placeholder="Email" />
                        <small style="color: red; background-color: white; text-align:left;">@error('email') {{ $message }} @enderror</small>
                        @else class="input" name="email" id="email" autocomplete="off" placeholder="Email" />
                        @endif 
                        </div>
                    </div>
                    <br>
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="date" @if ($errors->has('dataNascimento'))
                            class="input-error" name="dataNascimento" id="dataNascimento" autocomplete="off" placeholder="" />
                            <small style="color: red; background-color: white; text-align:left;">@error('dataNascimento') {{ $message }} @enderror</small>
                            @else class="input" name="dataNascimento" id="dataNascimento" autocomplete="off" placeholder="" />
                            @endif 
                        </div>
                    </div>
                    <br>

                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="text" placeholder="RG" @if ($errors->has('rg'))
                            class="input-error"  name="rg" id="rg" onkeypress="$(this).mask('00-000-000-0')" autocomplete="off" maxlength="9" placeholder="RG" />
                            <small style="color: red; background-color: white; text-align:left;"> @error('rg') {{ $message }} @enderror </small>
                            @else class="input"  name="rg" id="rg" onkeypress="$(this).mask('00-000-000-0')" autocomplete="off" maxlength="9" placeholder="RG" />
                            @endif
                        </div>        
                    </div>        
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT CPF A CLASSE VAI MUDAR --}}
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="text" @if ($errors->has('cpf'))
                            class="input-error" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00')" autocomplete="off" maxlength="14" placeholder="CPF" />
                            <small style="color: red; background-color: white; text-align:left;">@error('cpf') {{ $message }} @enderror</small>
                            @else class="input" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00')" autocomplete="off" maxlength="14" placeholder="CPF" />
                            @endif
                        </div>
                    </div>
                    <br>
                    {{-- CASO HAJA UM ERRO NO INPUT PASSWORD A CLASSE VAI MUDAR --}}
                    <div class="container-erro" style="width: 100%">
                        <div class="container-erro">
                            <input type="password" @if ($errors->has('password'))
                            class="input-error" name="password" placeholder="Senha" />
                            <small style="color: red; background-color: white; text-align:left;">@error('password') {{ $message }} @enderror</small>
                            @else class="input" name="password" placeholder="Senha" />
                            @endif 
                        </div>
                    </div>
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