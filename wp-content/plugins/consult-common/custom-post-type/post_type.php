<?php

// register post type gallery
add_action( 'init', 'register_consult_gallery' );
function register_consult_gallery() {
    
    $labels = array( 
        'name' => __( 'gallery', 'consult' ),
        'singular_name' => __( 'gallery', 'consult' ),
        'add_new' => __( 'Add New gallery', 'consult' ),
        'add_new_item' => __( 'Add New gallery', 'consult' ),
        'edit_item' => __( 'Edit gallery', 'consult' ),
        'new_item' => __( 'New gallery', 'consult' ),
        'view_item' => __( 'View gallery', 'consult' ),
        'search_items' => __( 'Search gallery', 'consult' ),
        'not_found' => __( 'No gallery found', 'consult' ),
        'not_found_in_trash' => __( 'No gallery found in Trash', 'consult' ),
        'parent_item_colon' => __( 'Parent gallery:', 'consult' ),
        'menu_name' => __( 'gallery', 'consult' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List gallery',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'gallery', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'gallery', $args );
}

add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );
function create_Type_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'consult' ),
    'singular_name' => __( 'Type', 'consult' ),
    'search_items' =>  __( 'Search Type','consult' ),
    'all_items' => __( 'All Type','consult' ),
    'parent_item' => __( 'Parent Type','consult' ),
    'parent_item_colon' => __( 'Parent Type:','consult' ),
    'edit_item' => __( 'Edit Type','consult' ), 
    'update_item' => __( 'Update Type','consult' ),
    'add_new_item' => __( 'Add New Type','consult' ),
    'new_item_name' => __( 'New Type Name','consult' ),
    'menu_name' => __( 'Type','consult' ),
  );

// Now register the taxonomy

  register_taxonomy('type',array('gallery'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}

add_action( 'init', 'register_consult_services' );
function register_consult_services() {
    
    $labels = array( 
        'name' => __( 'services', 'consult' ),
        'singular_name' => __( 'services', 'consult' ),
        'add_new' => __( 'Add New services', 'consult' ),
        'add_new_item' => __( 'Add New services', 'consult' ),
        'edit_item' => __( 'Edit services', 'consult' ),
        'new_item' => __( 'New services', 'consult' ),
        'view_item' => __( 'View services', 'consult' ),
        'search_items' => __( 'Search services', 'consult' ),
        'not_found' => __( 'No services found', 'consult' ),
        'not_found_in_trash' => __( 'No services found in Trash', 'consult' ),
        'parent_item_colon' => __( 'Parent services:', 'consult' ),
        'menu_name' => __( 'services', 'consult' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List services',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'services', 'cate' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'services', $args );
}

add_action( 'init', 'register_consult_team' );
function register_consult_team() {
    
    $labels = array( 
        'name' => __( 'team', 'consult' ),
        'singular_name' => __( 'team', 'consult' ),
        'add_new' => __( 'Add New team', 'consult' ),
        'add_new_item' => __( 'Add New team', 'consult' ),
        'edit_item' => __( 'Edit team', 'consult' ),
        'new_item' => __( 'New team', 'consult' ),
        'view_item' => __( 'View team', 'consult' ),
        'search_items' => __( 'Search team', 'consult' ),
        'not_found' => __( 'No team found', 'consult' ),
        'not_found_in_trash' => __( 'No team found in Trash', 'consult' ),
        'parent_item_colon' => __( 'Parent team:', 'consult' ),
        'menu_name' => __( 'team', 'consult' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List team',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'team', 'cat' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'register_consult_studies' );
function register_consult_studies() {
    
    $labels = array( 
        'name' => __( 'studies', 'consult' ),
        'singular_name' => __( 'studies', 'consult' ),
        'add_new' => __( 'Add New studies', 'consult' ),
        'add_new_item' => __( 'Add New studies', 'consult' ),
        'edit_item' => __( 'Edit studies', 'consult' ),
        'new_item' => __( 'New studies', 'consult' ),
        'view_item' => __( 'View studies', 'consult' ),
        'search_items' => __( 'Search studies', 'consult' ),
        'not_found' => __( 'No studies found', 'consult' ),
        'not_found_in_trash' => __( 'No studies found in Trash', 'consult' ),
        'parent_item_colon' => __( 'Parent studies:', 'consult' ),
        'menu_name' => __( 'studies', 'consult' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List studies',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'studies', 'stud' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'studies', $args );
}
add_action( 'init', 'create_Type_hierarchical_taxonomy2', 0 );
function create_Type_hierarchical_taxonomy2() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'consult' ),
    'singular_name' => __( 'Type', 'consult' ),
    'search_items' =>  __( 'Search Type','consult' ),
    'all_items' => __( 'All Type','consult' ),
    'parent_item' => __( 'Parent Type','consult' ),
    'parent_item_colon' => __( 'Parent Type:','consult' ),
    'edit_item' => __( 'Edit Type','consult' ), 
    'update_item' => __( 'Update Type','consult' ),
    'add_new_item' => __( 'Add New Type','consult' ),
    'new_item_name' => __( 'New Type Name','consult' ),
    'menu_name' => __( 'Type','consult' ),
  );

// Now register the taxonomy

  register_taxonomy('stud',array('studies'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'stud' ),
  ));

}
?>