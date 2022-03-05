<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aurident_Theme
 */

 // Exit if accessed directly.
 defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link  rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    	<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php do_action( 'wp_body_open' ); ?>
        <?php
            $url = get_site_url();
        ?>
        <header class="siteHeader">
            <div class="container">
                <div class="siteHeader-block">
                    <div class="siteHeader-block-left">
                        <!-- NAVBAR BRAND -->
                        <div class="siteHeader-block-left-navbarBrand">
                            <a href="<?php echo esc_url(home_url('/'));?>" rel="home">
                                <?php echo file_get_contents($url.'/wp-content/themes/aurident-theme-child/svg/logo.svg');?>
                            </a>
                        </div>
                    </div>
                    <div class="siteHeader-block-center">
                        <!-- MENU -->
                        <div class="siteHeader-block-center-navbarNavigation">
                            <?php
        						wp_nav_menu(
        							array(
        								'theme_location'        => 'menu-glowne',
        								'container'             => 'ul',
        								'menu_class'            => 'navbar-nav',
        								'menu_id'               => 'main-menu',
        								'depth'                 => 2,
        							)
        						);
    						?>
                        </div>
                        <!-- MOBILE MENU -->
                        <div class="siteHeader-block-center-navbarNavigationMobile">
                            <?php
        						wp_nav_menu(
        							array(
        								'theme_location'        => 'menu-glowne',
        								'container'             => 'ul',
        								'menu_class'            => 'navbar-nav',
        								'menu_id'               => 'main-menu-mobile',
        								'depth'                 => 2,
        							)
        						);
    						?>
                        </div>
                    </div>
                    <div class="siteHeader-block-right">
                        <!-- MOBILE CONTACT -->
                        <div class="siteHeader-block-right-mobileContact">
                            <div class="siteHeader-block-right-mobileContact-text">
                                <?php the_field('textAbovePhone','options');?>
                            </div>
                            <div class="siteHeader-block-right-mobileContact-button">
                                <a href="tel:<?php the_field('topPhoneNumber','options');?>" class="buttonTopContactPhone">
                                    <span class="phoneIconTopContact">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513.64 513.64" xml:space="preserve">
                                            <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z"></path>
                                        </svg>
                                    </span>
                                    <?php the_field('topPhoneNumber', 'options');?>
                                </a>
                            </div>
                        </div>
                        <div class="siteHeader-block-right-mobileContactSmart">
                            <a href="tel:<?php the_field('topPhoneNumber','options');?>" class="buttonTopContactPhoneMobile">
                                <span class="phoneIconTopContactMobile">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513.64 513.64" xml:space="preserve">
                                        <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <!-- HAMBURGER NAVIGATION -->
                        <div class="hamburger">
                            <div class="menu-bar menu-bar-top"></div>
                            <div class="menu-bar menu-bar-middle"></div>
                            <div class="menu-bar menu-bar-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
