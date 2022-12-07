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
    margin-top: 6rem;
    width: 100%;
    max-width: 1300px;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    background-color: var(--footer-color);
    padding: 2rem;
    border-radius: 0.7rem;
}

.link-attrib {
    display: flex;
padding: 1rem;
    background-color: #ffffffb2;
    border-radius: 0.7rem;
}
.link-attrib>a{
    color: black;
}
.link-attrib>a:hover{
    color:gray;
}
    </style>
    @extends('navbar-pronta.nav-bar')

    @section('conteudo')

<div class="container">
    <div class="link-attrib"><a href="https://www.flaticon.com/free-icons/dumbbell" title="dumbbell icons">Dumbbell icons created by Icongeek26 - Flaticon</a></div>
    <div class="link-attrib"><a href="https://www.flaticon.com/free-icons/invoice" title="invoice icons">Invoice icons created by Icongeek26 - Flaticon</a></div>
    <div class="link-attrib"><a href="https://www.flaticon.com/free-icons/architecture-and-city" title="architecture and city icons">Architecture and city icons created by Icongeek26 - Flaticon</a></div>
    <div class="link-attrib"><a href="https://www.flaticon.com/free-icons/gym" title="gym icons">Gym icons created by Icongeek26 - Flaticon</a></div>
    <div class="link-attrib"><a href="https://www.flaticon.com/free-icons/customers" title="customers icons">Customers icons created by Eucalyp - Flaticon</a></div>
    <div class="link-attrib"><a href="https://www.pexels.com/pt-br/foto/homem-segurando-haltere-preto-1229356/"> Anush Gorak pexels</a></div>
    <div class="link-attrib"><a href="https://unsplash.com/@scottwebb?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Scottwebb</a></div>
</div>
  
    @endsection
</body>
</html>