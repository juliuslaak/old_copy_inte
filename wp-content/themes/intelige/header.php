<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * 
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="et" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" type="icon" href="<?php echo get_template_directory_uri(); ?>/img/i.ico">

        <!-- Apple Touch Icons -->
        <!-- https://github.com/audreyr/favicon-cheat-sheet -->
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-120.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72.png">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-57.png">

        <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-152.png" />
        <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
        <link href='http://fonts.googleapis.com/css?family=Exo+2:900|Vollkorn:700|Open+Sans+Condensed:700|Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/intelige.min.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div id="super" class="block-group">
            

            <!--[if lt IE 8]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <!-- HEADER -->

            <header class="block">
                <div class="above-nav font-open">
                    <div class="h-top-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <h1 class="intelige-logo">Intelige</h1>
                        </a>
                    </div>
                    <div class="current-date font-second"><?php date_default_timezone_set('Europe/Tallinn'); echo date('j. F Y');//the_time('j. F Y'); ?></div>
                </div>
                <nav id="nav">
                	<?php $args = array( 'theme_location' => 'header-menu', 'container' => false, 'menu_id' => false, 'menu_class' => 'h-nav-ul font-open', 'items_wrap' => '<ul class="%2$s">%3$s</ul>' ); ?>
                	<?php wp_nav_menu( $args ); ?>
                    <div class="h-nav-search">
                        <?php get_search_form(); ?>
                    </div>
                </nav>
            </header>

            <!-- MAIN SITE -->
            
            <div id="main" class="block-group">