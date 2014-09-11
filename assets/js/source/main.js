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
