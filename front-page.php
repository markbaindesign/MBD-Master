<?php /* Front Page */ get_header(); ?>

		<div class="hero section">
			<div class="container">
				<!-- <div id="lead">Now available in all leading book shops!</div> -->
				<div class="hero-image">
					<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/mhairi-hero-shadow.png" alt="" title="'">
				</div>
				<div class="hero-text">
					<h1>Nullam vehicula mi quis tristique venenatis.</h1>
					<p>Morbi egestas fringilla nibh. Nulla augue urna, egestas sed scelerisque sit amet, pharetra quis libero. Ut luctus bibendum nulla ac bibendum.</p> 

				
					<div class="hero-cta">
						<div class="wow fadeInLeft"><a href="" class="cta button cta-primary">Do this <i aria-hidden="true" class="icon-arrow-right"></i></a></div>
					</div>
				</div><!-- .hero-text -->
			</div><!-- .container -->
	</div><!-- .hero -->

	<div id="the-books" class="section">
		<div class="container">	
			<h2>Morbi volutpat, urna eu fermentum rutrum</h2>
			<?php	get_template_part( 'content', 'bookshelf' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div id="quotes" class="section">
		<div class="container">	
			<?php	get_template_part( 'module', 'slider' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div id="events" class="section">
		<div class="container">	
			<h2>Etiam commodo malesuada ante</h2>
			<?php	get_template_part( 'content', 'table' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div id="tweets" class="section">
		<div class="container">
			<div id="twitter-avatar">
					<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/mhairi-hero-cropped.png" alt="" title="">				
			</div><!-- #twitter-avatar -->
			
			<div id="tweet-wrapper">
				<div id="twitter-feed" class="twitter-feed">
						<div class="slides">
					</div>
				</div>
			</div><!-- #tweet-wrapper -->

		</div><!-- .container -->
	</div><!-- .section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
