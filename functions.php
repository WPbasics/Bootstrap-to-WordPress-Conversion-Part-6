<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Theme Setup

function wpbasics_theme_setup(){
    // Nav Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    // Add Featured Image Support
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'wpbasics_theme_setup');

//Excerpt Length Control.
function set_excerpt_length() {
    return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Register Widget Locations
function wpbasics_init_widgets($id){
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'    => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}

add_action('widgets_init','wpbasics_init_widgets' );





















