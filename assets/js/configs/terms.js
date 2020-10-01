$('body').on('change', '.terms__tab input', function () {

    let terms__value = $(this).val();

    $('.terms__item').each(function () {
        let terms_item = $(this).data('account');
        if ( terms_item == terms__value ) {
            $('.terms__item').removeClass('active');
            $(this).addClass('active');
        }
    })
});

$('.terms__tab input').click(function () {
    if ($(this).is(':checked')) {
        $('.terms__tab').removeClass('active');
        $(this).closest('.terms__tab').addClass('active');
    }
});

// let popUp = document.querySelector('.terms-pop-up__background');
// let modalBlock = document.querySelector('.terms-pop-up');
//
// if (popUp){
//     popUp.addEventListener('click',function () {
//         popUp.style.display = 'none';
//     })
// } else {
//     modalBlock.addEventListener('click', function () {
//         modalBlock.style.display = 'block';
//     })
// }

// popUp.addEventListener('click', function () {
//     popUp.style.display = 'none';
// })