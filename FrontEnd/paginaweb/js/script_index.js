// --------Este trecho dá a funcionalidade de-----------//
// --------expandir a nav-bar através de um botão-------//
const btnMenu = document.getElementById('btn-menu');

function toggleMenu(){
    const nav = document.getElementById('nav-item-box');
    nav.classList.toggle('menu-expanded')
}

btnMobile.addEventListener('click', toggleMenu)
