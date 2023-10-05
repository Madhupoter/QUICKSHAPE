(function($) {
    'use strict';

    if ($("#header").length > 0) {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() >100) {
                $("#header").css("position", "fixed");
                $("#header").css("width", "100%");
                $(".main_video").css("height", "100px");
                $(".media").css("display", "none");
                
                $(".navbar-brand").css("margin-top", "0");
                $(".navbar-brand img").css("width", "35%");
            } else {
                $("#header").css("position", "relative");
                $("#header").css("width", "100%");
                $(".main_video").css("height", "100vh");
                $(".media").css("display", "flex");
                
                $(".navbar-brand").css("margin-top", "-30px");
                $(".navbar-brand img").css("width", "50%");
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