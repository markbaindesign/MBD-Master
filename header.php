<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo esc_url( home_url() ); ?>/mstile-144x144.png">


	<?php wp_head(); ?>

<script type="text/javascript">
/*
 * jContent - jQuery Simple Content Slider Plugin v0.8
 * http://do-web.com/jcontent/overview
 *
 * Copyright 2011, Miriam Zusin
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://do-web.com/jcontent/license
 */
jQuery(document).ready(function($) { // Wrap all scripts in this

(function(a){a.fn.jContent=function(b){var f="div.slides",e="next",c=false,d="horizontal",g=this,b=a.extend({speed:500,orientation:d,auto:c,direction:e,pause:5e3,circle:c,easing:"",xml:"",pause_on_hover:c,width:655,height:170,videos:c},b);this.init=function(g){var h="prev",m="vertical",l="div.panel",k="left",j="height",i="width",n="position";g.div=a(g);g.slides_div=a(g).children(f).css("overflow","hidden").css(n,"relative").css(i,b.width).css(j,b.height).css("float",k);g.currentSlide=0;g.lastDirection="";g.isMouseHover=c;g.intervalId;g.div.addClass("jContent");if(b.orientation==d)g.div.addClass("jc-horizontal");else g.div.addClass("jc-vertical");b.auto&&g.div.addClass("jc-auto");b.circle&&g.div.addClass("jc-circle");g.slides=g.slides_div.children("div").css(i,b.width).css(j,b.height).hide();g.count=g.slides.length;g.left_arr=g.div.children("a").eq(0);g.right_arr=g.div.children("a").eq(1);g.slides_div.append("<div class='panel'></div>");g.panel=g.slides_div.children(l).css(n,"absolute");switch(b.orientation){case d:g.slides.css("float",k);g.panel.css(i,3*b.width).css(j,b.height);break;case m:g.panel.css(j,3*b.height).css(i,b.width)}g.getNextIndex=function(){return g.currentSlide>=g.count-1?0:g.currentSlide+1};g.getPrevIndex=function(){return g.currentSlide<=0?g.count-1:g.currentSlide-1};g.clone_slide=function(b){var a=g.slides.eq(b).show(),c="<div style='"+a.attr("style")+"'>"+a.html()+"</div>";a.hide();return c};g.initItemsPosition=function(a){if(g.panel.children().length==0){g.panel.append(g.clone_slide(g.getPrevIndex()));g.panel.append(g.clone_slide(g.currentSlide));g.panel.append(g.clone_slide(g.getNextIndex()))}else if(a==h){g.panel.prepend(g.clone_slide(g.getPrevIndex()));g.panel.children().eq(3).remove();b.videos&&g.panel.children().eq(2).replaceWith(g.slides.eq(g.getNextIndex()).show())}else{g.panel.append(g.clone_slide(g.getNextIndex()));g.panel.children().eq(0).remove();b.videos&&g.panel.children().eq(0).replaceWith(g.slides.eq(g.getPrevIndex()).show())}switch(b.orientation){case d:g.panel=g.slides_div.children(l).css(k,-1*b.width);break;case m:g.panel=g.slides_div.children(l).css("top",-1*b.height)}};g.isLastItem=function(){return g.currentSlide>=g.count-1};g.isFirstItem=function(){return g.currentSlide<=0};g.updateArrows=function(){var c="show",a="hide";if(g.count>1){if(!b.auto&&!b.circle)if(g.isLastItem()){g.left_arr.removeClass(a).removeClass(c).addClass(c);g.right_arr.removeClass(a).removeClass(c).addClass(a)}else if(g.isFirstItem()){g.left_arr.removeClass(a).removeClass(c).addClass(a);g.right_arr.removeClass(a).removeClass(c).addClass(c)}else{g.left_arr.removeClass(a).removeClass(c).addClass(c);g.right_arr.removeClass(a).removeClass(c).addClass(c)}}else{g.left_arr.addClass(a);g.right_arr.addClass(a)}};g.getAnimateArgs=function(c){var a;switch(b.orientation){case d:if(c==h)a={left:0};else a={left:-2*b.width};break;case m:if(c==h)a={top:0};else a={top:-2*b.height}}return a};g.performAimate=function(a){g.panel.animate(g.getAnimateArgs(a),b.speed,b.easing,function(){if(a==h)g.currentSlide=g.getPrevIndex();else g.currentSlide=g.getNextIndex();g.initItemsPosition(a);g.updateArrows();b.auto==true&&g.go(a)})};g.animation=function(a){g.lastDirection=a;if(b.auto)setTimeout(function(){if(b.pause_on_hover&&g.isMouseHover)g.intervalId=setInterval(function(){if(!g.isMouseHover){clearInterval(g.intervalId);g.performAimate(a)}},250);else g.performAimate(a)},b.pause);else g.performAimate(a)};g.go=function(a){if(a==h)(!g.isFirstItem()||b.auto||b.circle)&&g.animation(h);else(!g.isLastItem()||b.auto||b.circle)&&g.animation(e)};g.left_arr.click(function(){g.go(h);return c});g.right_arr.click(function(){g.go(e);return c});g.div.mouseenter(function(){if(b.pause_on_hover)g.isMouseHover=true});g.div.mouseleave(function(){if(b.pause_on_hover)g.isMouseHover=c});g.updateArrows();g.initItemsPosition("");b.auto&&g.go(b.direction)};return this.each(function(){var d=this;if(b.xml!="")a.ajax({url:b.xml,type:"GET",cache:c,success:function(c){var b=a("slide",c);a(d).html("<a title='' href='#' class='prev'></a><div class='slides'></div><a title='' href='#' class='next'></a>");b.each(function(){a(d).find(f).append(a(this).text())});g.init(d)},dataType:"xml"});else g.init(d)})}})(jQuery);

var milk_ActiveCarousselTwitter = function () {
	//twitter carroussel
	$("#twitter-test,#actu-twitter-feed").jContent({orientation: 'vertical',
		width :560,
		height:130,
        // easing: 'easeInOutBack',
        speed: 1000,
        auto: true,
        direction: 'next', //or 'prev'
        pause: 3500,
        pause_on_hover: false
     });
     $(".twitter-link").unbind("click");
};
});
</script>
<script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=261698(font-family=Garden+Pro)&sid=261700(font-family=Garden+Slab)&key=61dcotuE7g',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<div id="pre-header" class="section">
		<?php get_template_part( 'pre-header-search' ); ?>
		<div class="container">
			<a id="search-toggle" class="icon-search toggle"><span class="visuallyhidden">Search</span></a>
			<a id="nav-toggle" class="icon-menu toggle"> <!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->
				<span class="visuallyhidden"><?php _e( 'Menu', '_mbbasetheme' ); ?></span>
			</a>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a>
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'primary', 
						'container' => 'nav', 
						'container_class' => 'nav-collapse main-navigation' // Required by responsive-nav.js
					) 
				); 
			?>
			<div id="nav-bar-search">

				<?php get_search_form(); ?></div>

			<?php // get_template_part( 'content', 'social-links' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<header id="masthead" class="site-header section" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
					</a>
				</h1>
			<!-- 	<h2 class="site-description"><?php // bloginfo( 'description' ); ?></h2> -->
			</div>

		
		</div><!-- .container -->
	</header><!-- #masthead -->
<div id="content">	
