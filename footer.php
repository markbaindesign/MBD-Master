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
			<p class="copyright">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
		</div><!-- .site-info -->
	<div id="back-to-top" >
		
		<a href="#header" title="Go back to the top" class="">
			<span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow">Back to top</span>
		</a>

			
		</div><!-- #back-to-top -->	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
