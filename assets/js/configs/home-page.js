let openMenu = document.querySelector('.header__menu');
let menu = document.querySelector('.header__menu-links');
let closeMenu = document.querySelector('.header__menu-close');
let closeMenuLeft = document.querySelector('.header__menu-left');
let removeScroll = document.querySelector("body");

openMenu.addEventListener('click', function (){
    menu.classList.add('show');
    removeScroll.style.overflow = 'hidden'
})

closeMenu.addEventListener('click', function (){
    menu.classList.remove('show');
    removeScroll.removeAttribute('style');
})

let openModal = document.querySelector('.hairdressing-services__modal-button');
let removeScrollModal = document.querySelector("html");

openModal.addEventListener('click', function (){
    removeScrollModal.style.overflow = 'hidden'
})


// openModal.addEventListener('click', function (){
//     removeScroll.style.overflow = 'hidden';
// })
