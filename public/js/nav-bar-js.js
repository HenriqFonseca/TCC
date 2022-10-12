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
            $(".nav-bar").addClass("nav-scroll-effect");
            $("#nav-menu").addClass("nav-scroll-effect");
            $(".nav-link").addClass("link-scroll-effect");
            $(".login-button").addClass("login-button-scroll-effect");
            var btnImg = document.querySelector(".btn-img");
            btnImg.setAttribute('src', 'img/btn-menu-black.png');
        } else {
            $("#nav-menu").removeClass("nav-scroll-effect");
            $(".nav-bar").removeClass("nav-scroll-effect");
            $(".nav-link").removeClass("link-scroll-effect");
            $(".login-button").removeClass("login-button-scroll-effect");
            var btnImg = document.querySelector(".btn-img");
            btnImg.setAttribute('src', 'img/btn-menu-white.png');
        }
    });
});