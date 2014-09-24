<?php /* Content - Home */ ?>

<div class="media-object">

<aside id="sticky-sidebar">

	<div class="image-wrapper">
		<a href="<?php the_permalink(); ?>" >
			<?php 
				if ( has_post_thumbnail() ) { 
					the_post_thumbnail(  ); 
				} 
			?>
		</a>
	</div><!-- .image-wrapper -->

	<!-- Purchase options -->
	<div id="purchase-options-single-book">
		<?php	get_template_part( 'content', 'purchase-options' ); ?>
	</div><!-- #purchase-options-single-book -->

</aside>

<article id="post-<?php the_ID(); ?>" <?php post_class( '.main' ); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mbdmaster_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_content(); ?>
	</div><!-- .entry-summary -->

<!-- Testimonials -->
<div id="single-book-testimonials">
	<h3>What people are saying about <span><?php the_title(); ?></span></h3>

<section id="slider">
      <div class="flexslider">
        <ul class="slides">
<?php 

query_posts(array('post_type' => 'team_member','orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
<?php 
	$thumb_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true); 
?>
			<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">
				<div class="media_block-text">
					<blockquote>
						<?php the_excerpt(); ?>
					</blockquote>
				</div><!-- .media_block-text -->
				<div class="media_block-image">
					<?php the_post_thumbnail(); ?>
					<span class="meta"><cite><?php the_title(); ?></cite></span>
				</div><!-- .media_block-image -->
			 </li><!-- slide media_block -->

        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
</section>

</article><!-- #post-## -->

</div><!-- .media-object -->


</article><!-- #post-## -->
