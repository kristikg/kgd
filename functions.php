<?php
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  };

// Add custom fields to Testimonial post-types by Jetpack.
add_post_type_support( 'jetpack-testimonial', 'custom-fields' );

