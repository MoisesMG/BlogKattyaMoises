$(document).ready(function () {
    $('.flexslider').flexslider({
            animation: "slide"
        });

    $(window).scroll(function () {
          
        if ($(this).scrollTop() > 0) {
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }

        

    })
});