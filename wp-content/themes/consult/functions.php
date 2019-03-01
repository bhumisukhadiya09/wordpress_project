<?php
$consult_redux_demo = get_option('redux_demo');
//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function consult_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats
    $lang = get_template_directory_uri() . '/languages';
    load_theme_textdomain('consult', $lang);
    add_post_type_support( 'post', 'post-formats', array( 'audio',  'gallery', 'image', 'video' ) );
    add_post_type_support( 'portfolio', 'post-formats', array( 'gallery', 'image' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' => esc_html__('Primary Navigation Menu: Chosen menu in Home page, single, blog, pages ...', 'consult'),
    'one-page' => esc_html__('One Page Navigation Menu: Chosen menu in Home One page, ', 'consult'),
  ) );
    // This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'consult_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;



function consult_theme_scripts_styles() {
  $consult_redux_demo = get_option('redux_demo');;
  $protocol = is_ssl() ? 'https' : 'http';

        wp_enqueue_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Raleway:400,300,500,700%7COpen+Sans:300italic,400italic,400,300%7CRoboto+Slab:300,400,700%7CLato:300,400,700');
        //Template CSS Files
        wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style( 'flaticon', get_template_directory_uri().'/css/flaticon.css');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');
        wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/css/owl.theme.css');
        wp_enqueue_style( 'owl-transitions', get_template_directory_uri().'/css/owl.transitions.css');
        wp_enqueue_style( 'fancybox', get_template_directory_uri().'/css/jquery.fancybox.css');
        wp_enqueue_style( 'bootstrap-select', get_template_directory_uri().'/css/bootstrap-select.min.css');
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');
        wp_enqueue_style( 'style-map', get_template_directory_uri().'/css/style.css.map');
        wp_enqueue_style( 'consult-style', get_stylesheet_uri(), array(), '2016-06-26' );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript 

    wp_enqueue_script("consult-total", get_template_directory_uri()."/js/total.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("plugin-collection", get_template_directory_uri()."/js/jquery-plugin-collection.js",array(),false,true);
    wp_enqueue_script("maps-google","http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM",array(),false,true);
    wp_enqueue_script("consult-script", get_template_directory_uri()."/js/script.js",array('jquery'),false,true);
    wp_enqueue_script("resize", get_template_directory_uri()."/js/resize.js",array(),false,true);

}
add_action( 'wp_enqueue_scripts', 'consult_theme_scripts_styles' );


//Custom Excerpt Function
function consult_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function consult_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'consult' ),
        'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'consult' ),        
		'before_widget' => '<div id="%1$s" class="widget %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h3>',        
		'after_title'   => '</h3>'
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Other Pages', 'consult' ),
        'id'            => 'sidebar-2',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'consult' ),        
        'before_widget' => '<div id="%1$s" class="widget %2$s">',        
        'after_widget'  => '</div>',        
        'before_title'  => '<h3>',        
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer One Widget Area', 'consult' ),
		'id'            => 'footer-area-1',
		'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'consult' ),
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',        
    'after_title'   => '</h3>'
	) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer two Widget Area', 'consult' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'consult' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',        
    'after_title'   => '</h3>'
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer three Widget Area', 'consult' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'consult' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',        
    'after_title'   => '</h3>'
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer four Widget Area', 'consult' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'consult' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',        
    'after_title'   => '</h3>'
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer five Widget Area', 'consult' ),
    'id'            => 'footer-area-5',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'consult' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',        
    'after_title'   => '</h3>'
  ) );
	
}
add_action( 'widgets_init', 'consult_widgets_init' );
function consult_add_class_previous($format){
  $format = str_replace('href=', 'class="icon-left-open-big" href=', $format);
  return $format;
}
function consult_add_class_next($format){
  $format = str_replace('href=', 'class="icon-right-open-big" href=', $format);
  return $format;
}
add_filter('next_post_link', 'consult_add_class_next');
add_filter('previous_post_link', 'consult_add_class_previous');
//function tag widgets
function consult_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'consult_tag_cloud_widget' );
function consult_excerpt() {
  $consult_redux_demo = get_option('redux_demo');;
  if(isset($consult_redux_demo['blog_excerpt'])){
    $limit = $consult_redux_demo['blog_excerpt'];
  }else{
    $limit = 20;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


function consult_news_excerpt() {
  $consult_redux_demo = get_option('redux_demo');;
  if(isset($consult_redux_demo['news_excerpt'])){
    $limit = $consult_redux_demo['news_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


if ( !function_exists('consult_pagination') ) {
function consult_pagination($prev = '<span aria-hidden="true">&laquo;</span>', $next = '<span aria-hidden="true">&raquo;</span>', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
        'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format'        => '',
        'current'       => max( 1, get_query_var('paged') ),
        'total'         => $pages,
        'prev_text' => $prev,
        'next_text' => $next,       
        'type'          => 'list',
        'end_size'      => 5,
        'mid_size'      => 5
);
    $return =  paginate_links( $pagination );
    echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}
}

//Get thumbnail url

function consult_post_nav() {
    global $post;
    // Don't print empty markup if there's nowhere to navigate.
    $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );
    if ( ! $next && ! $previous )
        return;
    ?>
	<ul class="pager clearfix">
	  <li class="previous">
		<?php previous_post_link( '%link', _x( ' &larr; Older Item', 'Previous post link', 'consult' ) ); ?>
	  </li>
	  <li class="next">
		<?php next_post_link( '%link', _x( 'Newer Item &rarr;', 'Next post link', 'consult' ) ); ?>
	  </li>
	</ul>   
<?php
}
function consult_search_form( $form ) {
    $form = '
        <div class="widget search-widget">
            <form action="'.esc_url(home_url('/')).'" method="post" class="form">
                <input type="text" class="form-control" name="s" placeholder="'.esc_html__('Search here...', 'consult' ).'">
            </form>
        </div> <!-- widget-search -->';
    return $form;
}
add_filter( 'get_search_form', 'consult_search_form' );
//Custom comment List:

// Comment Form


function consult_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
        <div class="article">
            <div class="author-pic">
                <?php echo get_avatar($comment,$size='43'); ?>
            </div>
            <div class="details">
                <div class="author-meta">
                    <div class="name"><h4><?php printf(__('%s','consult'), get_comment_author_link()) ?></h4></div>
                    <div class="date"><span><?php the_time(get_option( 'date_format' ));?></span></div>
                     <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
                <div class="comment-content">
                    <?php comment_text() ?>
                </div>
                   
            </div>
            <div class="clearfix"></div>
        </div>
        <hr>
<?php
}


function consult_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'consult_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Id', 'consult'),
                              "param_name" => "ses_id",
                              "value" => "",
                              "description" => esc_html__("Section Id, Leave a blank do not show frontend.", "consult"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'consult'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "consult"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Sub Title', 'consult'),
                              "param_name" => "ses_sub_title",
                              "value" => "",
                              "description" => esc_html__("Section Title, Leave a blank do not show frontend.", "consult"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'consult' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'consult' ) => 'type2',
                                esc_html__( 'Slider Revolution', 'consult' ) => 'slider',
                                esc_html__( 'Featured', 'consult' ) => 'featured',
                                esc_html__( 'Featured 2', 'consult' ) => 'featured2',
                                esc_html__( 'Services', 'consult' ) => 'services',
                                esc_html__( 'Services Home 2', 'consult' ) => 'h2services',
                                esc_html__( 'Fun Fact', 'consult' ) => 'funfact',
                                esc_html__( 'About Us', 'consult' ) => 'about',
                                esc_html__( 'About Us 2', 'consult' ) => 'h2about',
                                esc_html__( 'About Us 3', 'consult' ) => 'h3about',
                                esc_html__( 'About Pages', 'consult' ) => 'about2',
                                esc_html__( 'Latest Projects', 'consult' ) => 'projects',
                                esc_html__( 'Testimonials', 'consult' ) => 'testimonials',
                                esc_html__( 'Testimonials 2', 'consult' ) => 'h2testimonials',
                                esc_html__( 'Testimonials Pages', 'consult' ) => 'testimonials1',
                                esc_html__( 'Blog', 'consult' ) => 'blog',
                                esc_html__( 'Contact', 'consult' ) => 'contact',
                                esc_html__( 'Company', 'consult' ) => 'company',
                                esc_html__( 'FAQ', 'consult' ) => 'faq',
                                esc_html__( 'FAQ Pages', 'consult' ) => 'faq1',
                                esc_html__( 'Team', 'consult' ) => 'team',
                                esc_html__( 'Pricing', 'consult' ) => 'pricing',
                                esc_html__( 'Parallax', 'consult' ) => 'parallax',
                                esc_html__( 'Partner', 'consult' ) => 'partner',
                                esc_html__( 'Partner Pages', 'consult' ) => 'partner1',
                                esc_html__( 'Careers', 'consult' ) => 'careers',
                                esc_html__( 'Recent', 'consult' ) => 'recent',

                             ),
                             'description' => esc_html__( 'Select type row', 'consult' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textarea_html",
                              "heading" => esc_html__('Section Content', 'consult'),
                              "param_name" => "ses_content",
                              "value" => "",
                              "description" => esc_html__("Section Content, Leave a blank do not show frontend.", "consult"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Text', 'consult'),
                              "param_name" => "ses_text",
                              "value" => "",
                              "description" => esc_html__("Text button with block: focus", "consult"),   
    )); 
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link', 'consult'),
                              "param_name" => "ses_link",
                              "value" => "",
                              "description" => esc_html__("Link button with block: focus", "consult"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section button name', 'consult'),
                              "param_name" => "ses_btname",
                              "value" => "",
                              "description" => esc_html__("button with block: focus", "consult"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link data', 'consult'),
                              "param_name" => "ses_link_data",
                              "value" => "",
                              "description" => esc_html__("Link data user faq", "consult"),   
    ));  
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'consult' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'consult' )
      ));
// Add new Param in Column  

}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'consult_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function consult_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'consult' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),      
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'               => esc_html__( 'Revolution Slider', 'consult' ), // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/revslider.zip',
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(
            'name'      => 'One Click Demo Import',
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
        array(
            'name'      => esc_html__( 'Contact Form 7', 'consult' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
        array(
            'name'                     => esc_html__( 'Consult Common', 'consult' ),
            'slug'                     => 'consult-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/consult-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'consult' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'consult' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'consult' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'consult' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'consult' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'consult' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'consult' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'consult' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'consult' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'consult' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'consult' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'consult' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'consult' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'consult' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'consult' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'consult' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'consult' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}

function consult_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import consult',
            'import_file_url'            => 'http://shtheme.com/import/consult/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/consult/widgets.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/consult/Image-Preview.png',
            'import_notice'              => esc_html__( 'Import data example consult', 'consult' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'consult_import_files' );




function consult_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    $one_menu = get_term_by( 'name', 'One Page', 'one-page' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home style 1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'consult_after_import_setup' );

function my_theme_scripts() {
    wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/jquery.min.js');
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

?>