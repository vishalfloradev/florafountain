<?php
/*Advance Custom Function theme option */

require_once("includes/acf_addon.php");
/* end */
/* Add CSS */

add_action('wp_enqueue_scripts', 'flora_enqueue_styles');

function flora_enqueue_styles()
{
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('font-awesome.min', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
   
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/custom.css');
    wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('colorbox', get_stylesheet_directory_uri() . '/css/colorbox.css');
	 
}

/* Add Jquery */

add_action('wp_enqueue_scripts', 'flora_enqueue_scripts');

function flora_enqueue_scripts()

{

    // wp_enqueue_script('jquery_min', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );

    wp_enqueue_script('jquery_bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true);

    wp_enqueue_script('jquery_slick', get_stylesheet_directory_uri() . '/js/slick.js', array(), '1.0.0', true);

    wp_enqueue_script('jquery_colorbox', get_stylesheet_directory_uri() . '/js/jquery.colorbox.js', array(), '1.0.0', true);
	
    wp_enqueue_script('jquery_custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
	
    

}


/* Custom Testimonial Post Type */

function custom_post_type()
{

// Set UI labels for Custom Post Type

    $labels = array(

        'name' => _x('Testimonial', 'Post Type General Name', 'flora'),

        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'flora'),

        'menu_name' => __('Testimonial', 'flora'),

        'parent_item_colon' => __('Parent Testimonial', 'flora'),

        'all_items' => __('All Testimonial', 'flora'),

        'view_item' => __('View Testimonial', 'flora'),

        'add_new_item' => __('Add New Testimonial', 'flora'),
        'add_new' => __('Add New', 'flora'),
        'edit_item' => __('Edit Testimonial', 'flora'),

        'update_item' => __('Update Testimonial', 'flora'),

        'search_items' => __('Search Testimonial', 'flora'),

        'not_found' => __('Not Found', 'flora'),

        'not_found_in_trash' => __('Not found in Trash', 'flora'),

    );


// Set other options for Custom Post Type


    $args = array(

        'label' => __('Testimonial', 'flora'),

        'description' => __('Testimonial and reviews', 'flora'),

        'labels' => $labels,

        // Features this CPT supports in Post Editor

        'supports' => array('title', 'editor'),

        // You can associate this CPT with a taxonomy or custom taxonomy. 

        //'taxonomies'          => array( 'genres' ),

        /* A hierarchical CPT is like Pages and can have

        * Parent and child items. A non-hierarchical CPT

        * is like Posts.

        */

        'hierarchical' => false,

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'show_in_nav_menus' => true,

        'show_in_admin_bar' => true,

        'menu_position' => 5,

        'can_export' => true,

        'has_archive' => true,

        'exclude_from_search' => false,

        'publicly_queryable' => true,

        'capability_type' => 'page',

    );


    // Registering your Custom Post Type

    register_post_type('Testimonial', $args);


    $portfolio_labels = array(

        'name' => _x('Portfolio', 'Post Type General Name', 'flora'),

        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'flora'),

        'menu_name' => __('Portfolio', 'flora'),

        'parent_item_colon' => __('Parent Portfolio', 'flora'),

        'all_items' => __('All Portfolio', 'flora'),

        'view_item' => __('View Portfolio', 'flora'),

        'add_new_item' => __('Add New Portfolio', 'flora'),

        'add_new' => __('Add New', 'flora'),

        'edit_item' => __('Edit Portfolio', 'flora'),

        'update_item' => __('Update Portfolio', 'flora'),

        'search_items' => __('Search Portfolio', 'flora'),

        'not_found' => __('Not Found', 'flora'),

        'not_found_in_trash' => __('Not found in Trash', 'flora'),

    );


// Set other options for Custom Post Type


    $portfolio_args = array(

        'label' => __('Portfolio', 'flora'),

        'description' => __('Portfolio Image and reviews', 'flora'),

        'labels' => $portfolio_labels,

        // Features this CPT supports in Post Editor

        'supports' => array('title', 'editor', 'thumbnail'),

        // You can associate this CPT with a taxonomy or custom taxonomy. 

        'taxonomies'          => array( '' ),

        /* A hierarchical CPT is like Pages and can have

        * Parent and child items. A non-hierarchical CPT

        * is like Posts.

        */

        'hierarchical' => false,

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'show_in_nav_menus' => true,

        'show_in_admin_bar' => true,

        'menu_position' => 6,

        'can_export' => true,

        'has_archive' => true,

        'exclude_from_search' => false,

        'publicly_queryable' => true,

        'capability_type' => 'page',

    );
	
	// register taxonomy
    register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'portfolio_category' )));
	
    // Registering your Custom Post Type

    register_post_type('Portfolio', $portfolio_args);

