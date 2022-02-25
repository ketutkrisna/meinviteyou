(function ($) {
	"use strict";
	
	AOS.init({
		disable: false,
		easing: 'ease', 
		once: false,
		mirror: true,
		duration: 900
	});
	
	$(window).on('beforeunload', function(){
        $(window).scrollTop(0);
    });
	
	// Hero slider
	$('.js-hero-slider').slick({
		autoplay: true,
		autoplaySpeed: 2000,
		infinite: true,
		arrows: false,
		fade: true,
		speed: 800
	});
	
	$(document).ready(function(){
	    $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
	    
		/*$(document).bind("contextmenu",function(e){
			return false;
		});*/
	});
	
	$(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('#buttonmusic').fadeIn('fast');
        }else {
            $('#buttonmusic').fadeOut('fast');
        }
    });

	/* COUNTDOWN*/
	var $countdown = $('.js-countdown');
	var $date = $countdown.attr('data-date');

	$countdown.countdown($date, function(event) {
		$('.js-countdown-days').html(event.strftime('%D'));
		$('.js-countdown-hours').html(event.strftime('%H'));
		$('.js-countdown-minutes').html(event.strftime('%M'));
		$('.js-countdown-seconds').html(event.strftime('%S'));
	});


	/* MASONRY GRID */
	var $grid = $('.grid').masonry({
		itemSelector: '.grid-item',
		percentPosition: true,
		columnWidth: '.grid-sizer',
		gutter: '.gutter-sizer',
	});

	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});
	
	jQuery('.story-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });


	/* ACTIVE LINK */
	function getSectionsOffset() {
		var sections = $('.js-section');
		var sectionsInfo = [];

		sections.each(function() {
			var $self = $(this);
			sectionsInfo.push({
				id: $self.attr('id'),
				offset: $self.offset().top - 100,
			});
		});

		return sectionsInfo;
	}

	function setActiveNavLink() {
		var scrollPosition = $(window).scrollTop() + 53;
		for ( var i = 0; i < sectionsInfo.length; i++) {
			if( scrollPosition >= sectionsInfo[i].offset ) {
				$( '.js-nav-link' ).removeClass('active');
				$( '.js-nav-link[href="#'+ sectionsInfo[i].id + '"]' ).addClass('active');
			}
		}
	}

	function debounce( func, wait ) {
		var timeout;
		var later = function() {
			timeout = undefined;
			func.call();
		};

		return function() {
			if ( timeout ) {
				clearTimeout( timeout );
			}
			timeout = setTimeout( later, wait );
		};
	};
	
	$(document).ready(function(){
		$(document).bind("contextmenu",function(e){
			return false;
		});
	});
	
	var btnmodal = document.getElementById("btn-open");
	var btnmusic = document.getElementById("buttonmusic");
	var audio = document.getElementById("player");
	var videonya = document.getElementById("videonya");
	
	audio.loop = true;

	btnmodal.addEventListener("click", function(){
		 $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
	    
	    if(audio.paused){
	        audio.play();
	        btnmusic.innerHTML = "<ion-icon name='volume-high-outline'></ion-icon>";
	    }
		
		return false;
	});
	
	btnmusic.addEventListener("click", function(){
		if(audio.paused){
			audio.play();
			btnmusic.innerHTML = "<ion-icon name='volume-high-outline'></ion-icon>";
		} else {
			audio.pause();
			btnmusic.innerHTML = "<ion-icon name='volume-mute-outline'></ion-icon>";
		}
	});
	
	videonya.onplay = function(){
	    audio.pause();
	    btnmusic.innerHTML = "<ion-icon name='volume-mute-outline'></ion-icon>";
	};
	videonya.onpause = function(){
	    audio.play();
	    btnmusic.innerHTML = "<ion-icon name='volume-high-outline'></ion-icon>";};

}(jQuery));
