<?php

if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}
add_action('cmb2_admin_init','theme_cmb2');

function theme_cmb2(){

	$prefix = '_spa_';

		//Text field for team member

	$team_member = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'Team Nember Metabox', 'spa' ),
		'object_types'  => array('team'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Expert In', 'spa' ),
		'desc'       => __( 'Write Here The Expertness Of Member', 'spa' ),
		'id'         => $prefix.'expert_in',
		'type'       => 'text',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Details About Member', 'spa' ),
		'desc'       => __( 'Write Here Details About Member', 'spa' ),
		'id'         => $prefix.'member_detail',
		'type'       => 'textarea_small',
	) );

		//Text field for Blog post
	

}