<?php
    // JQUERY
    wp_enqueue_script( 'jquery');

    add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
    function wps_deregister_styles() {
        wp_deregister_style( 'contact-form-7' );
    }

    //disable emojis
    function disable_emoji_feature() {

    	// Prevent Emoji from loading on the front-end
    	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    	remove_action( 'wp_print_styles', 'print_emoji_styles' );

    	// Remove from admin area also
    	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    	remove_action( 'admin_print_styles', 'print_emoji_styles' );

    	// Remove from RSS feeds also
    	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
    	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

    	// Remove from Embeds
    	remove_filter( 'embed_head', 'print_emoji_detection_script' );

    	// Remove from emails
    	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

    	// Disable from TinyMCE editor. Currently disabled in block editor by default
    	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

    	// prevent character conversion


    	add_filter( 'option_use_smilies', '__return_false' );

    }
    //  ACF OPTIONS
    if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'USTAWIENIA',
            'menu_title' => 'Ustawienia',
            'menu_slug' => 'general-settings',
            'redirect' => false
        ));
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

    function enqueue_parent_styles() {
       wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }
    function understrap_remove_scripts() {
        wp_dequeue_style( 'aurident-theme-styles' );
        wp_deregister_style( 'aurident-theme-styles' );

        wp_dequeue_script( 'aurident-theme-scripts' );
        wp_deregister_script( 'aurident-theme-scripts' );
        wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
        // Removes the parent themes stylesheet and scripts from inc/enqueue.php
    }
    add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

    //  MENU
    register_nav_menus(
    	array(
    		'menu-glowne' => esc_html__( 'Primary', 'aurident-theme-child' ),
    	)
    );
    //remove wpblock styles

    function remove_wp_block_library_css(){

      if(!is_user_logged_in()) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
      }

    }
    add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

/** remove WP version number */

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
  if (strpos($src, 'ver=')) {
      $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);



/**Eliminate Render blocking js */
function defer_parsing_of_js( $url ) {
if ( is_user_logged_in() ) return $url; //don't break WP Admin
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.min.js' ) ) return $url;
if ( strpos( $url, 'i18n.min.js' ) ) return $url;
if ( strpos( $url, 'password-strength-meter.min.js' ) ) return $url;
if ( strpos( $url, 'address-i18n.min.js' ) ) return $url;
if ( strpos( $url, 'hooks.min.js' ) ) return $url;
return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
?>
