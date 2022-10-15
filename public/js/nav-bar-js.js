//--------Este trecho dá a funcionalidade de-----------//
//--------expandir a nav-bar através de um botão-------//
const btnMenu = document.getElementById('btn-menu');

function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('menu-expanded')
}
btnMenu.addEventListener('click', toggleMenu);


//-------Trecho que faz a transição da nav-bar --------//
$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 150) {
            $(".nav-bar").addClass("nav-scroll-effect"); // 1 Deixa a nav-bar transparente ao rolar a tela //
            $("#nav-menu").addClass("nav-scroll-effect"); // 2 Muda a cor do menu expandido * visivel apenas em telas pequenas * //
            $(".nav-link").addClass("link-scroll-effect"); // 3 Muda a cor do texto dos links de navegação //
            $(".login-button").addClass("login-button-scroll-effect"); // 4 muda a cor do texto do botão de login //
            var btnMenuImg = document.querySelector(".btn-menu-img"); // 5 Muda o icone que expande o menu da cor branca para preta //
            btnMenuImg.setAttribute('src', 'img/btn-menu-black.png');
        } else {
            $("#nav-menu").removeClass("nav-scroll-effect"); // 1 //
            $(".nav-bar").removeClass("nav-scroll-effect"); // 2 //
            $(".nav-link").removeClass("link-scroll-effect"); // 3 //
            $(".login-button").removeClass("login-button-scroll-effect"); // 4 //
            var btnMenuImg = document.querySelector(".btn-menu-img"); // 5 Muda o icone que expande o menu da cor branca para preta //
            btnMenuImg.setAttribute('src', 'img/btn-menu-white.png');
        }
    });
});