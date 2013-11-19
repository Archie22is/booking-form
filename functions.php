<?php 



/*
|--------------------------------------------------------------------------
| Add some CSS and JS 
|--------------------------------------------------------------------------
*/
function myplugin_scripts() {
		
	//some css baby
	//wp_register_style( 'booking-form-css', plugins_url('css/booking-form.css', __FILE__) );
	//wp_register_style('booking-form-css',  $dir  '/css/booking-form.css' );
	wp_enqueue_style( 'booking-form-css' );

	//some js
	wp_register_script( 'booking-form-js', WP_PLUGIN_URL.'/booking-form/js/booking-form.js');
	wp_enqueue_script( 'booking-form-js' );
	/*
		wp_register_script( 'scripts.js', WP_PLUGIN_URL.'/ilogic-catalogue/js/scripts.js');
	wp_enqueue_script( 'scripts.js' );

	wp_localize_script( 'scripts.js', 'wp_ajax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' )
	));
	*/
}
add_action( 'admin_init','myplugin_scripts');












?>