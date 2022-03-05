<?php
    // JQUERY
    wp_enqueue_script( 'jquery');
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

        // Removes the parent themes stylesheet and scripts from inc/enqueue.php
    }
    add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

    //  MENU
    register_nav_menus(
    	array(
    		'menu-glowne' => esc_html__( 'Primary', 'aurident-theme-child' ),
    	)
    );
?>
