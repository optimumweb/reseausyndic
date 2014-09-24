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

wpbp_register_sidebars( array( 'Front Page Hero', 'Front Page CTA' ) );

add_action('wpbp_header_after', 'rs_insert_hero');
add_action('wpbp_header_after', 'rs_insert_front_page_cta');
add_action('wpbp_header_after', 'rs_insert_breadcrumbs');

function rs_insert_hero() { get_template_part('hero'); }
function rs_insert_front_page_cta() { get_template_part('cta', 'front-page'); }
function rs_insert_breadcrumbs() { get_template_part('breadcrumbs'); }