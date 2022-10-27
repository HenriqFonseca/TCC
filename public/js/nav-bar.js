//--------Este trecho dá a funcionalidade de-----------//
//--------expandir a nav-bar através de um botão-------//
const btnMenu = document.getElementById('btn-menu');

function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('menu-expanded')
}
btnMenu.addEventListener('click', toggleMenu);


//-------TRECHO QUE FAZ A TRANSIÇÃO DA NAV-BAR --------//
$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 150) {
            $(".nav-bar").addClass("nav-scroll-effect"); // 1 Deixa a nav-bar transparente ao rolar a tela //
            $(".drop-down").addClass("nav-scroll-effect"); // 2 Deixa o drop-down transparente ao rolar a tela //
            $("#nav-menu").addClass("nav-scroll-effect"); // 3 Muda a cor do menu expandido * visivel apenas em telas pequenas * //
            $(".nav-link").addClass("link-scroll-effect"); // 4 Muda a cor do texto dos links de navegação //
            $(".login-button").addClass("login-button-scroll-effect"); // 5 muda a cor do texto do botão de login //
            var btnMenuImg = document.querySelector(".btn-menu-img"); // 6 Muda o icone que expande 
            btnMenuImg.setAttribute('src', 'img/btn-menu-black.png'); // o menu da cor branca para preta
        } else {
            $("#nav-menu").removeClass("nav-scroll-effect"); // 1 //
            $(".drop-down").removeClass("nav-scroll-effect"); // 2  //
            $(".nav-bar").removeClass("nav-scroll-effect"); // 3 //
            $(".nav-link").removeClass("link-scroll-effect"); // 4 //
            $(".login-button").removeClass("login-button-scroll-effect"); // 5 //
            var btnMenuImg = document.querySelector(".btn-menu-img"); // 6  
            btnMenuImg.setAttribute('src', 'img/btn-menu-white.png'); // 6
        }
    });
});