$(function() {
	
/*--------------------------------------------------------------
    RSVP
--------------------------------------------------------------*/
	 $('.leave-comment .bird').css({
	    'opacity': 0
	 });

	$('.leave-comment .bird').each(function () {
	    var $this = $(this);

	    $this.appear(function() {
	        $('.leave-comment .bird').addClass('birdFadeInRight');
	    });
	});

}); // end of document.ready