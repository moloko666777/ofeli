$('body').on('change', '.about-us__tab input', function () {

    let account__value = $(this).val();

    $('.about-us-tab').each(function () {
        let account_item = $(this).data('account');
        if ( account_item == account__value ) {
            $('.about-us-tab').removeClass('active');
            $(this).addClass('active');
        }
    })
});

$('.about-us__tab input').click(function () {
    if ($(this).is(':checked')) {
        $('.about-us__tab').removeClass('active');
        $(this).closest('.about-us__tab').addClass('active');
    }
});

$('#tabs-select').on('change',function (){
    let tabSelectVal = $(this).val();

    $('.about-us-tab').each(function () {
        let account_item = $(this).data('account');
        if ( account_item == tabSelectVal ) {
            $('.about-us-tab').removeClass('active');
            $(this).addClass('active');
        }
    })
})