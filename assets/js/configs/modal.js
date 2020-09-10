$(document).ready(function(){
    $("#setCookie").click(function () {
        $.cookie("pop-up", "", { expires:0, path: '/' });
        $("#pop-up__background").hide();
    });

    if ( $.cookie("pop-up") == null )
    {
        setTimeout(function(){
            $("#pop-up__background").show();
        }, 4000)
    }
    else { $("#pop-up__background").hide();
    }
});



let openMobileMenu = document.querySelector('.header__mobile-menu-icon');
let menu = document.querySelector('.header__mobile-menu');

openMobileMenu.addEventListener('click', function () {
    menu.classList.toggle('open-menu');
})
//
//
//
// document.querySelector('.header__mobile-menu-icon').onclick = function () {
//     if (document.querySelector('.header__mobile-menu')) {
//         document.querySelector('.header__mobile-menu').remove('open-menu')
//     } else {
//         document.querySelector('.header__mobile-menu').add('open-menu');
//     }
//
// };


