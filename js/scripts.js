

(function ($, root, undefined) {

    $(function () {

        'use strict';

        var $window = $(window);
        var $body = $('body');


        var $header_image = $('#header_image');
        $window.scroll(function(){
            var windowScroll = $window.scrollTop();
            var translateY = windowScroll * 0.3;
            $header_image.css({'transform': 'translateY(' + translateY + 'px)'  });
        });

    });

})(jQuery, this);
