<?php /*
Expert Business Search Local SEO Plugin settings page
version 2.1.7

*/
 
        if($_POST['ebs_seo_cp_hidden'] == 'Y') {  
		
		
            //Updates all the options 
			
			//default google maps domain is com. if form was left blank, link will break, so com is forced as default.
			if ($_POST['ebs_seo_cp_map_tld']) {
				$ebs_seo_cp_map_tld = $_POST['ebs_seo_cp_map_tld']; 
			} else {
				$ebs_seo_cp_map_tld = "com";
			}
			if ($_POST['ebs_seo_cp_map_tld'] == "" ) {
				$ebs_seo_cp_map_tld = "com";
			} else {
				$ebs_seo_cp_map_tld = $_POST['ebs_seo_cp_map_tld'];
			}
			if (substr( $_POST['ebs_seo_cp_map_tld'], 0, 1) == ".") {
				$ebs_seo_cp_map_tld = substr( $_POST['ebs_seo_cp_map_tld'], 1);
			}
			if ($_POST['ebs_seo_cp_map_width']) {
				$ebs_seo_cp_map_width = $_POST['ebs_seo_cp_map_width']; 
			} else {
				$ebs_seo_cp_map_width = "500";
			}
			if ($_POST['ebs_seo_cp_map_height']) {
				$ebs_seo_cp_map_height = $_POST['ebs_seo_cp_map_height']; 
			} else {
				$ebs_seo_cp_map_height = "350";
			}

			update_option('ebs_seo_cp_map_tld', $ebs_seo_cp_map_tld); 
			update_option('ebs_seo_cp_map_width', $ebs_seo_cp_map_width);
			update_option('ebs_seo_cp_map_height', $ebs_seo_cp_map_height);
			
			$ebs_seo_cp_updated = date('Y-m-d'); update_option('ebs_seo_cp_updated', $ebs_seo_cp_updated);
			
	 		$ebs_seo_cp_url = htmlentities( $_POST['ebs_seo_cp_url'] ); update_option('ebs_seo_cp_url', $ebs_seo_cp_url); 
	 		$ebs_seo_cp_name = $_POST['ebs_seo_cp_name']; update_option('ebs_seo_cp_name', $ebs_seo_cp_name); 
			$ebs_seo_cp_address = $_POST['ebs_seo_cp_address']; update_option('ebs_seo_cp_address', $ebs_seo_cp_address); 
			$ebs_seo_cp_apt = $_POST['ebs_seo_cp_apt']; update_option('ebs_seo_cp_apt', $ebs_seo_cp_apt); 
			$ebs_seo_cp_city = $_POST['ebs_seo_cp_city']; update_option('ebs_seo_cp_city', $ebs_seo_cp_city); 
			$ebs_seo_cp_state = $_POST['ebs_seo_cp_state']; update_option('ebs_seo_cp_state', $ebs_seo_cp_state); 
			$ebs_seo_cp_zip = $_POST['ebs_seo_cp_zip']; update_option('ebs_seo_cp_zip', $ebs_seo_cp_zip); 
			$ebs_seo_cp_country = $_POST['ebs_seo_cp_country']; update_option('ebs_seo_cp_country', $ebs_seo_cp_country); 
			
			$ebs_seo_cp_full_phone_1 = $_POST['ebs_seo_cp_full_phone_1']; update_option('ebs_seo_cp_full_phone_1', $ebs_seo_cp_full_phone_1); 
			$ebs_seo_cp_full_phone_2 = $_POST['ebs_seo_cp_full_phone_2']; update_option('ebs_seo_cp_full_phone_2', $ebs_seo_cp_full_phone_2); 
			$ebs_seo_cp_full_phone_3 = $_POST['ebs_seo_cp_full_phone_3']; update_option('ebs_seo_cp_full_phone_3', $ebs_seo_cp_full_phone_3); 
			

			
			$ebs_seo_cp_email = $_POST['ebs_seo_cp_email']; update_option('ebs_seo_cp_email', $ebs_seo_cp_email); 
			$ebs_seo_cp_latitude = $_POST['ebs_seo_cp_latitude']; update_option('ebs_seo_cp_latitude', $ebs_seo_cp_latitude); 
			$ebs_seo_cp_longitude = $_POST['ebs_seo_cp_longitude']; update_option('ebs_seo_cp_longitude', $ebs_seo_cp_longitude); 
			$ebs_seo_cp_map_full_view = $_POST['ebs_seo_cp_map_full_view']; update_option('ebs_seo_cp_map_full_view', $ebs_seo_cp_map_full_view); 
			$ebs_seo_cp_width = $_POST['ebs_seo_cp_width']; update_option('ebs_seo_cp_width', $ebs_seo_cp_width); 
			$ebs_seo_cp_height = $_POST['ebs_seo_cp_height']; update_option('ebs_seo_cp_height', $ebs_seo_cp_height); 
			$ebs_seo_cp_map_name = $_POST['ebs_seo_cp_map_name']; update_option('ebs_seo_cp_map_name', $ebs_seo_cp_map_name); 
			
			$ebs_seo_cp_hours_full_view = $_POST['ebs_seo_cp_hours_full_view']; update_option('ebs_seo_cp_hours_full_view', $ebs_seo_cp_hours_full_view); 
			$ebs_seo_cp_hours_heading = $_POST['ebs_seo_cp_hours_heading']; update_option('ebs_seo_cp_hours_heading', $ebs_seo_cp_hours_heading); 
			
			$ebs_seo_cp_monday = $_POST['ebs_seo_cp_monday']; update_option('ebs_seo_cp_monday', $ebs_seo_cp_monday); 
			$ebs_seo_cp_tuesday = $_POST['ebs_seo_cp_tuesday']; update_option('ebs_seo_cp_tuesday', $ebs_seo_cp_tuesday); 
			$ebs_seo_cp_wednesday = $_POST['ebs_seo_cp_wednesday']; update_option('ebs_seo_cp_wednesday', $ebs_seo_cp_wednesday); 
			$ebs_seo_cp_thursday = $_POST['ebs_seo_cp_thursday']; update_option('ebs_seo_cp_thursday', $ebs_seo_cp_thursday); 
			$ebs_seo_cp_friday = $_POST['ebs_seo_cp_friday']; update_option('ebs_seo_cp_friday', $ebs_seo_cp_friday); 
			$ebs_seo_cp_saturday = $_POST['ebs_seo_cp_saturday']; update_option('ebs_seo_cp_saturday', $ebs_seo_cp_saturday); 
			$ebs_seo_cp_sunday = $_POST['ebs_seo_cp_sunday']; update_option('ebs_seo_cp_sunday', $ebs_seo_cp_sunday); 
			
			$ebs_seo_cp_open_monday = $_POST['ebs_seo_cp_open_monday']; update_option('ebs_seo_cp_open_monday', $ebs_seo_cp_open_monday); 
			$ebs_seo_cp_open_tuesday = $_POST['ebs_seo_cp_open_tuesday']; update_option('ebs_seo_cp_open_tuesday', $ebs_seo_cp_open_tuesday); 
			$ebs_seo_cp_open_wednesday = $_POST['ebs_seo_cp_open_wednesday']; update_option('ebs_seo_cp_open_wednesday', $ebs_seo_cp_open_wednesday); 
			$ebs_seo_cp_open_thursday = $_POST['ebs_seo_cp_open_thursday']; update_option('ebs_seo_cp_open_thursday', $ebs_seo_cp_open_thursday); 
			$ebs_seo_cp_open_friday = $_POST['ebs_seo_cp_open_friday']; update_option('ebs_seo_cp_open_friday', $ebs_seo_cp_open_friday); 
			$ebs_seo_cp_open_saturday = $_POST['ebs_seo_cp_open_saturday']; update_option('ebs_seo_cp_open_saturday', $ebs_seo_cp_open_saturday); 
			$ebs_seo_cp_open_sunday = $_POST['ebs_seo_cp_open_sunday']; update_option('ebs_seo_cp_open_sunday', $ebs_seo_cp_open_sunday); 
			
			$ebs_seo_cp_close_monday = $_POST['ebs_seo_cp_close_monday']; update_option('ebs_seo_cp_close_monday', $ebs_seo_cp_close_monday); 
			$ebs_seo_cp_close_tuesday = $_POST['ebs_seo_cp_close_tuesday']; update_option('ebs_seo_cp_close_tuesday', $ebs_seo_cp_close_tuesday); 
			$ebs_seo_cp_close_wednesday = $_POST['ebs_seo_cp_close_wednesday']; update_option('ebs_seo_cp_close_wednesday', $ebs_seo_cp_close_wednesday); 
			$ebs_seo_cp_close_thursday = $_POST['ebs_seo_cp_close_thursday']; update_option('ebs_seo_cp_close_thursday', $ebs_seo_cp_close_thursday); 
			$ebs_seo_cp_close_friday = $_POST['ebs_seo_cp_close_friday']; update_option('ebs_seo_cp_close_friday', $ebs_seo_cp_close_friday); 
			$ebs_seo_cp_close_saturday = $_POST['ebs_seo_cp_close_saturday']; update_option('ebs_seo_cp_close_saturday', $ebs_seo_cp_close_saturday); 
			$ebs_seo_cp_close_sunday = $_POST['ebs_seo_cp_close_sunday']; update_option('ebs_seo_cp_close_sunday', $ebs_seo_cp_close_sunday); 
			
			$ebs_seo_cp_location_full_view = $_POST['ebs_seo_cp_location_full_view']; update_option('ebs_seo_cp_location_full_view', $ebs_seo_cp_location_full_view); 
			$ebs_seo_cp_location_img = $_POST['ebs_seo_cp_location_img']; update_option('ebs_seo_cp_location_img', $ebs_seo_cp_location_img); 
			$ebs_seo_cp_logo_full_view = $_POST['ebs_seo_cp_logo_full_view']; update_option('ebs_seo_cp_logo_full_view', $ebs_seo_cp_logo_full_view); 
			$ebs_seo_cp_logo_img = $_POST['ebs_seo_cp_logo_img']; update_option('ebs_seo_cp_logo_img', $ebs_seo_cp_logo_img); 
			
			$ebs_seo_cp_qr_full_view = $_POST['ebs_seo_cp_qr_full_view']; update_option('ebs_seo_cp_qr_full_view', $ebs_seo_cp_qr_full_view); 
			$ebs_seo_cp_qr = htmlentities( $_POST['ebs_seo_cp_qr'] ); update_option('ebs_seo_cp_qr', $ebs_seo_cp_qr); 
			
			$ebs_seo_cp_payment_full_view = $_POST['ebs_seo_cp_payment_full_view']; update_option('ebs_seo_cp_payment_full_view', $ebs_seo_cp_qr_full_view); 
			$ebs_seo_cp_payment = $_POST['ebs_seo_cp_payment']; update_option('ebs_seo_cp_payment', $ebs_seo_cp_payment); 
			$ebs_seo_cp_currencies = $_POST['ebs_seo_cp_currencies']; update_option('ebs_seo_cp_currencies', $ebs_seo_cp_currencies); 
			$ebs_seo_cp_pricerange = $_POST['ebs_seo_cp_pricerange']; update_option('ebs_seo_cp_pricerange', $ebs_seo_cp_pricerange); 
			
			$ebs_seo_cp_social_media_full_view = $_POST['ebs_seo_cp_social_media_full_view']; update_option('ebs_seo_cp_social_media_full_view', $ebs_seo_cp_social_media_full_view); 
			$ebs_seo_cp_facebook = htmlentities( $_POST['ebs_seo_cp_facebook'] ); update_option('ebs_seo_cp_facebook', $ebs_seo_cp_facebook); 
			$ebs_seo_cp_twitter = htmlentities( $_POST['ebs_seo_cp_twitter'] ); update_option('ebs_seo_cp_twitter', $ebs_seo_cp_twitter); 
			$ebs_seo_cp_youtube = htmlentities( $_POST['ebs_seo_cp_youtube'] ); update_option('ebs_seo_cp_youtube', $ebs_seo_cp_youtube); 
			$ebs_seo_cp_linkedin = htmlentities( $_POST['ebs_seo_cp_linkedin'] ); update_option('ebs_seo_cp_linkedin', $ebs_seo_cp_linkedin); 
			$ebs_seo_cp_pinterest = htmlentities( $_POST['ebs_seo_cp_pinterest'] ); update_option('ebs_seo_cp_pinterest', $ebs_seo_cp_pinterest); 
			$ebs_seo_cp_googleplaces = htmlentities( $_POST['ebs_seo_cp_googleplaces'] ); update_option('ebs_seo_cp_googleplaces', $ebs_seo_cp_googleplaces); 
			$ebs_seo_cp_googleplus = htmlentities( $_POST['ebs_seo_cp_googleplus'] ); update_option('ebs_seo_cp_googleplus', $ebs_seo_cp_googleplus); 
			$ebs_seo_cp_yelp = htmlentities( $_POST['ebs_seo_cp_yelp'] ); update_option('ebs_seo_cp_yelp', $ebs_seo_cp_yelp); 
			$ebs_seo_cp_merchantcircle = htmlentities( $_POST['ebs_seo_cp_merchantcircle'] ); update_option('ebs_seo_cp_merchantcircle', $ebs_seo_cp_merchantcircle); 
			$ebs_seo_cp_hotfrog = htmlentities( $_POST['ebs_seo_cp_hotfrog'] ); update_option('ebs_seo_cp_hotfrog', $ebs_seo_cp_hotfrog); 
			$ebs_seo_cp_foursquare = htmlentities( $_POST['ebs_seo_cp_foursquare'] ); update_option('ebs_seo_cp_foursquare', $ebs_seo_cp_foursquare); 
			$ebs_seo_cp_flickr = htmlentities( $_POST['ebs_seo_cp_flickr'] ); update_option('ebs_seo_cp_flickr', $ebs_seo_cp_flickr); 
			$ebs_seo_cp_digg = htmlentities( $_POST['ebs_seo_cp_digg'] ); update_option('ebs_seo_cp_digg', $ebs_seo_cp_digg); 
			$ebs_seo_cp_tumblr = htmlentities( $_POST['ebs_seo_cp_tumblr'] ); update_option('ebs_seo_cp_tumblr', $ebs_seo_cp_tumblr); 
			$ebs_seo_cp_stumbleupon = htmlentities( $_POST['ebs_seo_cp_stumbleupon'] ); update_option('ebs_seo_cp_stumbleupon', $ebs_seo_cp_stumbleupon); 
			$ebs_seo_cp_delicious = htmlentities( $_POST['ebs_seo_cp_delicious'] ); update_option('ebs_seo_cp_delicious', $ebs_seo_cp_delicious); 
			        
			$updated_blurb = '<div style="width:99%; padding: 5px;" class="updated below-h2"><strong>Expert Business Search Local SEO plugin options saved.</strong></div>';
			
		} else {  
			//if old style options are present, update them and delete the old options

            //Normal page display including options if already set 
			$ebs_seo_cp_url = get_option('ebs_seo_cp_url'); 
			$ebs_seo_cp_name = get_option('ebs_seo_cp_name'); 
			$ebs_seo_cp_address = get_option('ebs_seo_cp_address'); 
			$ebs_seo_cp_apt = get_option('ebs_seo_cp_apt'); 
			$ebs_seo_cp_city = get_option('ebs_seo_cp_city'); 
			$ebs_seo_cp_state = get_option('ebs_seo_cp_state'); 
			$ebs_seo_cp_zip = get_option('ebs_seo_cp_zip'); 
			$ebs_seo_cp_country = get_option('ebs_seo_cp_country'); 
			
			$ebs_seo_cp_full_phone_1 = get_option('ebs_seo_cp_full_phone_1'); 
			$ebs_seo_cp_full_phone_2 = get_option('ebs_seo_cp_full_phone_2'); 
			$ebs_seo_cp_full_phone_3 = get_option('ebs_seo_cp_full_phone_3'); 

			
			$ebs_seo_cp_email = get_option('ebs_seo_cp_email'); 			
			
			$ebs_seo_cp_map_full_view = get_option('ebs_seo_cp_map_full_view');
			$ebs_seo_cp_latitude = get_option('ebs_seo_cp_latitude'); 
			$ebs_seo_cp_longitude = get_option('ebs_seo_cp_longitude'); 
			$ebs_seo_cp_map_name = get_option('ebs_seo_cp_map_name'); 
			$ebs_seo_cp_map_width = get_option('ebs_seo_cp_map_width'); 
			$ebs_seo_cp_map_height = get_option('ebs_seo_cp_map_height'); 
			$ebs_seo_cp_map_tld = get_option('ebs_seo_cp_map_tld'); 
			
			$ebs_seo_cp_hours_full_view = get_option('ebs_seo_cp_hours_full_view'); 
			$ebs_seo_cp_hours_heading = get_option('ebs_seo_cp_hours_heading'); 
			
			$ebs_seo_cp_monday = get_option('ebs_seo_cp_monday'); 
			$ebs_seo_cp_tuesday = get_option('ebs_seo_cp_tuesday'); 
			$ebs_seo_cp_wednesday = get_option('ebs_seo_cp_wednesday'); 
			$ebs_seo_cp_thursday = get_option('ebs_seo_cp_thursday'); 
			$ebs_seo_cp_friday = get_option('ebs_seo_cp_friday'); 
			$ebs_seo_cp_saturday = get_option('ebs_seo_cp_saturday'); 
			$ebs_seo_cp_sunday = get_option('ebs_seo_cp_sunday');			
			
			$ebs_seo_cp_open_monday = get_option('ebs_seo_cp_open_monday'); 
			$ebs_seo_cp_open_tuesday = get_option('ebs_seo_cp_open_tuesday'); 
			$ebs_seo_cp_open_wednesday = get_option('ebs_seo_cp_open_wednesday'); 
			$ebs_seo_cp_open_thursday = get_option('ebs_seo_cp_open_thursday'); 
			$ebs_seo_cp_open_friday = get_option('ebs_seo_cp_open_friday'); 
			$ebs_seo_cp_open_saturday = get_option('ebs_seo_cp_open_saturday'); 
			$ebs_seo_cp_open_sunday = get_option('ebs_seo_cp_open_sunday');
						
			$ebs_seo_cp_close_monday = get_option('ebs_seo_cp_close_monday'); 
			$ebs_seo_cp_close_tuesday = get_option('ebs_seo_cp_close_tuesday'); 
			$ebs_seo_cp_close_wednesday = get_option('ebs_seo_cp_close_wednesday'); 
			$ebs_seo_cp_close_thursday = get_option('ebs_seo_cp_close_thursday'); 
			$ebs_seo_cp_close_friday = get_option('ebs_seo_cp_close_friday'); 
			$ebs_seo_cp_close_saturday = get_option('ebs_seo_cp_close_saturday'); 
			$ebs_seo_cp_close_sunday = get_option('ebs_seo_cp_close_sunday');
			
			$ebs_seo_cp_location_full_view = get_option('ebs_seo_cp_location_full_view');
			$ebs_seo_cp_location_img = get_option('ebs_seo_cp_location_img');
			$ebs_seo_cp_logo_full_view = get_option('ebs_seo_cp_logo_full_view');
			$ebs_seo_cp_logo_img = get_option('ebs_seo_cp_logo_img');
			
			$ebs_seo_cp_qr_full_view = get_option('ebs_seo_cp_qr_full_view');
			$ebs_seo_cp_qr = get_option('ebs_seo_cp_qr');
			$ebs_seo_cp_payment_full_view = get_option('ebs_seo_cp_payment_full_view');
			$ebs_seo_cp_payment = get_option('ebs_seo_cp_payment');
			$ebs_seo_cp_currencies = get_option('ebs_seo_cp_currencies');
			$ebs_seo_cp_pricerange = get_option('ebs_seo_cp_pricerange');
			
			$ebs_seo_cp_social_media_full_view = get_option('ebs_seo_cp_social_media_full_view');
			$ebs_seo_cp_facebook = get_option('ebs_seo_cp_facebook');
			$ebs_seo_cp_twitter = get_option('ebs_seo_cp_twitter');
			$ebs_seo_cp_youtube = get_option('ebs_seo_cp_youtube');
			$ebs_seo_cp_linkedin = get_option('ebs_seo_cp_linkedin');
			$ebs_seo_cp_pinterest = get_option('ebs_seo_cp_pinterest');			
			$ebs_seo_cp_googleplaces = get_option('ebs_seo_cp_googleplaces');
			$ebs_seo_cp_googleplus = get_option('ebs_seo_cp_googleplus');
			$ebs_seo_cp_yelp = get_option('ebs_seo_cp_yelp');
			$ebs_seo_cp_merchantcircle = get_option('ebs_seo_cp_merchantcircle');
			$ebs_seo_cp_hotfrog = get_option('ebs_seo_cp_hotfrog');
			$ebs_seo_cp_flickr = get_option('ebs_seo_cp_flickr');
			$ebs_seo_cp_digg = get_option('ebs_seo_cp_digg');
			$ebs_seo_cp_foursquare = get_option('ebs_seo_cp_foursquare');
			$ebs_seo_cp_tumblr = get_option('ebs_seo_cp_tumblr');
			$ebs_seo_cp_stumbleupon = get_option('ebs_seo_cp_stumbleupon');
			$ebs_seo_cp_delicious = get_option('ebs_seo_cp_delicious');
        }  
		
            ?>  
