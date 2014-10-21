<?php
/**
 * @package _mbbasetheme
 */
?>
<div class="section">
<div class="container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	


	<aside>				
		<div class="image-wrapper">
			<?php 
				if ( has_post_thumbnail() ) { 
					the_post_thumbnail( 'book-cover' ); 
				} 
			?>
		</div><!-- .image-wrapper -->
		<div class="entry-meta meta">
			<?php
				if ( is_singular( 'portfolio_item' ) ) {
					get_template_part( 'content', 'purchase-options' );
				} else {

							mbdmaster_posted_on();		
							mbdmaster_post_meta();
							edit_post_link( __( 'Edit', '_mbbasetheme' ), '<span class="edit-link">', '</span>' ); }
						
			?>
		</div><!-- .entry-meta -->	
	</aside>	
	
	<div class="entry-content">
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>
		<?php
			//if ( is_singular( 'portfolio_item' ) ) {
				// get_template_part( 'content', 'testimonials' );
			// }
		?>
	</div><!-- .entry-content -->


					
</article><!-- #post-## -->
</div>
</div>
