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
			<p id="copyright">
				<a href="<?php echo bloginfo( 'url' ); ?>">&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></a>
			</p> 
			<p id="tagline">
				<?php echo get_bloginfo( 'description' ); ?>
			</p> 
		</div><!-- .site-info -->

		<ul id="social" class="clearfix footer-block">
			<li><a href="https://www.facebook.com"><i aria-hidden="true" class="icon-facebook icon-left"></i><span class="">Facebook</span></a></li> 
			<li><a href="https://twitter.com"><i aria-hidden="true" class="icon-twitter icon-left"></i><span class="">Twitter</span></a></li> 
			<li><a href="<?php bloginfo('rss2_url'); ?>"><i aria-hidden="true" class="icon-feed icon-left"></i><span class="">RSS</span></a></li> 
		</ul><!-- #social -->

		<div id="design">
			Designed <span class="amp">&amp;</span> coded by <a href="http://markbaindesign.com" title="Visit the website of Mark Bain Design">Mark Bain Design</a>
		</div><!-- #design -->

		<div id="back-to-top" >
			<a href="#header" title="Go back to the top" class=""><span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow">Back to top</span></a>
		</div><!-- #back-to-top -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
