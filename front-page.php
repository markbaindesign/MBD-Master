<?php /* Front Page */ get_header(); ?>

		<div class="hero section">
			<div class="container">
				<div class="hero-image">
					<img srcset="<?php echo get_bloginfo('template_url') ?>/assets/images/hero.jpg" alt="" title="'Holding Out for a Hero' is a song recorded by Welsh singer Bonnie Tyler for the soundtrack to the 1984 film Footloose, and later appeared on her album Secret Dreams and Forbidden Fire (1986). It was written by Jim Steinman and Dean Pitchford. Initially, the song only just reached the Top 100 in the UK Singles Chart, but made it to number 2 the following year, and re-entered the charts again at number 69 in 1991. The song reached No. 1 on the Irish Singles Chart on 28 September 1985.">
				</div>
				<div class="hero-text">
					<h1 class="wow fadeInLeft">I need a hero </h1>
					<h3 class="wow fadeInRight">I'm holding out for a hero</h3> 
					<p>'Til the end of the night. He's gotta be:</p>
					<ul>
						<li>strong</li>
						<li>fast</li>
						<li>fresh from the fight</li>
					</ul>
					<div class="hero-cta">
						<div class="wow fadeInLeft"><a href="" class="cta button cta-primary">Do This!<i aria-hidden="true" class="icon-arrow-right"></i></a></div>
						<div class="wow fadeInRight"><a href="" class="cta button cta-secondary">or, alternatively, do this<i aria-hidden="true" class="icon-arrow-right"></i></a></div>
					</div>
				</div><!-- .hero-text -->
			</div><!-- .container -->
	</div><!-- .hero -->

	<div class="section">
		<div class="container">	
			<?php	get_template_part( 'module', 'slider' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

	<div class="section">
		<div class="container">	
			<h2>Etiam commodo malesuada ante</h2>
			<?php	get_template_part( 'content', 'table' ); ?>
		</div><!-- .container -->
	</div><!-- .section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
