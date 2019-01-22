<?php

function spa_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slide-img', 1500, 500, 'true');
	add_image_size('team-img', 200, 200, 'true');
	add_image_size('service-img', 299, 350, 'true');
	register_nav_menus(array(
		'main_menu'=>'Main Menu',
		'mneu2'=>'Sub Menu',
		));
}
add_action('after_setup_theme','spa_theme_support');

include_once('inc/scripts_and_style_function.php');
include_once('inc/register_custom_post.php');
include_once('inc/cmb2-custom-field.php');
include_once('inc/plugin-activation.php');
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/theme-option.php');