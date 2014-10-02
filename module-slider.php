<h3>Nice stuff people are saying</h3>

<section id="slider" class="content-insert">
      <div class="flexslider">
        <ul class="slides">
<?php 
	
$my_query = new WP_Query( array (
	'post_type' => 'team_member',
	'orderby' => 'rand',
) );

p2p_type( 'nice_stuff' )->each_connected( $my_query, array(), 'actors' );

if( $my_query->have_posts() ) : while( $my_query->have_posts()) : $my_query->the_post();?>
<?php 
	
	// Vars
	$thumb_id = get_post_thumbnail_id();
	$thumb_id_2 = get_the_post_thumbnail( $post->ID,'thumbnail', true );
	$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
	$my_excerpt = get_the_excerpt();
	$reviewer_name = get_post_meta($post->ID, 'reviewer_name', true);
	$reviewer_link = get_post_meta($post->ID, 'reviewer_link', true);
	$reviewer_description = get_post_meta($post->ID, 'reviewer_description', true);

?>
			<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">
				<?php 
	
	foreach ( $post->actors as $post ) : setup_postdata( $post );
	
?>

<div class="media_block-image">
					<a href="<?php the_permalink(); ?>" title="">
						<?php the_post_thumbnail(); ?>
						<span class="meta"><cite><?php the_title(); ?></cite></span>
					</a>


					
				</div><!-- .media_block-image -->

<?php endforeach; ?>

				<div class="media_block-text">
					<blockquote>
						<p><?php echo $my_excerpt; ?></p>
					</blockquote>
				</div><!-- .media_block-text -->
				<div class="media_block-image">
					<?php echo $thumb_id_2; ?>
					<span class="meta"><cite><?php echo $reviewer_name; ?></cite> </span>
					<div><?php echo $reviewer_description; ?></div>


					
				</div><!-- .media_block-image -->
			 </li><!-- slide media_block -->
					<?php wp_reset_postdata(); ?>			<?php endwhile; ?>

	<?php endif; ?>
        </ul>
    </div>
</section>
