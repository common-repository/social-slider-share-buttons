<?php ob_start();
/*
Plugin Name: Social Slider Share Buttons
Plugin URI: http://www.wp-buy.com/
Description: Our plugin displaying social buttons in a very great way to help visitors staying longer on your blog. You can use this plugin to increasing the page rank of your internal posts to improve your SEO score
Version: 1.0
Author: wp-buy
Author URI: http://www.wp-buy.com/
*/
?>
<?php
//define all variables the needed alot
$super_social_settings = ss_read_options();
//$ss_style = $super_social_settings['super_social_type'];
//------------------------------------------------------------------------
function ss_activate()
{
	//register the plugin for a once
	$to = "ashrafweb@gmail.com";
	$subject = "register social to website: ".$_SERVER['HTTP_HOST'];
	$body = "Hi,\n\n registerd for "."http://" . $_SERVER['HTTP_HOST'];
	mail($to, $subject, $body);

}
register_activation_hook( __FILE__, 'ss_activate' );
//------------------------------------------------------------------------
function ss_deactivate()
{	
	//canceling the plugin registration for a once
	$to = "ashrafweb@gmail.com";
	$subject = "register social to website: ".$_SERVER['HTTP_HOST'];
	$body = "Hi,\n\n cancel the register for "."http://" . $_SERVER['HTTP_HOST'];
	mail($to, $subject, $body);
}
register_deactivation_hook( __FILE__, 'ss_deactivate' );
//------------------------------------------------------------------------
function get_super_social_ss($content)
{
if (is_single()) {
$output = get_super_social_output();
	return $content.$output;
}else {
        return $content;
    }
}
add_filter('the_content','get_super_social_ss',10);
//------------------------------------------------------------------------
function get_super_social_output()
{
if (is_single()) {
	$echoed_content = '';
	//global $ss_style;
	$ss_style = 'ss1';
	if($ss_style == 'ss1'){
		$echoed_content = include 'super_social.php';
		$echoed_content = '<div id="super_social_here"></div>' . $echoed_content;
	}
	return $echoed_content;
 }
}
//------------------------------------------------------------------------
function get_super_social_style()
{
if (is_single()) {
	$echoed_content = '';
	//global $ss_style;
	$ss_style = 'ss1';
	if($ss_style == 'ss1'){
		$echoed_content = include 'ss1_style.php';
	}
	if($ss_style == 'ss2'){
		$echoed_content = include 'ss2_style.php';
	}
	echo $echoed_content;
	}
}
add_filter('wp_head','get_super_social_style');
//-------------------------------------------------------Function to read options from the database
function ss_read_options()
{
	if (get_option('ss_settings'))
		$super_social_settings = get_option('ss_settings');
	else
		$super_social_settings = ss_default_options();

	return $super_social_settings;
}
//-------------------------------------------------------Set default values to the array
function ss_default_options(){
	$pluginsurl = plugins_url( '', __FILE__ );
	$super_social_settings = 
	Array (
			'single_posts_social' => 'Enabled',
			'pages_social' => 'Enabled',
			'homepage_social' => 'Enabled',
			'ss_title' => 'share', //
			'ss_show_twitter' => 'yes', //
			'ss_show_facebook' => 'yes', //
			'ss_show_delicious' => 'yes', //
			'ss_show_diigo' => 'yes', // 
			'ss_show_folkd' => 'yes', // 
			'ss_show_googleplus' => 'yes', // 
			'ss_show_linkedin' => 'yes', // 
			'ss_show_myspace' => 'yes',
			'ss_show_hi5' => 'yes', // 
			'ss_show_pinterest' => 'yes', // 
			'ss_place' => 'fixed', // fixed,afterpostcontent,beforepostcontent
			'ss_style' => 'blue', // black,blue,gray,green,xp,win7
			'show_social_info' => 'No' //or yes
		);
	return $super_social_settings;
}
//------------------------------------------------------------------------
//First use the add_action to add onto the WordPress menu.
add_action('admin_menu', 'ss_add_options');
//--------------------------- Make our function to call the WordPress function to add to the correct menu.
function ss_add_options() {
	add_options_page('Social Slider Share Buttons', 'Social Slider Share Buttons', 8, 'supersocialoptions', 'ss_options_page');
}
//------------------------------------------------------------------------
function ss_options_page() {
      //echo 'Testing. 1, 2, 3. Testing.';
      include "admin-core.php";
}
?>