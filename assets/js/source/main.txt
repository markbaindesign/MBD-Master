(function($) {
/*
===============================================
		
		FitVids  
	
===============================================
*/		

jQuery( document ).ready( function( $ ) { // Wrap all scripts in this
	
	// Script
	$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#content").fitVids();
  });

}); // Wrap all scripts in thi
/*
=====================================================
		
		Back to top scrolling
	
=====================================================
*/		

jQuery(document).ready(function($) { // Wrap all scripts in this

	$(document).ready(function(){
		// scroll body to 0px on click
		$('#back-to-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

})(jQuery);

jQuery(document).ready(function($) { // Wrap all scripts in this

/*
	
	Masonry
	
*/


		// initialize Masonry

		$container = $('.masonrycontainer').masonry({
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			itemSelector: ".item"
		
		});
		
		// layout Masonry again after all images have loaded
		
		$container.imagesLoaded( function() {
		$container.masonry();
		});

		

/*
	
	Sources:
		http://web.admcomputing.co.uk/masonry/sample-page/
		http://masonry.desandro.com/appendix.html
	
*/
}); // end Wrap all scripts in this
