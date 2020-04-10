<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

<script type="text/javascript" src="http://fast.fonts.net/jsapi/a6721863-b562-4904-8551-316342fce84a.js"></script>
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

	<header id="global_header">
		<div class="container">
			<div id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" />
				</a>
			</div>
		</div> <!-- container -->
	</header>
	
	<header id="fixed_header" <?php if ( is_user_logged_in() ) { echo 'class="js_new_fixed_header"'; } ?>>
		<div class="container">
			<div id="fixed_logo">
				<a href="<?php echo esc_url( home_url( '/' )); ?>">
					<img src="<?php echo bloginfo('template_url'); ?>/images/small_logo.png" />
				</a>
			</div>
			<div class="mobile_btn">
				<i class="fa fa-bars"></i>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'main_menu' ) ); ?>
			</nav>
		</div>
	</header>
	
	<div class="nav_container">
		<div class="container">
			<div class="mobile_logo">
				<img src="<?php echo bloginfo('template_url'); ?>/images/small_logo.png" />
			</div>
			<nav role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'main_menu' ) ); ?>
			</nav>
			<div class="mobile_btn">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</div>
	
	<div class="slide_nav"></div>
	