import slick from '../node_modules/slick-carousel/slick/slick.js';
import Masonry from '../node_modules/masonry-layout/dist/masonry.pkgd.js';
import featherlight from '../node_modules/featherlight/release/featherlight.min.js';

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



        // mobile menu button
        var $menu_button = $('#menu_button');
        var $nav = $('nav');
        $menu_button.on('click', function(e){
            e.preventDefault();
            $nav.toggleClass('visible');
        });

        // if press escape key, hide menu
        $(document).on('keydown', function(e){
            if(e.keyCode == 27 ){
                $nav.removeClass('visible');
            }
        })


        //MASONRY GALLERY
        var grid = document.querySelector('.masonry_gallery');
        if (grid)  {
            setTimeout( function(){
                var msnry = new Masonry( grid, {
                    itemSelector: '.grid_item'
                });
            }, 500 );
        }

        //END OF MASONRY GALLERY





        // START OF CAROUSEL
        var $slidesToShow = 1;
        if ($window.width() > 768 ) {
            $slidesToShow = 3;
        }
        $('.carousel').slick({
            // options
            infinite: true,
            accessibility: true,
            slidesToShow: $slidesToShow,
            slidesToScroll: 1,
            prevArrow: '<div class="slick-prev">&lt;</div>',
            nextArrow: '<div class="slick-next">&gt;</div>',
            autoplay: true,
            autoplaySpeed: 2000
        });
        // END OF CAROUSEL


        // MAP
        // MEMBERS MAP
        if (typeof single_map_location != 'undefined') {

            var map_theme = [{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]}];

            var map_options = {
                zoom: 15,
                mapTypeControl: true,
                scrollwheel: false,
                draggable: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: map_theme
            };


            var location_map_container = $('#map_container');
            location_map_container.css({
                width : '100%'
            })

            var location_map = new google.maps.Map(location_map_container.get(0), map_options);
            var latlng = new google.maps.LatLng(  single_map_location.lat, single_map_location.lng   );
            var infowindow = new google.maps.InfoWindow({content: ''});
            var marker = new google.maps.Marker({
                position: latlng,
                map: location_map,
                optimized: false
            });

            marker.addListener('click', function(){
                infowindow.setContent( single_map_location.title );
                infowindow.open(location_map, this);
            })

            location_map.setCenter( latlng );



        };
        // END OF MAP






        // BIG MAP
        if (typeof multi_locations !== 'undefined') {


            var  map = new google.maps.Map(document.getElementById('map'), {
                // center: {lat: latitude , lng: longitude  },
                // zoom: 13,
                scrollwheel: false,
                draggable: !("ontouchend" in document),
                styles: [{featureType:"all",stylers:[{saturation:-80}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{hue:"#00ffee"},{saturation:50}]},{featureType:"road.arterial",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road.highway",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels",stylers:[{visibility:"off"}]}]
            });





            var iconBase = icon_map_base;
            var icons = {
                winter: {

                    url: iconBase + 'winter.png',// url
                    scaledSize: new google.maps.Size(30, 41), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(15, 20) // anchor

                },
                summer: {

                    url: iconBase + 'summer.png',// url
                    scaledSize: new google.maps.Size(30, 41), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(15, 20) // anchor

                },
                amenites: {

                    url: iconBase + 'amenites.png',// url
                    scaledSize: new google.maps.Size(30, 41), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(15, 20) // anchor

                },
                residence: {

                    url: iconBase + 'residence.png',// url
                    scaledSize: new google.maps.Size(30, 41), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(15, 20) // anchor

                }
            }



            var infowindow = new google.maps.InfoWindow;
            var marker, i;
            var markers = [];

            for (var i = 0; i < multi_locations.length; i++) {
                var location = multi_locations[i];
                var latlng = new google.maps.LatLng(  location.lat , location.lng  );
                var marker = new google.maps.Marker({
                    position: latlng,
                    icon: icons[ location.category ],
                    map: map,
                    id: location.id,
                    category:location.category,
                    content: location.description
                });



                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        jQuery('#markercontent').html(marker.content);
                        jQuery('.mapsidebar').show();
                    }
                })(marker, i));

                markers.push(marker);
            }


            fitBoundToVisible(markers, map);





            map.addListener('click', function() {
                $('.mapsidebar').hide();
                fitBoundToVisible(markers, map);
            });



        } // END OF BIG MAP


        $('.change_category_link').on('click', function(e) {
            var $this = $(this);
            var $category = $this.data('category');
            $this.toggleClass('unselected_cat');
            toggleCategory($category);
            fitBoundToVisible(markers, map);
        });

        $('.move_map_link').on('click', function(e) {
            var $this = $(this);
            var $markerid = $this.data('markerid');
            for (var i = 0; i < markers.length; i++) {
                var marker = markers[i];
                if (marker.id == $markerid) {
                    moveCenterOfMap(marker.position, map);
                    google.maps.event.trigger(marker, 'click', {
                        //
                    });
                }
            }
        });
        $('.mapsidebar').on('click', function(e) {
            $(this).hide();
        });



        function moveCenterOfMap(location, map) {
            if (map.zoom < 16) {
                map.setZoom(16);
            }
            map.panTo(location);
        }


        function fitBoundToVisible(markers, map) {
            var map_bounds = new google.maps.LatLngBounds();

            for (var m = 0; m < markers.length; m++) {
                var marker = markers[m];
                if (marker.visible) {
                    map_bounds.extend(marker.position);
                }
            }

            map.fitBounds(map_bounds);

        }


        function toggleCategory( category) {
            for (var i = 0; i < markers.length; i++) {
                marker = markers[i];
                if (marker.category == category) {
                    marker.setVisible(   !marker.visible   ); // if visible hide, if hidden show.
                }
            }
        }



    });

})(jQuery, this);
