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

?>