<?
 /**
 * Plugin Name:       Hello World
 * Version:           3.2
 * Author:            Oleksii Mosevych
 */
 function myPlugin( $post ) {
    global $pagenow;
    if ( is_admin() && $pagenow !== 'plugins.php' ) {
        echo "No more alerts when its wrapped this way";
        }
    
    }

register_activation_hook( __FILE__, 'myPlugin' );

function alex_wordpress_plugin_hello($atts) {
	// $Content = "Hello world!";
	//filter
	$hello_text="Hello world!";
	$hello_text=apply_filters('alex_filter_name', $hello_text);	 
    return $hello_text;
}

add_shortcode('hello_text', 'alex_wordpress_plugin_hello');

function alex_wp_plugin_button($atts) {
	$Content = "<button id='alex_button'>BUTTON</button>";
    return $Content;
}

add_shortcode('hello_button', 'alex_wp_plugin_button');
//JS
function add_theme_scripts() {
  // wp_enqueue_style( 'style', get_stylesheet_uri() );
  // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/alex_alert_script.js', array ( 'jquery' ), 1.1, true);
 
    // if ( is_singular() &amp;amp;amp;&amp;amp;amp; comments_open() &amp;amp;amp;&amp;amp;amp; get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );





function create_taxonomy2(){
	register_taxonomy( 'hello', [ 'hello' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Helloes',
			'singular_name'     => 'Hello',
			'search_items'      => 'Search Helloes',
			'all_items'         => 'All Helloes',
			'view_item '        => 'View Hello',
			'parent_item'       => 'Parent Hello',
			'parent_item_colon' => 'Parent Hello:',
			'edit_item'         => 'Edit Hello',
			'update_item'       => 'Update Hello',
			'add_new_item'      => 'Add New Hello',
			'new_item_name'     => 'New Hello Name',
			'menu_name'         => 'Hello',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
		flush_rewrite_rules();


}
add_action('init', 'create_taxonomy2');


// REGISTER NEW POST TYPE
// The plugin should register a custom post type “Hello” that should appear in the main WordPress menu with the “carrot” icon (use Dashicons).
add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('hello', array(
		'labels'             => array(
			'name'               => 'Hellos', // Основное название типа записи
			'singular_name'      => 'Hello', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Add new hi',
			'edit_item'          => 'Edit hi',
			'new_item'           => 'new hi',
			'view_item'          => 'view hi',
			'search_items'       => 'search hi',
			'not_found'          => 'No hellos found',
			'not_found_in_trash' => 'No hi in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Hellos'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,//in the main wp menu
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 1,
		'menu_icon'			 => 'dashicons-carrot',//added carrot here

		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}



?>