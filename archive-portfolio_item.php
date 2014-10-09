<?php /* Index */ get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
			<div class="section">
				<div class="container">
<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Books', '_mbbasetheme' ); ?></h1>
	</header>

				</div><!-- .container -->
			</div><!-- .section -->

<?php if ( have_posts() ) : ?>
	<div class="section">
		<div class="container grid-wrapper masonrycontainer">
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'portfolio_item' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .grid-wrapper -->
	</div><!-- .section -->
	<?php wp_pagenavi(); ?>
<?php endif; ?>	 
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
