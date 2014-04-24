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
