// let openMenu = document.querySelector('.header__menu');
// let menu = document.querySelector('.header__menu-links');
// let closeMenu = document.querySelector('.header__menu-close');
// let closeMenuLeft = document.querySelector('.header__menu-left');
// let removeScroll = document.querySelector('body');
//
// openMenu.addEventListener('click', function (){
//     menu.classList.add('show');
//     removeScroll.style.overflow = 'hidden';
//     removeScroll.style.paddingRight = '5px';
// })
//
// closeMenu.addEventListener('click', function (){
//     menu.classList.remove('show');
//     removeScroll.removeAttribute('style');
// })





        //Navigation

        var app = function () {
            var body = undefined;
            var menu = undefined;
            var menuItems = undefined;
            var init = function init() {
                body = document.querySelector('body');
                menu = document.querySelector('.menu-icon');
                menuItems = document.querySelectorAll('.nav__list-item');
                applyListeners();
            };
            var applyListeners = function applyListeners() {
                if(menu) {
                    menu.addEventListener('click', function () {
                        return toggleClass(body, 'nav-active');
                    });
                }
            };
            var toggleClass = function toggleClass(element, stringClass) {
                if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
            };
            init();
        }();




