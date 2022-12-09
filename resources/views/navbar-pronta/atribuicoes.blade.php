<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atribuições</title>
</head>

<body>
    <style>
        body {
            background-image: url('/img/background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            min-width: 320px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: var(--font-color);
        }

        .container {
            margin: 6rem 0 6rem 0;
            width: 100%;
            max-width: 1300px;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            background-color: var(--footer-color);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 0.7rem;
        }

        .link-attrib {
            display: flex;
            padding: 1rem;
            background-color: #ffffffb2;
            border-radius: 0.7rem;
        }

        .link-attrib {
            color: black;
        }

        .link-attrib>span {
            width: 100%;
        }

        .link-attrib:hover {
            color: gray;
        }
    </style>
    @extends('navbar-pronta.nav-bar')

    @section('conteudo')

    <div class="container">
        <a href="https://www.flaticon.com/free-icons/dumbbell" class="link-attrib">
            <span>https://www.flaticon.com/free-icons/dumbbell</span>
        </a>
        <a href="https://www.flaticon.com/free-icons/invoice" class="link-attrib">
            <span>https://www.flaticon.com/free-icons/invoice</span>
        </a>
        <a href="https://www.flaticon.com/free-icons/architecture-and-city" class="link-attrib">
            <span>https://www.flaticon.com/free-icons/architecture-and-city</span>
        </a>
        <a href="https://www.flaticon.com/free-icons/gym" class="link-attrib">
            <span>https://www.flaticon.com/free-icons/gym</span>
        </a>
        <a href="https://www.flaticon.com/free-icons/customers" class="link-attrib">
            <span>https://www.flaticon.com/free-icons/customers</span>
        </a>
        <a href="https://www.pexels.com/pt-br/foto/homem-segurando-haltere-preto-1229356/" class="link-attrib">
            <span>https://www.pexels.com/pt-br/foto/homem-segurando-haltere-preto-1229356/</span>
        </a>
        <a href="https://unsplash.com/@scottwebb" class="link-attrib">
            <span>https://unsplash.com/@scottwebb</span>
        </a>
        <a href="https://www.flaticon.com/br/icones-gratis/academia" class="link-attrib">
            <span>https://www.flaticon.com/br/icones-gratis/academia</span>
        </a>


    </div>

    @endsection
</body>

</html>