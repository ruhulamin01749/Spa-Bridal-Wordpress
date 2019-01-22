<?php
function spa_css_js(){

	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/plugins/bootstrap-3.3.1/css/bootstrap.min.css', null , '3.3.1', 'all' );
	wp_enqueue_style('Stylesheet', get_template_directory_uri().'/assets/css/style.css', null , null, 'all' );
	wp_enqueue_style('Spa main style', get_stylesheet_uri());

	wp_enqueue_script('MainJquery', get_template_directory_uri().'/assets/js/jquery-1.11.2.min.js', null, null);
	wp_enqueue_script('Mordanaizer', get_template_directory_uri().'/assets/js/modernizr.js', 'MainJquery', null);
	wp_enqueue_script('Bootstarp', get_template_directory_uri().'/assets/plugins/bootstrap-3.3.1/js/bootstrap.min.js', 'MainJquery', null, true);
	wp_enqueue_script('Google Map', 'http://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false', 'MainJquery', null, true);
	wp_enqueue_script('smooth scrolling', get_template_directory_uri().'/assets/plugins/smooth-scroll/smooth-scroll.js', 'MainJquery', null, ture);
	wp_enqueue_script('isotope', get_template_directory_uri().'/assets/plugins/isotope/jquery.isotope.min.js', 'MainJqueryMainJquery', null, true);
	wp_enqueue_script('WoW', get_template_directory_uri().'/assets/plugins/wow/wow.min.js', 'MainJquery', null, true);
	wp_enqueue_script('hcaptions', get_template_directory_uri().'/assets/plugins/hcaptions/jquery.hcaptions.js', 'MainJquery', null, true);
	wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/assets/plugins/prettyPhoto/jquery.prettyPhoto.js', 'MainJquery', null, true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.js', 'MainJquery', null, true);
	wp_enqueue_script('animateNumber1', get_template_directory_uri().'/assets/plugins/animateNumber/jquery.appear.js', 'MainJquery', null, true);
	wp_enqueue_script('animateNumber2', get_template_directory_uri().'/assets/plugins/animateNumber/jquery.animateNumber.min.js', 'MainJquery', null, true);
	wp_enqueue_script('Form Validation', get_template_directory_uri().'/assets/plugins/jquery-validate/jquery.validate.min.js', 'MainJquery', null, true);
	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/app.js', 'MainJquery', null, true);

}
add_action('wp_enqueue_scripts','spa_css_js');