<div class="wrap">
	<h2>Local Search SEO Contact Page by ExpertBusinessSearch.com</h2>	
	<?php if($updated_blurb) { echo $updated_blurb;}?>
	<form name="ebs_seo_cp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">	
	<input type="hidden" name="ebs_seo_cp_hidden" value="Y">  
	<div class="metabox-holder has-right-sidebar">		
		<div class="inner-sidebar"> 
			<div class="postbox">
				<h3><span><?php _e('Upgrade now! ', 'ebs-seo-cp-loc'); ?></span></h3>
				<div class="inside">
				<p><?php _e( '<a href="http://www.expertbusinesssearch.com/store/premium-local-search-seo-contact-page/" alt="ExpertBusinessSearch.com PREMIUM Local Search SEO Contact Page Plugin for WordPress">The PREMIUM ExpertBusinessSearch.com Local Search SEO Contact Page Plugin for WordPress.</a>', 'ebs-seo-cp-loc'); ?>
			
			<p><?php _e( 'We took our plugin back to the drawing board and implemented heaps of powerful new features to get the most out of your Local Search Engine Optimization strategy. Here is a brief overview of what we have to offer:', 'ebs-seo-cp-loc'); ?>
			<ol>
				<li><?php _e( '<strong>Multiple location support!</strong>', 'ebs-seo-cp-loc'); ?>
				<li><?php _e( '<strong>New and improved interface!</strong>', 'ebs-seo-cp-loc'); ?>
				<li><?php _e( '<strong>Widgets!</strong>', 'ebs-seo-cp-loc'); ?>
				<li><?php _e( '<strong>Backup your location data!</strong>', 'ebs-seo-cp-loc'); ?>
				<li><?php _e( '<strong>Maps iFrame URL override</strong>', 'ebs-seo-cp-loc'); ?>
				<li><?php _e( '<strong>More exciting new features to come!</strong> ', 'ebs-seo-cp-loc'); ?>
			
			</ol>	
			<div align="center"><a href="http://www.expertbusinesssearch.com/store/premium-local-search-seo-contact-page/" alt="ExpertBusinessSearch.com PREMIUM Local Search SEO Contact Page Plugin for WordPress" class="ebs-buy-now">Buy Now!</a></div>
			
				</div>
			</div> 
			<div class="postbox">
				<h3><span><?php _e('Need support? ', 'ebs-seo-cp-loc'); ?></span></h3>
				<div class="inside">
					<p><?php _e( 'Check out the <a href="http://wordpress.org/support/plugin/local-search-seo-contact-page" target="_blank">free support forum on WordPress.org</a> to see if your issue has not already been solved, or to post your question so that others may benefit from your resolution. Some questions can be answered quickly via <a href="mailto:wpsupport@expertbusinesssearch.com">E-Mail</a>, or click <a href="http://www.expertbusinesssearch.com/support/options/" target="_blank">here</a> to view our premium support options. ', 'ebs-seo-cp-loc'); ?>
				</div>
			</div> 
	
			<div class="postbox">
				<h3><span><?php _e( 'Shortcodes: ', 'ebs-seo-cp-loc'); ?></span></h3>
				<div class="inside">
					<table class="widefat">
					<tr><td><?php _e( 'Copy and paste the following shortcodes to use on your page.', 'ebs-seo-cp-loc') ?></td></tr>
					<tr class="alternate">
			<td valign="top"><code>[ebs_seo_cp_full]</code><br /><?php _e( 'If you want to use the entire contact form including contact information, hours of operation, payment options, QR code, and Google map. The layout is already organized for you. <br />You can also create your own layout using HTML and then use the shortcodes individually.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr>
			<td valign="top"><code>[ebs_seo_cp_contact_only]</code><br /><?php _e( 'To display the contact information only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr class="alternate">
			<td valign="top"><code>[ebs_seo_cp_logo_only]</code><br /><?php _e( 'To display the logo of your company only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr>
			<td valign="top"><code>[ebs_seo_cp_location_only]</code><br /><?php _e( 'To display the location image of your company only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr class="alternate">
			<td valign="top"><code>[ebs_seo_cp_hours_only]</code></br><?php _e( 'To display the hours of operation only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr>
			<td valign="top"><code>[ebs_seo_cp_payment_forms_only]</code><br /><?php _e( 'To display the payment methods only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr class="alternate">
			<td valign="top"><code>[ebs_seo_cp_social_media_only]</code><br /><?php _e( 'To display the social media buttons only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr>
			<td valign="top"><code>[ebs_seo_cp_qr_code_only]</code><br /><?php _e( 'To display the QR code only.', 'ebs-seo-cp-loc') ?></td>
		</tr>
		<tr class="alternate">
			<td valign="top"><code>[ebs_seo_cp_map_only width="x" height="x"]</code><br /><?php _e( 'To display the Google Maps iFrame only. Width and Height are optional.', 'ebs-seo-cp-loc') ?></td>
		</tr>
						
					</table>
				</div>
			</div> 
		</div>
 
		<div id="post-body">
			<div id="post-body-content">			
				<div class="postbox">
				<h3><span><?php _e( 'Contact information: ', 'ebs-seo-cp-loc'); ?></span></h3>
				<div class="inside">
					<table class="widefat">
<tr><td width="200"><label class="row-title" for="ebs_seo_cp_name"><?php _e('Name:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_name" value="<?php echo $ebs_seo_cp_name; ?>" size="30"><?php _e(' ex: Expert Business Search, LLC', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_address"><?php _e('Street:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_address" value="<?php echo $ebs_seo_cp_address; ?>" size="30"><?php _e(' ex: 7867 24 Mile Road', 'ebs-seo-cp-loc'); ?></td></tr> 
<tr><td><label class="row-title" for="ebs_seo_cp_apt"><?php _e('Unit Number:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_apt" value="<?php echo $ebs_seo_cp_apt; ?>" size="30"><?php _e(' ex: Suite 10', 'ebs-seo-cp-loc'); ?></td></tr> 
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_city"><?php _e('City:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_city" value="<?php echo $ebs_seo_cp_city; ?>" size="30"><?php _e(' ex: Shelby Twp', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td><label class="row-title" for="ebs_seo_cp_state"><?php _e('State:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_state" value="<?php echo $ebs_seo_cp_state; ?>" size="30"><?php _e(' ex: MI', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_zip"><?php _e('Zip:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_zip" value="<?php echo $ebs_seo_cp_zip; ?>" size="30"><?php _e(' ex: 48316', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td><label class="row-title" for="ebs_seo_cp_country"><?php _e('Country:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_country" value="<?php echo $ebs_seo_cp_country; ?>" size="30"><?php _e(' ex: USA', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_full_phone_1"><?php _e('Phone:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_full_phone_1" value="<?php echo $ebs_seo_cp_full_phone_1; ?>" size="30"><?php _e(' ex: +1-586-232-4268', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td><label class="row-title" for="ebs_seo_cp_full_phone_2"><?php _e('Alt. Phone:', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_full_phone_2" value="<?php echo $ebs_seo_cp_full_phone_2; ?>" size="30"><?php _e(' ex: 1 (800) 555-5555', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_full_phone_3"><?php _e('Fax:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_full_phone_3" value="<?php echo $ebs_seo_cp_full_phone_3; ?>" size="30"><?php _e(' ex: +44 020 7555 5555', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td><label class="row-title" for="ebs_seo_cp_email"><?php _e('Email:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_email" value="<?php echo $ebs_seo_cp_email; ?>" size="30"><?php _e(' ex: Support@ExpertSupportNow.com', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_url"><?php _e('Company URL:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_url" value="<?php echo  html_entity_decode( $ebs_seo_cp_url ); ?>" size="30"><?php _e(' ex: http://ExpertBusinessSearch.com', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td><label class="row-title" for="ebs_seo_cp_latitude"><?php _e('Latitude:', 'ebs-seo-cp-loc'); ?> </label></td><td><input type="text" name="ebs_seo_cp_latitude" value="<?php echo $ebs_seo_cp_latitude; ?>" size="30"><?php _e(' ex: 42.684045', 'ebs-seo-cp-loc'); ?></td></tr>
<tr class="alternate"><td><label class="row-title" for="ebs_seo_cp_longitude"><?php _e('Longitude:', 'ebs-seo-cp-loc'); ?> </td><td><input type="text" name="ebs_seo_cp_longitude" value="<?php echo $ebs_seo_cp_longitude; ?>" size="30"><?php _e(' ex: -83.035554', 'ebs-seo-cp-loc'); ?></td></tr>
<tr><td colspan='2'><a href='http://www.geo-tag.de/generator/en.html' target='_blank'><?php _e('Click here to find your latitude and longitude.', 'ebs-seo-cp-loc'); ?></a></td></tr>
					</table>
					<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
				</div>
			</div> 
			<div class="postbox">
				<h3><span><?php _e('Hours of operation:', 'ebs-seo-cp-loc');?></span></h3>
				<div class="inside">
					<table class="widefat">				
			<tr class="form-invalid"><td colspan="4"><span style="color:#ff0000; font-weight: bold;"><?php _e('You must use 24-hour formatted time here. See <a target="_blank" href="http://en.wikipedia.org/wiki/24-hour_clock">Wikipedia</a>', 'ebs-seo-cp-loc');?></span></tr></td>
			<tr><td colspan="2"><label class="right" for="ebs_seo_cp_hours_full_view"><?php _e('Show hours block on full page: ', 'ebs-seo-cp-loc'); ?></label></td><td colspan="2"><input type="checkbox" id="ebs_seo_cp_hours_full_view" name="ebs_seo_cp_hours_full_view" value="enabled" <?php if($ebs_seo_cp_hours_full_view == true) { echo "checked"; } ?>></td></tr>
			<tr class="alternate"><td colspan="2" ><label class="right" for="ebs_seo_cp_hours_heading"><?php _e('Hours heading: ', 'ebs-seo-cp-loc'); ?></label></td><td colspan="2"><input type="text" name="ebs_seo_cp_hours_heading"value="<?php echo $ebs_seo_cp_hours_heading; ?>" size="30"><?php _e(' ex: Hours of Operation:', 'ebs-seo-cp-loc');?></td></tr>
			<tr>
				<td width="75">&nbsp;&nbsp;<?php _e('Open?');?>&nbsp;&nbsp;</td>
				<td width="110"><?php _e('Day', 'ebs-seo-cp-loc');?></td>
				<td width="125"><?php _e('Opens', 'ebs-seo-cp-loc');?></td>
				<td><?php _e('Closes', 'ebs-seo-cp-loc');?></td>
			</tr>
			<tr class="alternate">
				<td align="center"><input type="checkbox" id="ebs_seo_cp_sunday" name="ebs_seo_cp_sunday" value="closed" <?php if($ebs_seo_cp_sunday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_sunday"><?php _e('Sunday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_sunday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_sunday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_sunday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_sunday; ?>" size="20"></td>
			</tr>
			<tr>
				<td align="center"><input type="checkbox" id="ebs_seo_cp_monday" name="ebs_seo_cp_monday" value="closed" <?php if($ebs_seo_cp_monday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Monday"><?php _e('Monday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_monday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_monday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_monday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_monday; ?>" size="20"></td>
			</tr>
			<tr class="alternate">
				<td align="center"><input type="checkbox" id="ebs_seo_cp_tuesday" name="ebs_seo_cp_tuesday" value="closed" <?php if($ebs_seo_cp_tuesday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Tuesday"><?php _e('Tuesday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_tuesday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_tuesday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_tuesday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_tuesday; ?>" size="20"></td>
			</tr>
			<tr>
				<td align="center"><input type="checkbox" id="ebs_seo_cp_wednesday" name="ebs_seo_cp_wednesday" value="closed" <?php if($ebs_seo_cp_wednesday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Wednesday"><?php _e('Wednesday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_wednesday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_wednesday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_wednesday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_wednesday; ?>" size="20"></td>
			</tr>
			<tr class="alternate">
				<td align="center"><input type="checkbox" id="ebs_seo_cp_thursday" name="ebs_seo_cp_thursday" value="closed" <?php if($ebs_seo_cp_thursday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Thursday"><?php _e('Thursday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_thursday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_thursday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_thursday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_thursday; ?>" size="20"></td>
			</tr>
			<tr>
				<td align="center"><input type="checkbox" id="ebs_seo_cp_friday" name="ebs_seo_cp_friday" value="closed" <?php if($ebs_seo_cp_friday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Friday"><?php _e('Friday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_friday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_friday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_friday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_friday; ?>" size="20"></td>
			</tr>
			<tr class="alternate">
				<td align="center"><input type="checkbox" id="ebs_seo_cp_saturday" name="ebs_seo_cp_saturday" value="closed" <?php if($ebs_seo_cp_saturday == true) { echo "checked"; } ?>></td>
				<td><label class="right" for="ebs_seo_cp_Saturday"><?php _e('Saturday: ', 'ebs-seo-cp-loc'); ?></label></td>
				<td><input type="text" name="ebs_seo_cp_open_saturday" style="width:5em;" value="<?php echo $ebs_seo_cp_open_saturday; ?>" size="20"></td>
				<td><input type="text" name="ebs_seo_cp_close_saturday" style="width:5em;" value="<?php echo $ebs_seo_cp_close_saturday; ?>" size="20"></td>
			</tr>
					</table>
					<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
				</div>
			</div> 
			
				<div class="postbox">
					<h3><span><?php _e('Company logo and building image settings: ', 'ebs-seo-cp-loc'); ?></span></h3>
					<div class="inside">
						<table class="widefat">
		<tr class="alternate"><td width="200"><label class="right" for="ebs_seo_cp_location_full_view"><?php _e('Show building image on full page: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="checkbox" id="ebs_seo_cp_location_full_view" name="ebs_seo_cp_location_full_view" value="enabled" <?php if($ebs_seo_cp_location_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_location_img"><?php _e('Company building image: '); ?></label></td><td><input id="location_data" type="text" size="36" name="ebs_seo_cp_location_img" value="<?php echo $ebs_seo_cp_location_img; ?>" class="upload" /><input id="upload_location" class="button" type="button" value="Upload Image" /><?php _e('ex: http://domain.com/wp-content/uploads/2013/04/image.png'); ?></td></tr>

		<tr><td><label class="right" for="ebs_seo_cp_logo_full_view"><?php _e('Show logo on full page: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="checkbox" id="ebs_seo_cp_logo_full_view" name="ebs_seo_cp_logo_full_view" value="enabled" <?php if($ebs_seo_cp_logo_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr><td><label class="right" for="ebs_seo_cp_logo_img"><?php _e('Company logo image: ', 'ebs-seo-cp-loc'); ?></label></td><td><input id="logo_data" type="text" size="36" name="ebs_seo_cp_logo_img" value="<?php echo $ebs_seo_cp_logo_img; ?>" class="upload" /><input id="upload_logo" class="button" type="button" value="Upload Image" /><?php _e('ex: http://domain.com/wp-content/uploads/2013/04/image.png', 'ebs-seo-cp-loc'); ?></td></tr>

						</table>
						<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
					</div>
				</div>
 
				<div class="postbox">
					<h3><span><?php _e( 'Forms of payment: ', 'ebs-seo-cp-loc'); ?></span></h3>
					<div class="inside">
						<table class="widefat">
		<tr><td width="200"><label class="right" for="ebs_seo_cp_payment_full_view"><?php _e('Show payments on full page: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="checkbox" id="ebs_seo_cp_payment_full_view" name="ebs_seo_cp_payment_full_view" value="enabled" <?php if($ebs_seo_cp_payment_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_payment"><?php _e('Payment forms accepted: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_payment" value="<?php echo $ebs_seo_cp_payment; ?>" size="55"><?php _e(' ex: Cash, Check, Visa, Paypal.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr><td><label class="right" for="ebs_seo_cp_currencies"><?php _e('Currencies accepted: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_currencies" value="<?php echo $ebs_seo_cp_currencies; ?>" size="55"><?php _e(' ex: USD, CAD, GBP - see <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_4217">Wikipedia</a> for full list.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_pricerange"><?php _e('Price range (for Google listings): ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_pricerange" value="<?php echo $ebs_seo_cp_pricerange; ?>" size="10"><?php _e(' Enter a range from $ to $$$$$. Does not apply to most businesses, leave blank and the plugin will hide.', 'ebs-seo-cp-loc'); ?></td></tr>
						</table>
						<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
					</div>
				</div>
 
				<div class="postbox">
					<h3><span><?php _e('Google map options: ', 'ebs-seo-cp-loc'); ?></span></h3>
					<div class="inside">
						<table class="widefat">
		<tr><td width="200"><label class="right" for="ebs_seo_cp_map_full_view"><?php _e('Show map on full page: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="checkbox" id="ebs_seo_cp_map_full_view" name="ebs_seo_cp_map_full_view" value="enabled" <?php if($ebs_seo_cp_map_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_map_name"><?php _e('Business name on the map: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_map_name" size="49" value="<?php echo $ebs_seo_cp_map_name; ?>"><br /><?php _e('Fill in your Google Place or company name here. If your map is not working, leave this blank to remove the business name from the search.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr><td><label class="right" for="ebs_seo_cp_map_tld"><?php _e('Google maps top-level-domain: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="text" name="ebs_seo_cp_map_tld" size="5" value="<?php echo $ebs_seo_cp_map_tld; ?>"><br /><?php _e('This is the top level domain for Google maps in your locale. Example: If you live in the United States, this would be "com" for maps.google.<b>com</b>. If you live in Canada, this would be "ca" for maps.google.<b>ca</b>', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr class="alternate"><td colspan="2"><?php _e('Map dimensions:', 'ebs-seo-cp-loc'); ?><br /><?php _e('This will set the default map size for all shortcodes. You can override the default set here on the map-only shortcode display by specifying the length and width arguments. The defaults are 350 pixels tall by 500 pixels wide.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_map_height"><?php _e('Map height: '); ?></label></td><td><input type="text" name="ebs_seo_cp_map_height" size="5" value="<?php echo $ebs_seo_cp_map_height; ?>"></td></tr>
		<tr class="alternate"><td><label class="right" for="ebs_seo_cp_map_width"><?php _e('Map width: '); ?></label></td><td><input type="text" name="ebs_seo_cp_map_width" size="5" value="<?php echo $ebs_seo_cp_map_width; ?>"></td></tr>
						</table>
						<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
					</div>
				</div>
 
				<div class="postbox">
					<h3><span><?php _e( 'Custom QR Code: ', 'ebs-seo-cp-loc'); ?></span></h3>
					<div class="inside">
						<table class="widefat">
		<tr><td colspan="2"><?php _e('By default, your QR code will display driving directions from Google maps. Use this option to cusomize your QR code or leave it blank to use the default of driving options.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr class="alternate"><td width="200"><label class="right" for="ebs_seo_cp_qr_full_view"><?php _e('Show QR Code on full page view: ', 'ebs-seo-cp-loc'); ?></label></td><td><input type="checkbox" id="ebs_seo_cp_qr_full_view" name="ebs_seo_cp_qr_full_view" value="enabled" <?php if($ebs_seo_cp_qr_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr><td><label class="right" for="ebs_seo_cp_qr"><?php _e('Link: '); ?></label></td><td><input type="text" name="ebs_seo_cp_qr" value="<?php echo  html_entity_decode( $ebs_seo_cp_qr ); ?>" size="55"></td></tr>
		<tr class="alternate"><td colspan="2">
<table class="widefat">
	<thead>
		<tr><th colspan="2"><?php _e( 'Examples: ', 'ebs-seo-cp-loc'); ?></th></tr>
	</thead>
	<tbody>
			<tr><td valign="top" width="175"><?php _e( 'URL: ', 'ebs-seo-cp-loc'); ?></td><td valign="top"><strong>http://www.ExpertBusinessSearch.com</strong></td></tr>
			<tr class="alternate"><td valign="top"><?php _e( 'Email: ', 'ebs-seo-cp-loc'); ?></td><td valign="top"><strong>mailto:Support@ExpertBusinessSearch.com</strong></td></tr>
			<tr><td valign="top"><?php _e( 'Phone: ', 'ebs-seo-cp-loc'); ?></td><td valign="top"><strong>tel:+15862324268</strong></td></tr>
			<tr class="alternate"><td valign="top"><?php _e( 'Geo-code (longitude, latitude): ', 'ebs-seo-cp-loc'); ?></td><td valign="top"><strong>geo:42.684045,-83.035554,100</strong></td></tr>
		
	</tbody></table>
		</td></tr>
						</table>
						<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
					</div>
				</div>
 
				<div class="postbox">
					<h3><span><?php _e( 'Social Media Buttons: ', 'ebs-seo-cp-loc'); ?></span></h3>
					<div class="inside">
						<table class="widefat">
						<tr><td colspan="4"><?php _e('Use links to your social media pages. If you don\'t have one, just leave it blank. Hover over the icon if you aren\'t sure what it stands for.', 'ebs-seo-cp-loc'); ?></td></tr>
		<tr><td colspan="4"><label for="ebs_seo_cp_social_media_full_view"><?php _e('Show social media on full page view: '); ?></label><input type="checkbox" id="ebs_seo_cp_social_media_full_view" name="ebs_seo_cp_social_media_full_view" value="enabled" <?php if($ebs_seo_cp_social_media_full_view == true) { echo "checked"; } ?>></td></tr>
		<tr class="alternate"><td width="35" >
		<img alt='Facebook' title='Facebook' src='<?php echo plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Facebook.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_facebook" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_facebook ); ?>"></td>
		<td width="35" align="right"><img alt='Twitter' title='Twitter' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Twitter.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_twitter" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_twitter ); ?>"></td></tr>
		<tr><td width="35" ><img alt='Youtube' title='Youtube' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Youtube.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_youtube" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_youtube ); ?>"></td>
		<td width="35" align="right"><img alt='LinkedIn' title='LinkedIn' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Linked In.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_linkedin" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_linkedin ); ?>"></td></tr>
		<tr class="alternate"><td width="35" ><img alt='Google Places' title='Google Places' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Google Places Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_googleplaces" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_googleplaces ); ?>"></td>
		<td width="35" align="right"><img alt='Google+' title='Google+' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Google Plus Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_googleplus" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_googleplus ); ?>"></td></tr>
		<tr><td width="35" ><img alt='Yelp' title='Yelp' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Yelp Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_yelp" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_yelp ); ?>"></td>
		<td width="35" align="right"><img alt='Pinterest' title='Pinterest' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Pinterest.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_pinterest" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_pinterest ); ?>"></td></tr>			
		<tr class="alternate"><td width="35" ><img alt='Hot Frog' title='Hot Frog' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Hot Frog Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_hotfrog" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_hotfrog ); ?>"></td>
		<td width="35" align="right"><img alt='Foursquare' title='Foursquare' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Foursquare Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_foursquare" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_foursquare ); ?>"></td></tr>
		<tr><td width="35" ><img alt='Flickr' title='Flickr' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Flickr Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_flickr" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_flickr ); ?>"></td>
		<td width="35" align="right"><img alt='Digg' title='Digg' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Digg Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_digg" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_digg ); ?>"></td></tr>
		<tr class="alternate"><td width="35" ><img alt='Tumblr' title='Tumblr' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Tumblr Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_tumblr" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_tumblr ); ?>"></td>
		<td width="35" align="right"><img alt='Stumbleupon' title='Stumbleupon' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Stumble Upon Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_stumbleupon" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_stumbleupon ); ?>"></td></tr>
		<tr><td width="35" ><img alt='Del.icio.us' title='Del.icio.us' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Del.icio.us Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_delicious" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_delicious ); ?>"></td>
		<td width="35" align="right"><img alt='Merchant Circle' title='Merchant Circle' src='<?php echo plugins_url('images/SEO Contact Page Expert Business Now Merchant Circle Logo.png', __FILE__);?>' height='20'></td><td><input type="text" name="ebs_seo_cp_merchantcircle" style="width:100%" value="<?php echo html_entity_decode( $ebs_seo_cp_merchantcircle ); ?>"></td></tr>
	</table>
	<p class="submit"><input class="button" type="submit" name="Submit" value="<?php _e('Update Options', 'ebs-seo-cp-loc') ?>" />
					</div>
				</div> 
			</div>
		</div>
	</div>
	</form>
</div>