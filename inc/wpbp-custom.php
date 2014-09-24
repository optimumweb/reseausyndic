<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
	    // libs
	    wpbp_enqueue_lib(array('modernizr', 'jquery', 'wpbp'));
		// scripts
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery'));
		// styles
        wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800');
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');

wpbp_register_sidebars( array( 'Front Page Hero' ) );