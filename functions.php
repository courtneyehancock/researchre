<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


  /*-------------------------------------

  Adds style sheet and JavaScript files

  -----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //font awesome
  	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/all.css');

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
  }
  /*-------------------------------------

  Adding JQuery

  -----------------------------------------*/

  /*add_action('wp_enqueue_scripts', 'custom_theme_scripts');

  if (!is_admin()) add_action( 'wp_enqueue_scripts', 'add_jquery_to_my_theme' );

  function add_jquery_to_my_theme() {
      // scrap WP jquery and register from google cdn - load in footer
      wp_deregister_script('jquery');
      wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", false, null, true );
      // load jquery
      wp_enqueue_script('jquery');
  }
  /*-------------------------------------

   Load Isotop

  -----------------------------------------*/
/*  if (!is_admin()) add_action( 'wp_enqueue_scripts', 'load_isotope' );

  function load_isotope() {
      // script will load in footer
  	wp_enqueue_script( 'isotope-js',  get_stylesheet_directory_uri() . '/path/to/jquery.isotope.min.js', true );
  }
  /*-------------------------------------

  Add a portfolio custom post type

  -----------------------------------------*/
/*  add_action('init', 'create_redvine_portfolio');
  function create_redvine_portfolio()
  {
    $labels = array(
      'name' => _x('Portfolio', 'portfolio'),
      'singular_name' => _x('Portfolio', 'portfolio'),
      'add_new' => _x('Add New', 'portfolio'),
      'add_new_item' => __('Add New Portfolio Item'),
      'edit_item' => __('Edit Item'),
      'new_item' => __('New Item'),
      'view_item' => __('View Item'),
      'search_items' => __('Search Items'),
      'not_found' =>  __('No items found'),
      'not_found_in_trash' => __('No items found in Trash'),
      'parent_item_colon' => ''
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => 20,
      'supports' => array('title','editor','thumbnail')
    );
    register_post_type('portfolio',$args);

    //Add Categories for Filtering
    register_taxonomy( "portfolio-categories",
	array( 	"portfolio" ),
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"),
			"singular_label" => __( "Field" ),
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term
			                    'with_front' => false)
		 )
);

  /*-------------------------------------

   Widgets

  -----------------------------------------*/
  //Widget Areas
  function blank_widgets_init() {

    //Home: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Home'),
      'id'            => 'banner-home',
      'description'   => 'Top banner widget area in home page',
      'before_widget' => '<div class="widget-home widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Left Widget
    register_sidebar(array(
      'name'          => ('Left Footer'),
      'id'            => 'left-footer',
      'description'   => 'Left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Widget
    register_sidebar(array(
      'name'          => ('Middle Footer'),
      'id'            => 'middle-footer',
      'description'   => 'Middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-menu-title">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Right Widget
    register_sidebar(array(
      'name'          => ('Middle Right Footer'),
      'id'            => 'middle-right-footer',
      'description'   => 'Middle right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Right Widget
    register_sidebar(array(
      'name'          => ('Right Footer'),
      'id'            => 'right-footer',
      'description'   => 'Right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  //Custom Menus
  function custom_menus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
    ));
  }
  add_action('init', 'custom_menus');

  //Logo in the header
  add_theme_support( 'custom-header', array(
    'flex-width'      => true,
    'width'           => 260,
    'flex-height'     => true,
    'height'          => 100,
    'header-selector' => '.site-title a',
    'header-text'     => false
  ) );

  //Adds featured imgs to posts
    add_theme_support('post-thumbnails');
  ?>
