<?php /* Blog template */ get_header(); ?>

		<div class="hero section">
			<div class="container">
				<div class="hero-image">
				
				</div>
				<div class="hero-text">
					<h1>This bit is my blog.</h1>
					<p>Morbi egestas fringilla nibh. Nulla augue urna, egestas sed scelerisque sit amet, pharetra quis libero. Ut luctus bibendum nulla ac bibendum.</p> 

				
					<div class="hero-cta">
						<div class="wow fadeInLeft"><a href="" class="cta button cta-primary">Do this <i aria-hidden="true" class="icon-arrow-right"></i></a></div>
					</div>
				</div><!-- .hero-text -->
			</div><!-- .container -->
	</div><!-- .hero -->

	
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; // end of the loop. ?>
	<?php wp_pagenavi(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
