//--------Este trecho dá a funcionalidade de-----------//
//--------expandir a nav-bar através de um botão-------//
const btnMenu = document.getElementById('btn-menu');

function toggleMenu() {
    const nav = document.getElementById('nav-item-box');
    nav.classList.toggle('menu-expanded')
}

btnMenu.addEventListener('click', toggleMenu);

//-------Trecho que complementa a funcionalidade de PWA--------//
if ('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('/sw.js')
        .then(serviceWorker => {
            console.log('Service Worker registered: ' + serviceWorker);
        })
        .catch(error => {
            console.log('Error registering the Service Worker: ' + error);
        });
}
$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $("nav").addClass("teste");
        } else {
            $("nav").removeClass("teste");
        }
    });
});