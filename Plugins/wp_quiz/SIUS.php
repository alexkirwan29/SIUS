<?PHP
/*
Plugin Name: SIUS Login
Plugin URI: http://www.sm4shedgames.com
Description: SIUS login system for SM4SHEDINTERACTIVE
Author: Alex Kirwan
Version: 0.1
Author URI: http://www.sm4shedgames.com/alexkirwan
*/

/**SIUS.php**/

include 'src/SIUS.php'; //Class File

//Create an instance of the plugin class
function call_sius() {
    return new SIUS( 'admin' );
}

// Only when the current user is an admin
if ( is_admin )
    add_action( 'init', 'call_sius' );

//Helper function
if ( ! function_exsists( 'pp' ) ) {
    function pp() {
        return plugin_dir_url(__FILE__);
    }
}
