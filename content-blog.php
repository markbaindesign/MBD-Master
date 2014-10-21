<?php /* The blog archive template */ ?>
<div class="section blog-post">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<aside>				
				<div class="image-wrapper">
					<a href="<?php the_permalink(); ?>" >
						<?php if ( has_post_thumbnail() ) { 
								the_post_thumbnail( 'book-cover' ); 
							} 
						?>
					</a>
				</div><!-- .image-wrapper -->
			</aside>	
	
			<div class="entry-content">
				<header class="entry-header">
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
				</header><!-- .entry-header -->
				<div class="entry-meta meta">
					<?php	mbdmaster_posted_on(); ?>
				</div><!-- .entry-meta -->			
				<?php the_excerpt(); ?>
				<span class="read-more"><a href="<?php the_permalink(); ?>" class="button cta">Read more</a></span>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div><!-- .container -->
</div><!-- .section .blog-post -->
