<?php 
/*
Plugin Name: Dynamic page template
Plugin URI: https://rahajason.com/
Description: Dynamic page template
Author: Rahajason
Author URI: https://rahajason.com/
Text Domain: rahajason
Domain Path: /languages/
Version: 1.0.0
*/


define( 'DPT_PLUGIN', __FILE__ );
define( 'DPT_PLUGIN_DIR', untrailingslashit( dirname( DPT_PLUGIN ) ) );

require_once DPT_PLUGIN_DIR . '/settings.php';
require_once DPT_PLUGIN_DIR . '/dynamicPageTemplate.php';

add_action( 'plugins_loaded', 'load_my_plugin' );
function load_my_plugin()
{	
	$templates = array(
		'/templates/espacepro-template.php' => 'DPT',
		'/templates/cart-template' => 'CART TEMPLATE'
	);
    $dpt = new DPT();
	$dpt->addTemplate($templates);
}
