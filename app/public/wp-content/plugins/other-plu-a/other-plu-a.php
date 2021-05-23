<?
 /**
 * Plugin Name:       Other Plugin
 * Version:           9.1
 * Author:            Oleksii Mosevych
 */
 function myPlugin2( $post ) {
    global $pagenow;
    if ( is_admin() && $pagenow !== 'plugins.php' ) {
        echo "No more alerts when its wrapped this way";
        }
    
    }

register_activation_hook( __FILE__, 'myPlugin2' );

add_filter( 'alex_filter_name', 'alex_filter_function', 10, 2 );
    
function alex_filter_function( $hello_text ) {
    $hello_text="Google says Hi!";
    
    return $hello_text;
}

?>