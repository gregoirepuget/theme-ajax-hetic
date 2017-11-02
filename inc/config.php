<?php

function my_style() {

    wp_enqueue_style( 'foundation_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css' );
    wp_enqueue_style( 'style-font', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700' );
    $file = 'app.css';
    wp_enqueue_style( 'style-main', CSS_URL . '/' . $file );

}
add_action( 'wp_enqueue_scripts',  'my_style' );


function my_script() {

    $cdn = array(
        'foundation' => 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js',
    );

    // from here, do not touch
    // -------------------------------------------------
    $dependencies = array();
    foreach ($cdn as $name => $url) {
        wp_enqueue_script( $name, $url, array( 'jquery' ), null, true );
        $dependencies[] = $name;
    }


    // bundle
    $file = 'bundle.js';
    wp_enqueue_script( 'main', JS_URL . '/' . $file, $dependencies, null, true );
    wp_localize_script( 'main', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'my_script' );

register_nav_menus( array(
    'header' => __( 'Header main menu','firstPixel' ),
    'footer' => __('Footer menu','firstPixel')
) );


function firstPixel_theme_support() {
    /**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'firstPixel', THEME_PATH . '/languages' );

    /**
     *  Set up the WordPress core custom background feature.
     */
    add_theme_support( 'custom-background', apply_filters( 'test_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    /**
	 * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /**
	 * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

	 /**
	  * Enable support for woocommerce on posts and pages.
      */
    add_theme_support( 'wooocommerce' );

    /**
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'firstPixel_theme_support' );
