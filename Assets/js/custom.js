(function($) {
    'use strict';

    if ($("#header").length > 0) {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() >100) {
                $("#header").css("position", "fixed");
                $("#header").css("width", "100%");
                // $("#header").css("padding", "10px");
                // $(".navbar-brand").css("margin-top", "36px");
                $(".navbar-brand img").css("width", "50%");
            } else {
                $("#header").css("position", "relative");
                $("#header").css("width", "100%");
                // $("#header").css("padding", "0px");
                $(".navbar-brand").css("margin-top", "0px");
                $(".navbar-brand img").css("width", "100%");
            }
        });
    }
})(jQuery);



var elem = document.getElementById("myvideo");
if (elem.requestFullscreen) {
    elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) {
    elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
}

;