/*
===============================================
		
		Remove "no-js" class  
	
===============================================
*/	

jQuery( document ).ready( function( $ ) {
	document.documentElement.className = 
       document.documentElement.className.replace("no-js","js");
});

/*
=====================================================
		
		Back to top scrolling
	
=====================================================
*/		


	jQuery(document).ready(function( $ ){
		// scroll body to 0px on click
		$('#back-to-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

/*
=====================================================
		
		Responsive Nav
	
=====================================================
*/	

jQuery(document).ready(function( $ ){
	var navigation = responsiveNav(".nav-collapse", {
			animate: true,                    // Boolean: Use CSS3 transitions, true or false
			transition: 284,                  // Integer: Speed of the transition, in milliseconds
			label: "Menu",                    // String: Label for the navigation toggle
			insert: "before",                  // String: Insert the toggle before or after the navigation
			customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
			closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
			openPos: "relative",              // String: Position of the opened nav, relative or static
			navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
			navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
			jsClass: " ",                    // String: 'JS enabled' class which is added to <html> element
			// Swapping no-js to js with script instead
			init: function(){},               // Function: Init callback
			open: function(){},               // Function: Open callback
			close: function(){}               // Function: Close callback
		});
	});



/*
=====================================================
		
		Masonry
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

		// initialize Masonry

		$container = $('.masonrycontainer').masonry({
			columnWidth: 		'.grid-sizer',
			gutter: 				'.gutter-sizer',
			itemSelector: 		"aside"
		
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

/*
=====================================================
		
		Google Fonts 
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

WebFontConfig = {
    google: { families: [ 'Noto+Sans:400,700,400italic,700italic:latin', 'Noto+Serif:400,700,400italic,700italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
}); // Wrap all scripts in this

/*
=====================================================
		
		WordPress Content Slider 
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

	var body    = $( 'body' ),
	    _window = $( window );

	// Initialize Featured Content slider.
	_window.load( function() {
		if ( body.is( '.slider' ) ) {
			$( '.featured-content' ).featuredslider( {
				selector:  '.featured-content-inner > article',
				controlsContainer: '.featured-content'
			} );
		}
	} );

}); // end Wrap all scripts in this

/*
=====================================================
		
		WordPress Content Slider 
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

$(window).load(function() {
    $('.flexslider').flexslider({
animationLoop: false,
    slideshow: false,
			animation: "slide",
    		controlNav: "thumbnails",
		 directionNav: false;
	 	});
  });

}); // end Wrap all scripts in this
