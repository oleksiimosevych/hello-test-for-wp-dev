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
	$Content = "<button name='button'>BUTTON</button>";
    return $Content;
}

add_shortcode('hello_button', 'alex_wp_plugin_button');



?>