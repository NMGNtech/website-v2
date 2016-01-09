<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nijmegenphp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.css' rel='stylesheet' />

</head>

<body <?php body_class(); ?>>
<div id="page" class="site container-fluid">

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="NijmegenPHP" height="30"/>
                    </a>
                </div>
                <div>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
                    <p class="navbar-text navbar-right">
<!--                        <a class="skip-link screen-reader-text navbar-link" href="#content">--><?php //esc_html_e( 'Skip to content', 'nijmegenphp' ); ?><!--</a>-->
                    </p>
                </div>

            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
