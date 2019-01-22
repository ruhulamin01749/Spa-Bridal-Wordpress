<?php

function theme_custom_post(){
	register_post_type('slider', array(
		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Sliders',
			'all_items'=>'All Sliders',
			'add_new'=>'Add New Slide',
			'add_new_item'=>'Add New Slider item' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','thumbnail','revisions','custom-fields', 'page-attributes'
		)
		));
	register_post_type('team', array(
		'labels'=>array(
			'name'=>'Team',
			'menu_name'=>'Team menu',
			'all_items'=>'All Team member',
			'add_new'=>'Add New Member',
			'add_new_item'=>'Add New team member' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions','thumbnail', 'page-attributes'
		)
		));
	register_post_type('services', array(
		'labels'=>array(
			'name'=>'Service',
			'menu_name'=>'Services',
			'all_items'=>'All Services',
			'add_new'=>'Add New Service',
			'add_new_item'=>'Add New Service item' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes','editor'
		)
		));
}

add_action('init', 'theme_custom_post');