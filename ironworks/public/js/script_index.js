//--------Este trecho dá a funcionalidade de-----------//
//--------expandir a nav-bar através de um botão-------//
const btnMenu = document.getElementById('btn-menu');

function toggleMenu() {
    const nav = document.getElementById('nav-item-box');
    nav.classList.toggle('menu-expanded')
}

btnMenu.addEventListener('click', toggleMenu);

//-------Trecho que complementa a funcionalidade de PWA--------//

$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $(".nav-bar").addClass("nav-scroll-effect");
            $(".nav-link").addClass("link-scroll-effect");
            $(".login-button").addClass("login-button-scroll-effect");
        } else {
            $(".nav-bar").removeClass("nav-scroll-effect");
            $(".nav-link").removeClass("link-scroll-effect");
            $(".login-button").removeClass("login-button-scroll-effect");
        }
    });
});