<?php

// SET THUMBNAILS

function chavezroofing_setup() {

    add_theme_support('post-thumbnails');

}
add_action( 'after_setup_theme', 'chavezroofing_setup');



// STYLE AND SCRIPTS

function chavezroofing_styles () {


	wp_enqueue_style ( 'bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.min.css");

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

  wp_enqueue_style( 'googlefonts', get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700' );

  /*wp_enqueue_style( 'bxslider', get_template_directory_uri() . 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css' );*/

  wp_enqueue_style( 'lightbox', get_template_directory_uri() . "/assets/css/lightbox.min.css");
  
}

add_action ( 'wp_enqueue_scripts', 'chavezroofing_styles');


function chavezroofing_js() {
    
    
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri(). "/assets/js/bootstrap.min.js", array('jquery'), '1.12.4', true);


    /*wp_enqueue_script( 'bxslider', get_template_directory_uri() . 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js');*/


    wp_enqueue_script( 'lightbox', get_template_directory_uri() . "/assets/js/lightbox.min.js", '1.12.4', true);


    wp_enqueue_script( 'main_js', get_template_directory_uri() . "/assets/js/scripts.js", array('jquery'), '1.12.4', true );
    

}


add_action( 'wp_enqueue_scripts', 'chavezroofing_js');



//REGISTER NAVIGATION

register_nav_menus( array (
    'main_menu' => __('Main Menu', 'chavezroofing')

));


//REGISTER POST TYPES FOR SERVICES


function chavezroofing_services() {
  $labels = array(
    'name'               => _x( 'chavez services', 'chavezroofing' ),
    'singular_name'      => _x( 'service', 'post type singular name', 'chavezroofing' ),
    'menu_name'          => _x( 'chavez services', 'admin menu', 'chavezroofing' ),
    'name_admin_bar'     => _x( 'chavez services', 'add new on admin bar', 'chavezroofing' ),
    'add_new'            => _x( 'Add New', 'book', 'chavezroofing' ),
    'add_new_item'       => __( 'Add New Service', 'chavezroofing'),
    'new_item'           => __( 'New Service', 'chavezroofing'),
    'edit_item'          => __( 'Edit Service', 'chavezroofing'),
    'view_item'          => __( 'View Service', 'chavezroofing'),
    'all_items'          => __( 'All Chavez Services', 'chavezroofing'),
    'search_items'       => __( 'Search Service', 'chavezroofing'),
    'parent_item_colon'  => __( 'Parent Service:', 'chavezroofing'),
    'not_found'          => __( 'No Services found.', 'chavezroofing'),
    'not_found_in_trash' => __( 'No Services found in Trash.', 'chavezroofing')
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'chavezroofing'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'services' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type( 'services', $args );
}
add_action( 'init', 'chavezroofing_services' );










