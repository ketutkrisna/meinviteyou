$(function() {

/*--------------------------------------------------------------
  PopUp pages
--------------------------------------------------------------*/
    (function() {
        var popupWeddingCeremony = $('#popup-wedding-ceremony'),
            popupReciptionCeremony = $('#popup-reciption-ceremony'),
            showWeddingCeremony = $('#show-wedding-ceremony'),
            showReciptionCeremony = $('#show-reciption-ceremony'),
            colseBtn = $('.ceremony .close');

            showWeddingCeremony.click(function(e) {
                e.preventDefault();
                popupWeddingCeremony.fadeIn(500);
                map1();

                colseBtn.click(function() {
                    popupWeddingCeremony.fadeOut(500);
                })
            })

            showReciptionCeremony.click(function(e) {
                e.preventDefault();
                popupReciptionCeremony.fadeIn(500);
                map2();

                colseBtn.click(function() {
                    popupReciptionCeremony.fadeOut(500);
                })
            })

    }());



/*--------------------------------------------------------------
    show hide menu on mobile
--------------------------------------------------------------*/
var link = $('header .nav li > a:not(".dropdown > a")');

link.click(function() {
     $('header .navbar-collapse').removeClass('in');
});



/*--------------------------------------------------------------
    Smooth-scrolling click menu item
--------------------------------------------------------------*/
    $(function() {
        $('#navbar > ul > li > a:not(".dropdown-toggle")').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                    scrollTop: target.offset().top
                }, 700);
                    return false;
                }
            }
        });
    });



/*--------------------------------------------------------------
    Nice scroll
--------------------------------------------------------------*/
    $('.ceremony').niceScroll({
        autohidemode: 'false',     
        cursorborderradius: '0px', 
        background: 'transparent',     
        cursorwidth: '0px',       
        background: 'transparent',
        cursorcolor: 'transparent'    
    });




/*--------------------------------------------------------------
    Hero slider
--------------------------------------------------------------*/

	$(".hero-slider").owlCarousel({
		'singleItem': true,
    'autoPlay': true,
		'pagination': false,
		'mouseDrag': false
	});



/*--------------------------------------------------------------
    Couple
--------------------------------------------------------------*/
    $('.couple .frame-wrapper a').nivoLightbox({
         effect: 'fall'
    });



/*--------------------------------------------------------------
    Gallery
--------------------------------------------------------------*/
    $('.gallery .hover-content a').nivoLightbox({
         effect: 'fall'
    });




/*--------------------------------------------------------------
    Meet slider
--------------------------------------------------------------*/
	$(".meet-slider").owlCarousel({
		'singleItem': true,
		'navigation': true,
		'navigationText': ["<i class='fa fa-angle-left'>","<i class='fa fa-angle-right'>"],
		'mouseDrag': false	
	});



/*--------------------------------------------------------------
    Conversation slider
--------------------------------------------------------------*/
	$(".left-conversation-slider").owlCarousel({
		'singleItem': true,
		'autoPlay': 2500,
        'mouseDrag': false  
	});

	$(".right-conversation-slider").owlCarousel({
        'singleItem': true,
        'autoPlay': 2500,
        'mouseDrag': false  
	});



/*--------------------------------------------------------------
    Coming soon clock
--------------------------------------------------------------*/
	$('#clock').countDown({  
        targetDate: {
            'day'   : 1,
            'month' : 6,
            'year'  : 2016,
            'hour'  : 0,
            'min'   : 0,
            'sec'   : 0
        },
        omitWeeks: true
    });



/*--------------------------------------------------------------
    RSVP
--------------------------------------------------------------*/
 $('.rsvp .bird').css({
    'opacity': 0
 });

$('.rsvp .bird').each(function () {
    var $this = $(this);

    $this.appear(function() {
        $('.rsvp .bird').addClass('birdFadeInRight');
    });
});
    



/*--------------------------------------------------------------
    Google maps
--------------------------------------------------------------*/
    function map1() {
        var myLatLng = new google.maps.LatLng(40.711320,-74.009185);
        var mapProp = {
            center: myLatLng,
            zoom: 14,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROAD
        };
        var map=new google.maps.Map(document.getElementById("googlemap-1"),mapProp);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'This is the location.'
        });
        map.set('styles',
            [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#cce8fe"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eca4a7"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eaea68"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "transparent"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#1055a9"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a5d2f1"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        );
    }; // end of map1


    function map2() {
        var myLatLng = new google.maps.LatLng(40.762188,-73.971606);
        var mapProp = {
            center: myLatLng,
            zoom: 14,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROAD
        };
        var map=new google.maps.Map(document.getElementById("googlemap-2"),mapProp);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'This is the location.'
        });
        map.set('styles',
            [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#cce8fe"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a3cef3"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eca4a7"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eaea68"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "transparent"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#1055a9"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#a5d2f1"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        );
    }; // end of map2


}); // end of document.ready