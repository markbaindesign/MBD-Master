<?php /* Portfolio template */ get_header(); ?>
	<div class="hero section">
		<div class="container">
			<div class="hero-image">
			</div>
			<div class="hero-text">
				<h1>Here are some books I wrote.</h1>
				<p>Morbi egestas fringilla nibh. Nulla augue urna, egestas sed scelerisque sit amet, pharetra quis libero. Ut luctus bibendum nulla ac bibendum.</p> 
			</div><!-- .hero-text -->
		</div><!-- .container -->
	</div><!-- .hero -->

	
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'portfolio' ); ?>
			<?php endwhile; // end of the loop. ?>
	<?php wp_pagenavi(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>