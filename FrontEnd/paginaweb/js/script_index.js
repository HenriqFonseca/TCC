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
            $(".nav-link").addClass("link-scroll-effect");
            $("nav").addClass("nav-scroll-effect");
        } else {
            $(".nav-link").removeClass("link-scroll-effect");
            $("nav").removeClass("nav-scroll-effect");
        }
    });
});