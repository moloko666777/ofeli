$(document).ready(function(){
    $("#setCookie").click(function (e) {
        e.preventDefault();
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
});

let openSubMenuLink = document.querySelector('.header__mobile-menu-loan');
let openSubMenu = document.querySelector('.header__mobile-submenu');

openSubMenuLink.addEventListener('click', function (e){
    e.preventDefault();
    openSubMenuLink.classList.toggle('active');
    openSubMenu.classList.toggle('open-sub-menu');
});




    let showFormButton = document.querySelector('.open-form__button');
    let showForm = document.querySelector('.mobile-form__form');
    let cancelForm = document.querySelector('.mobile-form__form-cancel');

    if (showFormButton){
        showFormButton.addEventListener('click', function () {
            showForm.classList.add('open-form');
        });
    }
    if (cancelForm) {
        cancelForm.addEventListener('click', function () {
            showForm.classList.remove('open-form');
        });
    }







