<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="site-info">
			<ul id="credits">
				<li id="copyright"><a href="<?php echo bloginfo( 'url' ); ?>">&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></a></li> 
				<li id="tagline"><?php echo get_bloginfo( 'description' ); ?></li> 

				<li id="design">Designed <span class="amp">&amp;</span> coded by <a href="http://markbaindesign.com" title="Visit the website of Mark Bain Design">Mark Bain Design</a></li>
			</ul>
		</div><!-- .site-info -->

		<div id="back-to-top" >
			<a href="#header" title="Go back to the top" class=""><span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow">Back to top</span></a>
		</div><!-- #back-to-top -->	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
