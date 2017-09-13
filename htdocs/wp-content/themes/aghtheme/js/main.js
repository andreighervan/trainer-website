$(document).ready(function () {
    $('.search-icon').click(function () {
        $('.social li a i,.nav-header,.navbar-brand').hide();
    });
    $('.search-icon').click(function () {
        $('.form-search').addClass('form-search-class');
    });
    $('.close-btn').click(function () {
        $('.social li a i,.nav-header,.navbar-brand').show();
    })

})