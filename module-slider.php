<h3>What people are saying about...</h3>
<div class="readmore">
	<a href="" title="See more of these">See more</a>
</div>
<h5>You had me at Hello</h5>
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
