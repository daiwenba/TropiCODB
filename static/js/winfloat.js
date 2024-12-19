(function($) {
    jQuery.fn.imgFloat = function(options) {
        var own = this;
        var xD = 0;
        var yD = 0;
        var i = 1;
        var settings = {
            speed: 10,
            xPos: 0,
            yPos: 0
        };
        jQuery.extend(settings, options);
        var ownTop = settings.xPos;
        var ownLeft = settings.yPos;
        own.css({
            position: "absolute",
            cursor: "pointer"
        });
        function imgPosition() {
			//调整漂浮窗口反弹的位置。
            var winWidth = $(window).width() - own.width() - 15;
            var winHeight = $(window).height() + $(document).scrollTop() - own.height() - 115;
            if (xD == 0) {
                ownLeft += i;
                own.css({
                    left: ownLeft
                });
                if (ownLeft >= winWidth) {
                    ownLeft = winWidth;
                    xD = 1;
                }
            }
            if (xD == 1) {
                ownLeft -= i;
                own.css({
                    left: ownLeft
                });
                if (ownLeft <= 0) {
                    xD = 0;
                }
            }
            if (yD == 0) {
                ownTop += i;
                own.css({
                    top: ownTop
                });
                if (ownTop >= winHeight) {
                    ownTop = winHeight;
                    yD = 1;
                }
            }
            if (yD == 1) {
                ownTop -= i;
                own.css({
                    top: ownTop
                });
                if (ownTop <= $(document).scrollTop()) {
                    yD = 0;
                }
            }
        }
        var imgHover = setInterval(imgPosition, settings.speed);
        own.hover(function() {
            clearInterval(imgHover);
        },
                function() {
                    imgHover = setInterval(imgPosition, settings.speed);
                });
    };
})(jQuery);