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
		<a href="?page=custom-dashboard" class="nav-tab nav-tab-active">
			<?php _e( 'Add' ); ?>
		</a>
		<a href="?page=custom-dashboard-view" class="nav-tab">
			<?php _e( 'View' ); ?>
		</a><a href="?page=custom-dashboard-update" class="nav-tab">
			<?php _e( 'Delete / Update' ); ?>
		</a>
	</h2>		
	
	
	<div class="add-data">
	
		<form class="">		
		
			<!-- Input fields -->
			<fieldset id="contact">			
	       		<legend>This is where you inut Impala Flats new seasons and pricings. </legend>	       		
	       		<div class="input-row">
		       		<label for="cake1">Units:</label>
		       		<SELECT id="cake4" name="state" required>
			       		<OPTION selected value="">
			       		</OPTION><OPTION value=AL>Alabama</OPTION>
			       		<OPTION value=AK>Alaska</OPTION>
			       		<OPTION value=AZ>Arizona</OPTION>
			       		<OPTION value=AR>Arkansas</OPTION>
			       		<OPTION value=CA>California</OPTION>
			       		<OPTION value=CO>Colorado</OPTION>
			       		<OPTION value=CT>Connecticut</OPTION>
			       		<OPTION value=DC>District of Columbia</OPTION>
			       		<OPTION value=DE>Delaware</OPTION>
			       		<OPTION value=FL>Florida</OPTION>
			       		<OPTION value=GA>Georgia</OPTION>
			       	</SELECT><br/>	       		
	       		</div>   		     

		       	<div class="input-row">
		       		<label for="no-of-people">Number of people:</label>
		       		<SELECT id="cake4" name="state" required>
			       		<OPTION selected value="">
			       		</OPTION><OPTION value=2>2</OPTION>
			       		<OPTION value=3>3</OPTION>
			       		<OPTION value=4>4</OPTION>
			       		<OPTION value=5>5</OPTION>
			       		<OPTION value=6>6</OPTION>
			       	</SELECT><br/>	
				</div>
	       		
	       		<div class="input-row">
		       		<label for="cake2">Date Ranges:</label>
		       		<input id="cake2" name="address" required placeholder="1 Microsoft Way"/><br/>
		       	</div>
	       		
	       		<div class="input-row">
		       		<label for="cake3">Price: </label>
		       		<input id="cake3" name="city" required placeholder="Redmond"/><br/>	       		
	       		</div>
	       		
	       		<div class="input-row">
					<input name="save" id="save" accesskey="p" class="button-primary" value="Save Changes" type="submit">
					<span class="spinner"></span>
				</div>
	       	       
	       	</fieldset>
	       	
	       	
	       	<!-- Rules -->
	       	<fieldset id="rules">	
	       		<legend>Form Rules </legend>
	       		<ul class="rules-list">
	       			<li><strong>Rule 1:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
	       			<li><strong>Rule 2:</strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
	       			<li><strong>Rule 3:</strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
	       			<li><strong>Rule 4:</strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
	       		</ul>
	       	</fieldset>
			
		</form>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- 	
	<div class="changelog">
		<h3><?php //_e( 'Morbi leo risus, porta ac consectetur' ); ?></h3>
	
		<div class="feature-section images-stagger-right">
			<img src="<?php //echo esc_url( admin_url( 'images/screenshots/theme-customizer.png' ) ); ?>" class="image-50" />
			<h4><?php //_e( 'Risus Consectetur Elit Sollicitudin' ); ?></h4>
			<p><?php //_e( 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.' ); ?></p>
	
			<h4><?php //_e( 'Mattis Justo Purus' ); ?></h4>
			<p><?php //_e( 'Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.' ); ?></p>
		</div>
	</div>
 -->	

</div>

<?php //include( ABSPATH . 'wp-admin/admin-footer.php' );