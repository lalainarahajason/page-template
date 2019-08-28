# page-template
A simple class that allows creating WordPress Page templates
<h2> Installation </h2>
Upload as a normal plugin and activate from worpdress plugins dashboard, or use as a normal php file and include to functions.php in your theme.

<h2> Usage </h2>

<pre>
define( 'DPT_PLUGIN', __FILE__ );
define( 'DPT_PLUGIN_DIR', untrailingslashit( dirname( DPT_PLUGIN ) ) );

require_once DPT_PLUGIN_DIR . '/dynamicPageTemplate.php';

/**
* Load the class from the plugins_loaded hook which is called once any activated plugins have been loaded.
* The addTemplate method accepts a template array where keys are templates path and values templates name
* NOTE : if you don't create 
*/ 
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
</pre>

<h2>Credits</h2>
This library was adapted from http://www.wpexplorer.com/wordpress-page-templates-plugin/
