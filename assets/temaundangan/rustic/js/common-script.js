function init() {
    $('.main-header').hide();
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 500,
            header = document.querySelector(".main-header");
        if (distanceY > shrinkOn) {
            classie.add(header,"fixed-header");
        } else {
            if (classie.has(header,"fixed-header")) {
                classie.remove(header,"fixed-header");
            }
        }
        if(distanceY < 500){
            $('.main-header').hide();
        }else{
            $('.main-header').show();
        }
    });
}
window.onload = init();

$(window).load(function() {
    $(".site-loder").delay(500).fadeOut('slow');
});


$(document).ready(function() {
    // toggle navigation
    (function() {
        var navigation = $('header #navbar'),
            toggleNavigationButton = $('header .tog-nav'),
            openBtn = $('header .open'),
            closeBtn = $('header .close');

            navigation.css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        toggleNavigationButton.click(function() {
            if (openBtn.attr('data-count') == 0) {
                openBtn.css({
                    'left': '-100%'
                });
                closeBtn.css({
                    'left': '50%'
                });
                openBtn.attr('data-count','1');

            } else if (openBtn.attr('data-count') == 1) {
                openBtn.css({
                    'left': '50%'
                });
                closeBtn.css({
                    'left': '-100%'
                });
                openBtn.attr('data-count','0');

            }
            navigation.toggleClass('show-hide-nav');
        })
    }());
	
	//Contact Form Validation
	if($('#rsvp-form').length){
		$('#rsvp-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				events: {
					required: true
				},
				guests: {
					required: true
				},
				description: {
					required: true
				}
			}
		});
	}

});

$(function() {
/*--------------------------------------------------------------
  Drop down menu
--------------------------------------------------------------*/
    toggleDropdownMenu(767);
    function toggleDropdownMenu(specificWidth) {
        var menuItem = $('#navbar .dropdown');

        if ($(window).innerWidth() > specificWidth) {
                menuItem.hover(function() {
                $(this).children('.dropdown-menu').slideToggle(100);
            })
        }
    }



/*--------------------------------------------------------------
 Back to top
--------------------------------------------------------------*/
    $('body').prepend('<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>');
    var amountScrolled = 300;

    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });
    
    $('a.back-to-top').click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });

}); // end of document.ready