$(document).ready(function () {
    
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        
        if (scroll >= 100) {
            $('header').addClass('sticky-top');
        } else {
            $('header').removeClass('sticky-top');
        }
    });
});