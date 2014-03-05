<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <link href="http://septillioncn-wordpress.stor.sinaapp.com/meta/Apple-icon.png" rel="apple-touch-icon-precomposed">
    <link rel="shortcut icon" href="http://septillioncn-wordpress.stor.sinaapp.com/meta/logo.ico" />
    
    <!-- Optimized for Windows 8.1 -->
     <meta name="application-name" content="Septillion's Blog"; />
     <meta name="msapplication-tooltip" content="Septillions of ideas" />
     <meta name="msapplication-starturl" content="http://www.septillion.cc" />
     <meta name="msapplication-window" content="width=1280;height=768" />
     <meta name="msapplication-navbutton-color" content="#24890d" />
     <meta name="msapplication-TileColor" content="#000000" />
     <meta name="msapplication-notification" content="frequency=30;polling-uri=http://septillioncn-wordpress.stor.sinaapp.com/meta/cn.xml; cycle=0"/>
     <meta name="msapplication-square70x70logo" content="http://septillioncn-wordpress.stor.sinaapp.com/meta/Small.png" />
     <meta name="msapplication-square150x150logo" content="http://septillioncn-wordpress.stor.sinaapp.com/meta/Mid.png" />
     <meta name="msapplication-wide310x150logo" content="http://septillioncn-wordpress.stor.sinaapp.com/meta/Wide.png" />
     <meta name="msapplication-square310x310logo" content="http://septillioncn-wordpress.stor.sinaapp.com/meta/Large.png" />
     
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
