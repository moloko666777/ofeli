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
// $( document ).ready(function() {
//     $('.header__menu').click(function () {
//         const array = $(".header__menu-shows li");
//         let delay = 0;
//         cicle();
//
//         function cicle() {
//             for (let i = 0; i < array.length; i++) {
//                 checker(array[i], delay);
//                 delay += 500;
//
//                 if (array.length - i === 1) cicle();
//             }
//         }
//
//         function checker(elem, delay) {
//             setTimeout(function () {
//                 $(elem).addClass('active').siblings();
//             }, delay);
//
//         }
//     });
// });


// $( document ).ready(function() {
//
//     $('.header__menu').click(function () {
//         $('.header__menu-shows li:eq(0)').animate({width: "toggle"}, 300, function(){
//             $(this).next().animate({width: "toggle"}, 300, arguments.callee);
//         });
//     })
//     $('.header__menu-close').click(function () {
//         $('.header__menu-shows li').removeAttr('style');
//     })
// });
