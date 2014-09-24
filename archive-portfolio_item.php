<?php get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="section">
<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php	_e( 'Books', '_mbbasetheme' );?>
				</h1>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
	
					get_template_part( 'content', 'books' );
				?>

			<?php endwhile; ?>

			<?php _mbbasetheme_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
</div></div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
