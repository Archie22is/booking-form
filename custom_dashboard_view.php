<?php
/**
 * Our custom dashboard page
 */

	/** WordPress Administration Bootstrap */
	require_once( ABSPATH . 'wp-load.php' );
	require_once( ABSPATH . 'wp-admin/admin.php' );
	require_once( ABSPATH . 'wp-admin/admin-header.php' );
	
	
	//connect to databse
	include ('config/connecta.php');	
	

	//add some scripts
	include ('functions.php');
	
?>





<!-- Inbody css -->
<style type="text/css">
	
	/* left */
	.wp-admin fieldset#contact{
		border: 1px solid #ccc;
		float: left;
		height: 400px;
		padding: 20px;
		width: 500px; 
	}	
	.wp-admin .about-wrap h3{
		line-height: 0em;
    	padding-top: 0px;
	}	
	.wp-admin p.about-copyright{
		line-height: 15px; 
		margin-bottom: 40px; 
	}	
	.wp-admin #contact legend{
		font-size: 18px; 
		margin: 20px 0px 20px 0px; 
	}	
	.wp-admin #contact .input-row{
		height: 40px; 	
	}	
	.wp-admin #contact label{
		display: block; 
		float: left;
		width: 150px;
	}	
	.wp-admin #contact select{
		height: 1.5em;
	}
	.wp-admin input#save.button-primary{
		margin-top: 20px; 
	}
	
	
	/* right */
	.wp-admin fieldset#rules{
		border: 1px solid #ccc;
		float: left;
		height: 400px;
		padding: 20px;
		margin-left: 20px;
		width: 440px; 
	}
	.wp-admin fieldset#rules legend{
		font-size: 18px;
    	margin: 20px 0;
	}
		
	
</style>


<!-- Layout -->
<div class="wrap about-wrap">

	<h3><?php _e( 'Impala Flats Booking Form' ); ?></h3>
	<p class="about-copyright">Powered by: <a href="http://www.ilogic.co.za/">iLogic Agency</a></p>
	
	<!-- menu tabs -->
	<h2 class="nav-tab-wrapper">
		<a href="?page=custom-dashboard" class="nav-tab">
			<?php _e( 'Add' ); ?>
		</a><a href="#" class="nav-tab nav-tab-active">
			<?php _e( 'View' ); ?>
		</a>
		<a href="?page=custom-dashboard-udate" class="nav-tab">
			<?php _e( 'Delete / Update' ); ?>
		</a>
	</h2>	
	
	
	<div class="view-data">
	
		
	
	</div>
	

</div>

<?php //include( ABSPATH . 'wp-admin/admin-footer.php' );