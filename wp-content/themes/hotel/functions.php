<?php
/**
 * hotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hotel
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hotel_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hotel, use a find and replace
		* to change 'hotel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hotel', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hotel' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'hotel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'hotel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hotel_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hotel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hotel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hotel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hotel_scripts() {
	wp_enqueue_style( 'hotel-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hotel-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hotel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hotel_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_action( 'init', 'create_custom_post_type' );
function create_custom_post_type() {


	$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats

);


$labels = array(
'name' => _x('services', 'plural'),  //post_type ll always  be in plural 
'singular_name' => _x('Services', 'singular'),
'menu_name' => _x('Services', 'admin menu'),
'name_admin_bar' => _x('Services', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Services'),
'new_item' => __('New Services'),
'edit_item' => __('Edit Services'),
'view_item' => __('View Services'),
'view_item' => __('View Services'),
'all_items' => __('All Services'),
'search_items' => __('Search Services'),


);
 
$args = array(
	'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'Services'),
  'taxonomies' => array( 'category', 'post_tag' ),
  'show_ui' => true,
  'menu_icon' => 'dashicons-store',

 );
register_post_type( 'Services',$args);

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats

);


$labels = array(
'name' => _x('advantages', 'plural'),  //post_type ll always  be in plural 
'singular_name' => _x('advantages', 'singular'),
'menu_name' => _x('advantages', 'admin menu'),
'name_admin_bar' => _x('advantages', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New advantages'),
'new_item' => __('New advantages'),
'edit_item' => __('Edit advantages'),
'view_item' => __('View advantages'),
'view_item' => __('View advantages'),
'all_items' => __('All advantages'),
'search_items' => __('Search advantages'),


);
 
$args = array(
	'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'advantages'),
  'taxonomies' => array( 'category', 'post_tag' ),
  'show_ui' => true,
  'menu_icon' => 'dashicons-cart',

 );
register_post_type( 'advantages',$args);

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats

);  


$labels = array(
'name' => _x('leisurerooms', 'plural'),  //post_type ll always  be in plural 
'singular_name' => _x('leisurerooms', 'singular'),
'menu_name' => _x('leisurerooms', 'admin menu'),
'name_admin_bar' => _x('leisurerooms', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New leisurerooms'),
'new_item' => __('New leisurerooms'),
'edit_item' => __('Edit leisurerooms'),
'view_item' => __('View leisurerooms'),
'view_item' => __('View leisurerooms'),
'all_items' => __('All leisurerooms'),
'search_items' => __('Search leisurerooms'),


);
 
$args = array(
	'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'leisurerooms'),
  'taxonomies' => array( 'category', 'post_tag' ),
  'show_ui' => true,
  'menu_icon' => 'dashicons-building',

 );
register_post_type( 'leisurerooms',$args);

}

function add_your_fields_meta_box() {
    	add_meta_box(
    		'your_fields_meta_box', // $id
    		'Custom Fields', // $title
    		'show_your_fields_meta_box', // $callback
    		'services', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

    function show_your_fields_meta_box($post_id) {
    	global $post;
    	// print_r($post_id);die();
    		$meta = get_post_meta( $post_id->ID, 'service_name', true ); 
    		$meta_a = get_post_meta( $post_id->ID, 'service_by', true );
    		// print_r($meta);die('ss');
    		?>
    		<label><b>Service Name</b></label>
    	<input type="text" name="service_name" value="<?php echo $meta;?>">
    	<label><b>Served By</b></label>
    	<input type="text" name="service_by" value="<?php echo $meta_a;?>">

    	<select name="service_name" required>
    			<option>Please Select</option>
			  <option value="volvo">Learn More</option>
			  <option value="saab">Read More</option>
			  <option value="mercedes">Get to Know</option>
			  <option value="audi">New Tab</option>
			</select>

        <!-- All fields will go here -->

    	<?php }

function save_your_fields_meta( $post_id ) {
    	// verify nonce
    	/*if ( !wp_verify_nonce( $_POST['service_name'], basename(__FILE__) ) ) {
    		return $post_id;
    	}*/
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'services' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	//$old = get_post_meta( $post_id, 'service_name', true );
    	$new = $_POST['service_name'];
    	$new_a= $_POST['service_by'];
	/*echo "<pre>";
	print_r($new);
	echo "</pre>";
	die('ss');*/

    	// if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'service_name', $new );
    		update_post_meta( $post_id, 'service_by', $new_a );
    	//}
    	 /*elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'testimonial_name', $old );
    	}*/
    }
    add_action( 'save_post', 'save_your_fields_meta' );


// add_action( 'wp_enqueue_scripts', 'twentytwenty_styles' );
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'services' ) );
    return $query;
}