// Set other options for Custom Post Type case study

 $case_study_labels = array(

        'name' => _x('Case Study', 'Post Type General Name', 'flora'),

        'singular_name' => _x('Case Study', 'Post Type Singular Name', 'flora'),

        'menu_name' => __('Case Study', 'flora'),

        'parent_item_colon' => __('Parent Case Study', 'flora'),

        'all_items' => __('All Case Study', 'flora'),

        'view_item' => __('View Case Study', 'flora'),

        'add_new_item' => __('Add New Case Study', 'flora'),

        'add_new' => __('Add New', 'flora'),

        'edit_item' => __('Edit Case Study', 'flora'),

        'update_item' => __('Update Case Study', 'flora'),

        'search_items' => __('Search Case Study', 'flora'),

        'not_found' => __('Not Found', 'flora'),

        'not_found_in_trash' => __('Not found in Trash', 'flora'),

    );

    $case_study__args = array(

        'label' => __('Case Study', 'flora'),

        'description' => __('Case Study Image and reviews', 'flora'),

        'labels' => $case_study_labels,

        // Features this CPT supports in Post Editor

        'supports' => array('title', 'editor', 'thumbnail'),

        // You can associate this CPT with a taxonomy or custom taxonomy. 

        'taxonomies'          => array( '' ),

        /* A hierarchical CPT is like Pages and can have

        * Parent and child items. A non-hierarchical CPT

        * is like Posts.

        */

        'hierarchical' => false,

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'show_in_nav_menus' => true,

        'show_in_admin_bar' => true,

        'menu_position' => 6,

        'can_export' => true,

        'has_archive' => true,

        'exclude_from_search' => false,

        'publicly_queryable' => true,

        'capability_type' => 'page',

    );
	
	// register taxonomy
    register_taxonomy('casestudy_category', 'casestudy', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'casestudy_category' )));
	
    // Registering your Custom Post Type

    register_post_type('Case Study', $case_study__args);

}


/* Hook into the 'init' action so that the function

* Containing our post type registration is not 

* unnecessarily executed. 

*/

add_action('init', 'custom_post_type', 0);

// Feature Image 
add_theme_support('post-thumbnails');


/* End Custom Post type */


/* Custom Widget */

function wpb_widgets_init()

{




    register_sidebar(

        array(

            'name' => 'Footer About us',

            'id' => 'footer-about',

            'before_widget' => '<div class="footer-first-widget">',

            'after_widget' => '</div>',

            'before_title' => '<h4>',

            'after_title' => '</h4>',

        )

    );



    register_sidebar(

        array(

            'name' => 'Footer Our Services',

            'id' => 'footer-first',

            'before_widget' => '<div class="footer-first-widget">',

            'after_widget' => '</div>',

            'before_title' => '<h4>',

            'after_title' => '</h4>',

        )

    );


    register_sidebar(

        array(

            'name' => 'Footer We Serve At',

            'id' => 'footer-two',

            'before_widget' => '<div class="footer-two-widget">',

            'after_widget' => '</div>',

            'before_title' => '<h4>',

            'after_title' => '</h4>',

        )

    );


    register_sidebar(

        array(

            'name' => 'Footer Contact Us',

            'id' => 'footer-three',

            'before_widget' => '<div class="footer-three-widget">',

            'after_widget' => '</div>',

            'before_title' => '<h4>',

            'after_title' => '</h4>',

        )

    );


    register_sidebar(

        array(

            'name' => 'Blog Details',

            'id' => 'footer-blog',

            'before_widget' => '<div class="footer-first-widget">',

            'after_widget' => '</div>',

            'before_title' => '<h4>',

            'after_title' => '</h4>',

        )

    );
}

add_action('widgets_init', 'wpb_widgets_init');


/* End Custom Widget */


/* Custom Theme Options  */


if (!class_exists('ReduxFramework') && file_exists(dirname(__FILE__) . '/ReduxFramework/ReduxCore/framework.php')) {

    require_once(dirname(__FILE__) . '/ReduxFramework/ReduxCore/framework.php');

}

if (!isset($redux_demo) && file_exists(dirname(__FILE__) . '/ReduxFramework/sample/sample-config.php')) {

    require_once(dirname(__FILE__) . '/ReduxFramework/sample/sample-config.php');

}


/* End Custom Theme Options */


/* Main menu Check box */


add_action('init', 'mobile_my_menus');


function mobile_my_menus()
{


    register_nav_menus(


        array(


            'main-menu' => __('Main menu'),

            'footer-menu' => __('Footer menu'),


        )


    );


}

//add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts' );
/*add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('autoptimize_html_after_minify', 'myplugin_remove_type_attr', 10, 2);
function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
} */
add_action('wp_loaded', 'prefix_output_buffer_start');
function prefix_output_buffer_start() {
    ob_start("prefix_output_callback");
}

add_action('shutdown', 'prefix_output_buffer_end');
function prefix_output_buffer_end() {
    ob_end_flush();
}

function prefix_output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}



add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = 'https://florafountain.com/staging/thank-you';
}, false );
</script>
<?php
}



/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}