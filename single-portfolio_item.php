<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="section">
<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php // mbdmaster_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
?>
</div>
</div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<!-- Testimonials -->
	<div id="testimonials-slider-single-book" class="section">
			<div class="container">	
				<?php	get_template_part( 'module', 'slider' ); ?>
			</div><!-- .container -->
	</div><!-- #testimonials-slider-single-book .section -->

	<!-- Purchase options -->
	<div id="purchase-options-single-book" class="section">
			<div class="container">	
				<?php	get_template_part( 'content', 'purchase-options' ); ?>
			</div><!-- .container -->
	</div><!-- #testimonials-slider-single-book .section -->

	<!-- Related items -->
	<div id="related-books-single-book" class="section">
		<div class="container">	
			<?php	get_template_part( 'content', 'related-posts' ); ?>
		</div><!-- .container -->
	</div><!-- #related-books-single-book .section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
