let openMenu = document.querySelector('.header__menu');
let menu = document.querySelector('.header__menu-links');
let closeMenu = document.querySelector('.header__menu-close');

openMenu.addEventListener('click', function (){
    menu.classList.add('show');
})

closeMenu.addEventListener('click', function (){
    menu.classList.remove('show');
})

