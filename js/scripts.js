import slick from '../node_modules/slick-carousel/slick/slick.js';

(function ($, root, undefined) {

    $(function () {

        'use strict';

        var $window = $(window);
        var $body = $('body');

        // START OF PARALLAX
        var $header_image = $('#header_image');
        $window.scroll(function(){
            var windowScroll = $window.scrollTop();
            var translateY = windowScroll * 0.3;
            $header_image.css({'transform': 'translateY(' + translateY + 'px)'  });
        });
        // END OF PARALLAX



        $('.carousel').slick({
          // options
          infinite: true,
          accessibility: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: '<div class="slick-prev"><</div>',
          nextArrow: '<div class="slick-next">></div>',
          autoplay: true,
          autoplaySpeed: 2000
        });




    });

})(jQuery, this);
