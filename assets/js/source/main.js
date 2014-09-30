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

var navigation2 = responsiveNav(".hidden-search", {
     customToggle: "search-toggle",
	  navClass: "hidden-search", // String: Default CSS class. If changed, you need to edit the CSS too!
  		navActiveClass: "js-search-active", //
 });

	var navigation1 = responsiveNav(".main-navigation", {
			customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
			// Swapping no-js to js with script instead
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
		 	directionNav: false,
		 	smoothHeight: true,
	 	});
  });

}); // end Wrap all scripts in this
/*
=====================================================
		
	jContent 
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

$("#jcontent").jContent({orientation: 'vertical', 
                        // easing: 'easeOutCirc', 
                        duration: 800,
                        auto: true,
                        direction: 'next', //or 'prev'
                        pause: 1500,
                        pause_on_hover: true}); 

}); // end Wrap all scripts in this

jQuery(document).ready(function($) { // Wrap all scripts in this


}); // end Wrap all scripts in this

/*
=====================================================
		
	Twitter-Post-Fetcher
	
=====================================================
*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

// ##### Advanced example 2 #####
// Similar as previous, except this time we pass a custom function to render the
// tweets ourself! Useful if you need to know exactly when data has returned or
// if you need full control over the output.

var config5 = {
  "id": '513630939277053952',
  "domId": '',
  "maxTweets": 3,
  "enableLinks": true,
  "showUser": false,
  "showTime": true,
  "dateFunction": '',
  "showRetweet": true,
  "customCallback": handleTweets,
  "showInteraction": true
};

var configMobile = {
  "id": '513630939277053952',
  "domId": 'mobile-twitter-feed',
  "maxTweets": 1,
  "enableLinks": true,
  "showUser": false,
  "showTime": true,
  "dateFunction": '',
  "showRetweet": true,
  // "customCallback": handleTweets,
  "showInteraction": true
};
twitterFetcher.fetch(configMobile);

var milk_ActiveCarousselTwitter = function () {
	//twitter carroussel
	$("#twitter-test").jContent({
		orientation: 'vertical',
		width :794,
		// height:150,
        easing: 'easeInOutBack',
        speed: 1000,
        auto: true,
        direction: 'next', //or 'prev'
        pause: 6500,
        pause_on_hover: true
     });
     $(".twitter-link").unbind("click");
};
twitterFetcher.fetch(config5);
function handleTweets(tweets){
    var x = tweets.length;
    var n = 0;
    //var element = document.getElementById('slides');
    var html = '';
    while(n < x) {
      html += '<div class="article-wrapper"><div class="a-tweet"><p class="tweet-content">' + tweets[n] + '</p></div></div>';
      n++;
    }
    html += '';
    //element.innerHTML = html;
    $('.twitter-feed').find("div.slides").html(html);
	 $( "a" ).wrapInner( "<span></span>" ); // wrap text in span for styling
    milk_ActiveCarousselTwitter();
}
}); // end Wrap all scripts in this

/* ==========================================================================
   Sticky sidebar
   ========================================================================== */

jQuery( document ).ready( function( $ ) { // Wrap all scripts in this

	$("#sticky-sidebar").stick_in_parent();
    
});
