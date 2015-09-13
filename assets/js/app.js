$(function() {

	var $container = $('.isotope').isotope({
		// main isotope options
		itemSelector: '.item',
		layoutMode: 'masonry',

		// options for masonry layout mode
		masonry: {
			columnWidth: 250,
			gutter: 20
		}
	});

	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 500) {
			$('.arrow-wrap').addClass('active');
		} else {
			$('.arrow-wrap').removeClass('active');
		}
	});
	$('.arrow-wrap').on('click', function(){
		$('html, body').animate({ scrollTop: 0 });
	});

	$('.isotope .item').on('click', function() {
		var images = $(this).find('.gallery');
		var gallery = [];
		images.each(function(index, image) {
			gallery.push({
				href: $(image).attr('href')
			});
		});
		$.fancybox.open(gallery, {
	        padding : 0
	    });
	    
	    return false;
	});

	// header nav
	$('.header .item').on('click', function() {
		var section = $(this).data('section');
		$('html, body').animate({
			scrollTop : $('section' + section).offset().top
		})
	});

});