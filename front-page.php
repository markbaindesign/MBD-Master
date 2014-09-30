<?php /* Front Page */ get_header(); ?>

		<div class="hero section">
			<div class="container">
				<div id="lead">Now available in all leading book shops!</div>
				<div class="hero-image">
					<img srcset="<?php echo get_bloginfo('template_url') ?>/assets/images/ck6.jpg" alt="" title="'">
				</div>
				<div class="hero-text">
					<h1>Nullam vehicula mi quis tristique venenatis.</h1>
					<p>Morbi egestas fringilla nibh. Nulla augue urna, egestas sed scelerisque sit amet, pharetra quis libero. Ut luctus bibendum nulla ac bibendum.</p> 

				
					<div class="hero-cta">
						<div class="wow fadeInLeft"><a href="" class="cta button cta-primary">Do this <i aria-hidden="true" class="icon-arrow-right"></i></a></div>
						<div class="wow fadeInRight"><a href="" class="cta cta-secondary">or, alternatively, do this<i aria-hidden="true" ></i></a></div>
					</div>
				</div><!-- .hero-text -->
			</div><!-- .container -->
	</div><!-- .hero -->

	<div class="section">
		<div class="container">	
			<?php	get_template_part( 'module', 'slider' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div class="section">
		<div class="container">	
			<h2>Etiam commodo malesuada ante</h2>
			<?php	get_template_part( 'content', 'table' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div id="the-books" class="section">
		<div class="container">	
			<h2>Morbi volutpat, urna eu fermentum rutrum</h2>
			<?php	get_template_part( 'content', 'bookshelf' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div id="tweets" class="section">
		<div class="container">
			<div id="twitter-avatar">
					<img srcset="<?php echo get_bloginfo('template_url') ?>/assets/images/face.jpg" alt="" title="">				
			</div><!-- #twitter-avatar -->
			
			<div id="tweet-wrapper">
				<div id="twitter-feed" class="twitter-feed">
					<div id="twitter-test">
						<div class="slides">
						</div>
					</div>
				</div>
				
				<div id="mobile-twitter-feed" class="twitter-feed">
					<div id="twitter-test-2"></div>
				</div>

			</div><!-- #tweet-wrapper -->

		</div><!-- .container -->
	</div><!-- .section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
