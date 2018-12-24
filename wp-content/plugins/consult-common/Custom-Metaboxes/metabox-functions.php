<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "hostio";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'services_setting',
        'title'      => 'Services Setting',
        'pages'      => array('services'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Services title',
                'desc' => 'Services title',
                'id'   => $prefix . 'services_title',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Services sub title',
                'desc' => 'Services sub title',
                'id'   => $prefix . 'services_sub_title',
                'type'    => 'text',
            ),
            array(
                'name' => 'Icon class',
                'desc' => 'Icon class',
                'id'   => $prefix . 'services_icon',
                'type'    => 'text',
            ),         
        )
    );

    $meta_boxes[] = array(
        'id'         => 'studies_setting',
        'title'      => 'studies Setting',
        'pages'      => array('studies'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Studies title',
                'desc' => 'Studies title',
                'id'   => $prefix . 'studies_title',
                'type'    => 'text',
            ),        
        )
    );
    $meta_boxes[] = array(
        'id'         => 'team_setting',
        'title'      => 'team Setting',
        'pages'      => array('team'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Name',
                'desc' => 'Name',
                'id'   => $prefix . 'team_name',
                'type'    => 'text',
            ),
            array(
                'name' => 'Introduce',
                'desc' => 'Introduce',
                'id'   => $prefix . 'team_intro',
                'type'    => 'text',
            ),
            array(
                'name' => 'Email',
                'desc' => 'Email',
                'id'   => $prefix . 'team_email',
                'type'    => 'text',
            ),
            array(
                'name' => 'Phone',
                'desc' => 'Phone',
                'id'   => $prefix . 'team_phone',
                'type'    => 'text',
            ),
            array(
                'name' => 'Link Facebook',
                'desc' => 'Link Facebook',
                'id'   => $prefix . 'team_fb',
                'type'    => 'text',
            ),        
            array(
                'name' => 'Link twitter',
                'desc' => 'Link twitter',
                'id'   => $prefix . 'team_tw',
                'type'    => 'text',
            ),
            array(
                'name' => 'Link linkedin',
                'desc' => 'Link linkedin',
                'id'   => $prefix . 'team_li',
                'type'    => 'text',
            ),
            array(
                'name' => 'Link google',
                'desc' => 'Link google',
                'id'   => $prefix . 'team_gg',
                'type'    => 'text',
            ),
            array(
                'name' => 'Job',
                'desc' => 'Job',
                'id'   => $prefix . 'team_job',
                'type'    => 'text',
            ),
        )
    );

	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
