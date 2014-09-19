
	</div><!-- #content -->
	
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="footer-widgets" class="widget-area section">
			
				
				<div class="masonrycontainer container">
					<div class="grid-sizer"></div>
					<div class="gutter-sizer"></div>				
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				
				
				</div>
				
			
		</div><!-- .widget-container -->
	<?php endif; ?>



	<!-- Newsletter signup section -->
	<div id="signup" class="section">
		<div class="container">
			<?php get_template_part( 'content', 'signup-form' ); ?>
		</div><!-- .container -->
	</div><!-- #signup .section -->

	<footer id="colophon" class="section site-footer" role="contentinfo">
		<div class="container">


		<div class="social">
			<ul class="social-media-links">
				<li><a href="https://twitter.com/mbain"><i aria-hidden="true" class="icon-twitter icon-left"></i><span class="visuallyhidden">Twitter</span></a></li> 
				<li><a href="https://www.facebook.com/markbaindesign"><i aria-hidden="true" class="icon-facebook icon-left"></i><span class="visuallyhidden">Facebook</span></a></li> 
				<!-- <li><a href="<?php bloginfo('rss2_url'); ?>"><i aria-hidden="true" class="icon-feed icon-left"></i><span class="visuallyhidden">RSS</span></a></li>-->
			</ul>
		</div><!-- .social -->

		<div id="back-to-top" >
			<a href="#header" title="Go back to the top" class=""><span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow">Back to top</span></a>
		</div><!-- #back-to-top -->


		<div class="site-info">
			<div id="copyright">&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></div> 
		<!--	<p id="tagline">
				<?php echo get_bloginfo( 'description' ); ?>
			</p> --> 
		<div id="design"><!-- Designed <span class="amp">&amp;</span> coded -->Made by <a href="http://markbaindesign.com" title="Visit the website of Mark Bain Design">Mark Bain Design</a>
		</div><!-- #design -->

		</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
