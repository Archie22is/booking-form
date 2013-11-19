<?php
/**
 * @package Booking Form
 */
/*
Plugin Name: Booking Form by iLogic
Plugin URI: http://www.ilogic.co.za/
Description: Booking form custom plugin - you can't find this anywhere else...
Version: 1.0
Author: iLogic Agency
Author URI: http://www.ilogic.co.za/
License: Uhm... contact us: http://www.ilogic.co.za/
*/


/*
 |--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/

// plugin folder url
if(!defined('RC_SCD_PLUGIN_URL')) {
	define('RC_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/

class rc_sweet_custom_dashboard {

	/*--------------------------------------------*
	 * Constructor
	*--------------------------------------------*/

	//initializes the plugin by setting localization, filters, and administration functions.
	function __construct() {
		add_action('admin_menu', array( &$this,'rc_scd_register_menu') );
		add_action('load-index.php', array( &$this,'rc_scd_redirect_dashboard') );
	} // end constructor

	
	//redirect dash to default dashboard page
	function rc_scd_redirect_dashboard() {

		if( is_admin() ) {
			$screen = get_current_screen();				
			if( $screen->base == 'dashboard' ) {
				wp_redirect( admin_url( 'index.php?page=custom-dashboard' ) );
			}
		}

	}
	

	//register all menus for the sake of permissions issues
	function rc_scd_register_menu() {
		add_dashboard_page( 'Custom Dashboard', 'Custom Dashboard', 'read', 'custom-dashboard', array( &$this,'rc_scd_create_dashboard') );
		add_dashboard_page( 'Custom Dashboard View', 'Custom Dashboard View', 'read', 'custom-dashboard-view', array( &$this,'rc_scd_create_dashboard_view') );
		add_dashboard_page( 'Custom Dashboard Update', 'Custom Dashboard Update', 'read', 'custom-dashboard-update', array( &$this,'rc_scd_create_dashboard_update') );
	}

	//construct dashboard
	function rc_scd_create_dashboard() {
		include_once( 'custom_dashboard.php'  );
		//include_once( 'custom_dashboard_view.php'  );
	}
	
	//construct dashboad | view
	function rc_scd_create_dashboard_view() {
		include_once( 'custom_dashboard_view.php'  );
	}
	
	//construct dashboad | update
	function rc_scd_create_dashboard_update() {
		include_once( 'custom_dashboard_update.php'  );
	}	

}

// instantiate plugin's class
$GLOBALS['sweet_custom_dashboard'] = new rc_sweet_custom_dashboard();

?>


