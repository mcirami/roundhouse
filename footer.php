<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>
	<div class="footer_copy">
		<p><a href="#">Google Map</a> <span class="line">|</span> <span>2600 Camino Ramon &middot; San Ramon, CA</span></p>
	</div>
	<footer id="global_footer" class="site_footer">
		<div class="container">
			<nav role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'main_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
			</nav>
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo bloginfo('template_url'); ?>/images/footer-logo.png" />
				</a>
			</div>
			<div class="social">
				<ul>
					<li><a class="facebook" href="www.facebook.com/roundhouseSR"><img src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" /></a></li>
					<li><a class="twitter" href="twitter.com/RoundhouseSR"><img src="<?php echo bloginfo('template_url'); ?>/images/twitter.png" /></a></li>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>