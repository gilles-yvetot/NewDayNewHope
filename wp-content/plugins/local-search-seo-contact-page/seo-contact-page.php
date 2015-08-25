<?php
/*
Plugin Name: Local Search SEO Contact Page
Plugin URI: http://wordpress.org/plugins/local-search-seo-contact-page/
Description: Drive customers right to your website! The Local Search SEO Contact Page offers you an easy method of marking up your web page with Schema.org. Search engines index this data to provide local searchers with more relevant results. Simply enter all of your information into the settings page, and use any one of the available shortcodes to output your contact information.
Version: 2.1.7
Author: Expert Business Search, LLC
Author URI: http://www.expertbusinesssearch.com/
*/

/**************** Temporary Translations ******************/
$monday = __('Monday', 'ebs-seo-cp-loc');
$tuesday = __('Tuesday', 'ebs-seo-cp-loc');
$wednesday = __('Wednesday', 'ebs-seo-cp-loc');
$thursday = __('Thursday', 'ebs-seo-cp-loc');
$friday = __('Friday', 'ebs-seo-cp-loc');
$saturday = __('Saturday', 'ebs-seo-cp-loc');
$sunday = __('Sunday', 'ebs-seo-cp-loc');

$telephone_1 = __('Telephone: ', 'ebs-seo-cp-loc');
$telephone_2 = __('Telephone: ', 'ebs-seo-cp-loc');
$telephone_3 = __('Fax: ', 'ebs-seo-cp-loc');

$email = __('Email: ', 'ebs-seo-cp-loc');

//the heading for Hours of Operation is already editable on the plugin settings page.

$payments = __('Payments accepted: ', 'ebs-seo-cp-loc'); 
$currencies =  __('Currencies accepted: ', 'ebs-seo-cp-loc');

$scan_with_your_smartphone = __('Scan with your smartphone <br>to get directions.', 'ebs-seo-cp-loc');

/************ End Temporary Translations ******************/



/**********************************************************/
/************ Do Not Edit Below This Line *****************/
/**********************************************************/

function ebs_seo_cp_admin() {
	include('seo-contact-page-settings.php');
}
//Add admin page
function ebs_seo_cp_actions() {
	$ebs_options_page = add_options_page( 'SEO Contact Page', 'SEO Contact Page', 1, 'seo-contact-page-settings.php', 'ebs_seo_cp_admin' );

	add_action('admin_print_scripts-' . $ebs_options_page, 'ebs_seo_cp_init_admin_scripts');
	add_action('admin_print_styles-' . $ebs_options_page, 'ebs_seo_cp_init_admin_styles');
}

//Add admin page action
add_action('admin_menu', 'ebs_seo_cp_actions');

//Queue stylesheet
add_action('wp_enqueue_scripts', 'ebs_seo_cp_init_scripts');

//Shortcodes for all or specific parts
add_shortcode('ebs_seo_cp_full', 'ebs_seo_cp_full');
add_shortcode('ebs_seo_cp_contact_only', 'ebs_seo_cp_contact_only');
add_shortcode('ebs_seo_cp_payment_forms_only', 'ebs_seo_cp_payment_forms_only');
add_shortcode('ebs_seo_cp_qr_code_only', 'ebs_seo_cp_qr_code_only');
add_shortcode('ebs_seo_cp_map_only', 'ebs_seo_cp_map_only');
add_shortcode('ebs_seo_cp_hours_only', 'ebs_seo_cp_hours_only');
add_shortcode('ebs_seo_cp_social_media_only', 'ebs_seo_cp_social_media_only');

//deprecated shortcodes for backwards compatibility
add_shortcode('seo_contact_page_full', 'ebs_seo_cp_full');
add_shortcode('seo_contact_page_contact_only', 'ebs_seo_cp_contact_only');
add_shortcode('seo_contact_page_payment_forms_only', 'ebs_seo_cp_payment_forms_only');
add_shortcode('seo_contact_page_qr_code_only', 'ebs_seo_cp_qr_code_only');
add_shortcode('seo_contact_page_map_only', 'ebs_seo_cp_map_only');
add_shortcode('seo_contact_page_hours_only', 'ebs_seo_cp_hours_only');
add_shortcode('seo_contact_page_social_media_only', 'ebs_seo_cp_social_media_only');

function ebs_seo_cp_init_scripts() {
	wp_register_style( 'ebs-seo-cp-style', plugins_url('seo-contact-page-style.css', __FILE__) );
	wp_enqueue_style( 'ebs-seo-cp-style' );
}

function ebs_seo_cp_init_admin_scripts() {
    wp_register_script( 'seo-contact-page-admin-script', plugins_url('seo-contact-page-admin-script.js', __FILE__) );
	wp_enqueue_script('seo-contact-page-admin-script');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('jquery');
}

function ebs_seo_cp_init_admin_styles() {
    wp_register_style( 'ebs-seo-cp-admin-style', plugins_url('seo-contact-page-admin-style.css', __FILE__) );
    wp_enqueue_style( 'ebs-seo-cp-admin-style' );
    wp_enqueue_style('thickbox');
}

function ebs_seo_cp_action_links($links, $file) {
    static $this_plugin; 
    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }
    if ($file == $this_plugin) { 
        $link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/options-general.php?page=seo-contact-page-settings.php">Enter your contact info</a>';
 		array_unshift($links, $link);
    } 
    return $links;
}
add_filter('plugin_action_links', 'ebs_seo_cp_action_links', 10, 2);

function ebs_seo_cp_plugin_row_meta($input, $file) {
    static $this_plugin; 
    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }
    if ($file == $this_plugin) {
		$links = array(
			'<a href="http://www.expertbusinesssearch.com/store/premium-local-search-seo-contact-page/">' . esc_html__( 'Go Premium and get new features!', 'ebs_seo_cp' ) . '</a>',
		);
		$input = array_merge( $input, $links );
	}
	
	return $input;
}
add_filter('plugin_row_meta', 'ebs_seo_cp_plugin_row_meta', 10, 2);

function ebs_seo_cp_full($atts, $content = null, $tag) {
	extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );
	
	//Piece together full page from individual shortcodes. Try and keep whitespace under control (missing elements not leaving behind placeholder whitespace)
	$ebs_seo_cp_content = ebs_seo_cp_header();
	
	//Init 2 column Div
	$ebs_seo_cp_content .= "<div style=\"width:100%;\">";
	$ebs_seo_cp_content .= "<div style=\"width:50%; position:relative; float:left;\">";
	
	//Top left: Company logo
	if (get_option('ebs_seo_cp_logo_full_view') == true) {
		$ebs_seo_cp_content .= ebs_seo_cp_logo_img_only($atts, $content, $tag, false);
	}	
	$ebs_seo_cp_content .= "</div>";
	$ebs_seo_cp_content .= "<div style=\"width:50%; position:relative; float:right; text-align:center;\">";
	
	//Top Right: Company location image
	if (get_option('ebs_seo_cp_location_full_view') == true) {
		$ebs_seo_cp_content .= ebs_seo_cp_location_img_only($atts, $content, $tag, false);
	}
	$ebs_seo_cp_content .= "</div>";
	$ebs_seo_cp_content .= "</div>";
	
	//Clear floats for new row
	$ebs_seo_cp_content .= "<div style=\"clear: both;\">&nbsp;</div>";
	$ebs_seo_cp_content .= "<div style=\"width:100%;\">";
	
	//Second row Left
	$ebs_seo_cp_content .= "<div style=\"width:50%; position:relative; float:left;\">";
	
	//Contact information. always visible in full page
	$ebs_seo_cp_content .= ebs_seo_cp_contact_only($atts, $content, $tag, false);
	
	//Hours. Turn on or off in settings.
	if (get_option('ebs_seo_cp_hours_full_view') == true) {
		$ebs_seo_cp_content .= "<br />";	
		$ebs_seo_cp_content .= ebs_seo_cp_hours_only($atts, $content, $tag, false);
	}
	
	//Payment info. Turn on or off in settings.
	if (get_option('ebs_seo_cp_payment_full_view') == true) {
		$ebs_seo_cp_content .= "<br />";	
		$ebs_seo_cp_content .= ebs_seo_cp_payment_forms_only($atts, $content, $tag, false);
	}
	$ebs_seo_cp_content .= "</div>";
	
	//Second row Right
	$ebs_seo_cp_content .= "<div style=\"width:50%; position:relative; float:right; text-align:center;\">";
	
	// Social media. Turn on or off in settings.
	if (get_option('ebs_seo_cp_social_media_full_view') == true) {
		$ebs_seo_cp_content .= ebs_seo_cp_social_media_only($atts, $content, $tag, false);
	}
	
	//QR Code. Turn on or off in settings.
	if (get_option('ebs_seo_cp_qr_full_view') == true) {
		$ebs_seo_cp_content .= ebs_seo_cp_qr_code_only($atts, $content, $tag, false);
	}
	$ebs_seo_cp_content .= "<br /><br />";
	$ebs_seo_cp_content .= "</div>";
	$ebs_seo_cp_content .= "</div>";
	
	//Clear floats for showing full-row map view
	$ebs_seo_cp_content .= "<div style=\"clear: both; padding-top:1em;\">";
	
	//Show map. Turn on or off in settings.
	if (get_option('ebs_seo_cp_map_full_view') == true) {
		$ebs_seo_cp_content .= ebs_seo_cp_map_only($atts, $content, $tag, false);
	}
	$ebs_seo_cp_content .= "</div>";
	$ebs_seo_cp_content .= ebs_seo_cp_footer();
	return $ebs_seo_cp_content;
}

function ebs_seo_cp_header() {
	return "<div itemscope itemtype=\"http://schema.org/LocalBusiness\" class=\"vCard\">";
}
function ebs_seo_cp_footer() {
	return "</div>";
}

function ebs_seo_cp_location_img_only($atts, $content = null, $tag, $wrap = true) {
	if (get_option('ebs_seo_cp_location_img')) { 
		extract( shortcode_atts( array(
			  'location' => '0',
			  ), $atts ) );
		$location_blob = "";		
		//If we are viewing individual shortcode, lets wrap it in Schema.org declaration div tags
		if ($wrap == true) {
			$location_blob .= ebs_seo_cp_header();
		} 		
		//Build image path
		$image_path = get_option('ebs_seo_cp_location_img');				
		$location_blob = "<div itemscope itemtype=\"http://schema.org/ImageObject\" itemprop=\"photo\"><meta itemprop=\"name\" content=\"" . get_option('ebs_seo_cp_name') . "\" /><img class=\"photo\" itemprop=\"image\" width=\"150\" src=\"" . $image_path . "\" title=\"" . get_option('ebs_seo_cp_name') . "\"/></div>";
		//If we are viewing the individual shortcode, lets wrap it in Schema.org declaration div tags
		if ($wrap == true) {
			$location_blob .= ebs_seo_cp_footer();
		}		
		//Return our code blob
		return $location_blob; 
	}
}

function ebs_seo_cp_logo_img_only($atts, $content = null, $tag, $wrap = true) {
	if (get_option('ebs_seo_cp_logo_img')) { 
		extract( shortcode_atts( array(
			  'location' => '0',
			  ), $atts ) );
		$logo_blob = "";
		
		//If we are viewing individual shortcode, lets wrap it in Schema.org declaration div tags
		if ($wrap == true) {
			$logo_blob .= ebs_seo_cp_header();
		} 
		$image_path = get_option('ebs_seo_cp_logo_img');
		$logo_blob = "<div itemscope itemtype=\"http://schema.org/ImageObject\" itemprop=\"logo\"><meta itemprop=\"name\" content=\"" . get_option('ebs_seo_cp_name') . "\" /><img class=\"logo\" itemprop=\"image\" width=\"150\" src=\"" . $image_path . "\" title=\"" . get_option('ebs_seo_cp_name') . "\"/></div>";
		//If we are viewing individual shortcode, lets wrap it in Schema.org declaration div tags
		if ($wrap == true) {
			$logo_blob .= ebs_seo_cp_footer();
		} 
		return $logo_blob; 
	}
}

function ebs_seo_cp_contact_only($atts, $content = null, $tag, $wrap = true) {
	global $telephone_1, $telephone_2, $telephone_3, $email;
	$contact_blob = "";
	//Someone updated the plugin and did not visit their settings page. Lets run the update initialization function right away and report to the main page.
	if (get_option('seo_company_name')) {
		$contact_blob .= "Updating " . get_option('seo_company_name') . "....<br />";
		ebs_seo_cp_update_options();
	}
	extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );		
	//If we are viewing individual shortcode, lets wrap it in Schema.org declaration div tags
	if ($wrap == true) {
		$contact_blob .= ebs_seo_cp_header();
	} 
	$contact_blob .= "<span class=\"updated\" style=\"display:none;\">" . get_option('ebs_seo_cp_updated') . "</span>";
	$contact_blob .= "<meta itemprop=\"map\" content=\"" . ebs_seo_cp_get_map_url() . "\" />";
	//If company URL is present, set company name to a hyperlink for that URL
	if (get_option('ebs_seo_cp_url')) { 
		$contact_blob .= "<a class=\"fn org\" target=\"_blank\" itemprop=\"name\" href=\"" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_url') ) . "\"><span style=\"font-weight:bold;\">" . get_option('ebs_seo_cp_name') . "</span></a>";
	} else {
		$contact_blob .= "<span style=\"font-weight:bold;\">" . get_option('ebs_seo_cp_name') . "</span>";
	}	
	if (get_option('ebs_seo_cp_address')) {
		$contact_blob .= "<div itemscope itemtype=\"http://schema.org/PostalAddress\" itemprop=\"address\" class=\"adr\">";
		$contact_blob .= "<span class=\"street-address\" itemprop=\"streetAddress\">" . get_option('ebs_seo_cp_address') . " " . get_option('ebs_seo_cp_apt') . "</span><br />";
		$contact_blob .= "<span class=\"locality\" itemprop=\"addressLocality\">" . get_option('ebs_seo_cp_city') . "</span>, ";
		$contact_blob .= "<span class=\"region\" itemprop=\"addressRegion\">" . get_option('ebs_seo_cp_state') . "</span>&nbsp;";
		$contact_blob .= "<span class=\"postal-code\" itemprop=\"postalcode\">" . get_option('ebs_seo_cp_zip') . "</span><br />";
		$contact_blob .= "<span itemprop=\"addressCountry\">" . get_option('ebs_seo_cp_country') . "</span> ";
		$contact_blob .= "</div>";
	}	
	if ( $ebs_seo_cp_full_phone_1 = get_option( 'ebs_seo_cp_full_phone_1' ) ) { 
		$phone_1_stripped = preg_replace( '[\D]', '', $ebs_seo_cp_full_phone_1 );
		$contact_blob .= '<div class="tel"><meta itemprop="type" content="Work" /><span class="ebs-seo-cp-telephone" style="font-weight:bold;">' . $telephone_1 . '</span> <meta itemprop="telephone" content="+' . $phone_1_stripped . '" /><abbr class="value" title="+' . $phone_1_stripped . '">' . $ebs_seo_cp_full_phone_1 . '</abbr></div>'; 
	}
	if ( $ebs_seo_cp_full_phone_2 = get_option( 'ebs_seo_cp_full_phone_2' ) ) { 		
		$phone_2_stripped = preg_replace( '[\D]', '', $ebs_seo_cp_full_phone_2 );
		$contact_blob .= '<div class="tel"><meta itemprop="type" content="Work" /><span class="ebs-seo-cp-telephone" style="font-weight:bold;">' . $telephone_2 . '</span> <meta itemprop="telephone" content="+' . $phone_2_stripped . '" /><abbr class="value" title="+' . $phone_2_stripped . '">' . $ebs_seo_cp_full_phone_2 . '</abbr></div>'; 
	}
	if ( $ebs_seo_cp_full_phone_3 = get_option( 'ebs_seo_cp_full_phone_3' ) ) { 		
		$phone_3_stripped = preg_replace( '[\D]', '', $ebs_seo_cp_full_phone_3 );
		$contact_blob .= '<div class="tel"><meta itemprop="type" content="Fax" /><span class="ebs-seo-cp-telephone" style="font-weight:bold;">' . $telephone_3 . '</span> <meta itemprop="faxnumber" content="+' . $phone_3_stripped . '" /><abbr class="value" title="+' . $phone_3_stripped . '">' . $ebs_seo_cp_full_phone_3 . '</abbr></div>'; 
	}	
	if (get_option('ebs_seo_cp_email')) { $contact_blob .= "<span style=\"font-weight:bold;\">" . $email . "</span> <a class=\"email\" itemprop=\"email\" href=\"mailto:" . get_option('ebs_seo_cp_email') . "\">" . get_option('ebs_seo_cp_email') . "</a><br />";}
	if (get_option('ebs_seo_cp_latitude') && get_option('ebs_seo_cp_longitude')) { $contact_blob .= "<div itemscope itemtype=\"http://schema.org/GeoCoordinates\" itemprop=\"geo\"><meta itemprop=\"latitude\" content=\"" . get_option('ebs_seo_cp_latitude') . "\" /><meta itemprop=\"longitude\" content=\"" . get_option('ebs_seo_cp_longitude') . "\" /></div>"; }

	//If we are viewing individual shortcode, lets wrap it in Schema.org declaration div tags
	if ($wrap == true) {
		$contact_blob .= ebs_seo_cp_footer();
	} 
	return $contact_blob;
}

function ebs_seo_cp_get_map_url() {
	$mode = ( !empty( $_SERVER['HTTPS'] ) ? 'https' : 'http' );
	if (get_option('ebs_seo_cp_map_name') != "") {
		$map_url = $mode . "://maps.google." . get_option('ebs_seo_cp_map_tld') . "/maps?q=" . urlencode( get_option('ebs_seo_cp_map_name') . ",+" . get_option('ebs_seo_cp_address') . ",+" . get_option('ebs_seo_cp_city') . ",+" . get_option('ebs_seo_cp_state') . "+" . get_option('ebs_seo_cp_zip') ) . "&hq=" . urlencode( get_option('ebs_seo_cp_map_name') ) . "&hnear=" . urlencode( get_option('ebs_seo_cp_address') . ",+" . get_option('ebs_seo_cp_city') . ",+" . get_option('ebs_seo_cp_state') . "+" . get_option('ebs_seo_cp_zip') ) . "&output=embed";
	} else {
		$map_url = $mode . "://maps.google." . get_option('ebs_seo_cp_map_tld') . "/maps?q=" . urlencode( get_option('ebs_seo_cp_address') . ",+" . get_option('ebs_seo_cp_city') . ",+" . get_option('ebs_seo_cp_state') . "+" . get_option('ebs_seo_cp_zip') ) . "&hnear=" . urlencode( get_option('ebs_seo_cp_address') . ",+" . get_option('ebs_seo_cp_city') . ",+" . get_option('ebs_seo_cp_state') . "+" . get_option('ebs_seo_cp_zip') ) . "&output=embed";
	}
	return htmlentities( $map_url );
}

function ebs_seo_cp_map_only($atts, $content = null, $tag, $wrap = true) {
	extract( shortcode_atts( array(
		  'location' => '0',
		  'width' => get_option('ebs_seo_cp_map_width'),
		  'height' => get_option('ebs_seo_cp_map_height')
		  ), $atts ) );
	$map_blob = "";
	$map_blob .= "<iframe style='border:0;margin:0;overflow:hidden;' width='" . $width . "' height='" . $height . "' scrolling='no'  src='" . ebs_seo_cp_get_map_url() . "'></iframe>";
	return $map_blob;
}

function ebs_seo_cp_hours_only($atts, $content = null, $tag, $wrap = true) {
	global $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday;
	extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );
	$ebs_seo_cp_hours = array(
						$sunday => array(
									"closed" => get_option('ebs_seo_cp_sunday'),
									"shortname" => "Su",
									"open" =>  get_option('ebs_seo_cp_open_sunday'),
									"close" => get_option('ebs_seo_cp_close_sunday')
									),
						$monday => array( 
									"closed" => get_option('ebs_seo_cp_monday'),
									"shortname" => "Mo",
									"open" => get_option('ebs_seo_cp_open_monday'),
									"close" =>  get_option('ebs_seo_cp_close_monday')
									),
						$tuesday => array( 
									"closed" => get_option('ebs_seo_cp_tuesday'),
									"shortname" => "Tu",
									"open" =>  get_option('ebs_seo_cp_open_tuesday'),
									"close" =>  get_option('ebs_seo_cp_close_tuesday')
									),
						$wednesday => array( 
									"closed" => get_option('ebs_seo_cp_wednesday'),
									"shortname" => "We",
									"open" =>  get_option('ebs_seo_cp_open_wednesday'),
									"close" =>  get_option('ebs_seo_cp_close_wednesday')
									),
						$thursday => array( 
									"closed" => get_option('ebs_seo_cp_thursday'),
									"shortname" => "Th",
									"open" =>  get_option('ebs_seo_cp_open_thursday'),
									"close" =>  get_option('ebs_seo_cp_close_thursday')
									),
						$friday => array( 
									"closed" => get_option('ebs_seo_cp_friday'),
									"shortname" => "Fr",
									"open" =>  get_option('ebs_seo_cp_open_friday'),
									"close" =>  get_option('ebs_seo_cp_close_friday')
									),
						$saturday => array(
									"closed" => get_option('ebs_seo_cp_saturday'), 
									"shortname" => "Sa",
									"open" =>  get_option('ebs_seo_cp_open_saturday'),
									"close" =>  get_option('ebs_seo_cp_close_saturday')
									)
						);
	$hours_blob = "";					
	if ($wrap == true) {
		$hours_blob .= ebs_seo_cp_header();
	} 
	if (get_option('ebs_seo_cp_hours_heading')) {
		$hours_blob .= "<span style=\"font-weight:bold;\">" . get_option('ebs_seo_cp_hours_heading') . "</span>" . "<br />";
	}	
	while (list($key, $day) = each($ebs_seo_cp_hours)) {
		if  (!$day['closed'] == true) {
			$shorthours = "00:00-00:00";
			$longhours = __('Closed', 'ebs-seo-cp-loc');			
			$open = "00:00";
			$close = "00:00";
		} else {
			$shorthours = $day['open'] . "-" . $day['close'];
			$longhours = DATE("g:i a", STRTOTIME($day['open'])) . " - " . DATE("g:i a", STRTOTIME($day['close']));
			$open = $day['open'];
			$close = $day['close'];
		}
		$dayname = $key;
		$shortname = $day['shortname'];
		$hours_blob .= "
		<span class=\"ebs-dayname\">" . $dayname . " :</span> <time itemprop=\"openinghours\" datetime=\"" . $shortname . " " . $shorthours . "\">" . $longhours . "</time>
		<div itemprop=\"openingHoursSpecification\" itemscope itemtype=\"http://schema.org/OpeningHoursSpecification\">
			<link itemprop=\"dayOfWeek\" href=\"http://purl.org/goodrelations/v1#" . $dayname . "\" />
			<meta itemprop=\"opens\" content=\"" . $open . "\" />
			<meta itemprop=\"closes\" content=\"" . $close . "\" />
		</div>";
	}
	if ($wrap == true) {
		$hours_blob .= ebs_seo_cp_footer();
	} 
	return $hours_blob;
}
//Display just the payment forms
function ebs_seo_cp_payment_forms_only($atts, $content = null, $tag, $wrap = true) {
	global $payments, $currencies;
	extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );
	$payments_blob = "";
	if ($wrap == true) {
		$payments_blob .= ebs_seo_cp_header();
	} 	
	if (get_option('ebs_seo_cp_payment')) { $payments_blob .=  "<span style=\"font-weight:bold;\">" . $payments . "</span><br /><span itemprop=\"paymentaccepted\">" . get_option('ebs_seo_cp_payment') . "</span><br />"; }
	if (get_option('ebs_seo_cp_currencies')) { $payments_blob .= "<span style=\"font-weight:bold;\">" . $currencies . "</span><br /><span itemprop=\"currenciesaccepted\">" . get_option('ebs_seo_cp_currencies') . "</span><br />"; }
	if (get_option('ebs_seo_cp_pricerange')) { $payments_blob .= "<meta itemprop=\"pricerange\" content=\"" . get_option('ebs_seo_cp_pricerange') . "\" />"; }
	if ($wrap == true) {
		$payments_blob .= ebs_seo_cp_footer();
	} 
	return $payments_blob;
}


function ebs_seo_cp_qr_code_only($atts, $content = null, $tag, $wrap = true) {
	global $scan_with_your_smartphone;
	extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );
	$qr_blob = "";
	if ($wrap == true) {
		$qr_blob .= ebs_seo_cp_header();
	} 
	if (get_option('ebs_seo_cp_qr') != "") {
		$qr_blob .= "<iframe style='width:150px;height:150px;border:0;margin:0;overflow:hidden;' scrolling='no' src='http://chart.apis.google.com/chart?cht=qr&amp;chs=150x150&amp;chl=" . get_option('ebs_seo_cp_qr') . "'></iframe>";
	} else {
		if(get_option('ebs_seo_cp_map_name') != "") {
			$qr_blob .= "<iframe style='width:150px;height:150px;border:0;margin:0;overflow:hidden;' scrolling='no' src='http://chart.apis.google.com/chart?cht=qr&amp;chs=150x150&amp;chl=http://mapof.it/" . urlencode( get_option('ebs_seo_cp_map_name') . ", " . get_option('ebs_seo_cp_address') . ", " . get_option('ebs_seo_cp_city') . ", " . get_option('ebs_seo_cp_state') . " " . get_option('ebs_seo_cp_zip') ) . "'></iframe><p>" . $scan_with_your_smartphone . "</p>";
		} else {
			$qr_blob .= "<iframe style='width:150px;height:150px;border:0;margin:0;overflow:hidden;' scrolling='no' src='http://chart.apis.google.com/chart?cht=qr&amp;chs=150x150&amp;chl=http://mapof.it/" . urlencode( get_option('ebs_seo_cp_address') . ", " . get_option('ebs_seo_cp_city') . ", " . get_option('ebs_seo_cp_state') . " " . get_option('ebs_seo_cp_zip') ) . "'></iframe><p>" . $scan_with_your_smartphone . "</p>";
		}
	}
	if ($wrap == true) {
		$qr_blob .= ebs_seo_cp_footer();
	} 
	return $qr_blob;
}

function ebs_seo_cp_social_media_only($atts, $content = null, $tag, $wrap = true) {
	 extract( shortcode_atts( array(
		  'location' => '0',
		  ), $atts ) );
	if (get_option('ebs_seo_cp_facebook') != "") 
		$social_media_facebook = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_facebook') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Facebook.png', __FILE__) . "' alt='Facebook'></a>";	
	if (  get_option('ebs_seo_cp_twitter') != "") 
		$social_media_twitter = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_twitter') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Twitter.png', __FILE__) . "' alt='Twitter'></a>";
	if (  get_option('ebs_seo_cp_youtube') != "") 
		$social_media_youtube = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_youtube') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Youtube.png', __FILE__) . "' alt='Youtube'></a>";
	if (  get_option('ebs_seo_cp_linkedin') != "") 
		$social_media_linkedin = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_linkedin') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Linked%20In.png', __FILE__) . "' alt='LinkdIn'></a>";	
	if (  get_option('ebs_seo_cp_pinterest') != "") 
		$social_media_pinterest = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_pinterest') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Pinterest.png', __FILE__) . "' alt='Pinterest'></a>";
	if (  get_option('ebs_seo_cp_googleplaces') != "") 
		$social_media_googleplaces = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_googleplaces') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Google%20Places%20Logo.png', __FILE__) . "' alt='Google Places'></a>";
	if (  get_option('ebs_seo_cp_googleplus') != "") 
		$social_media_googleplus = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_googleplus') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Google%20Plus%20Logo.png', __FILE__) . "' alt='Google+'></a>";
	if (  get_option('ebs_seo_cp_yelp') != "") 
		$social_media_yelp = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_yelp') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Yelp%20Logo.png', __FILE__) . "' alt='Yelp'></a>";
	if (  get_option('ebs_seo_cp_merchantcircle') != "") 
		$social_media_merchantcircle = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_merchantcircle') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Merchant%20Circle%20Logo.png', __FILE__) . "' alt='Merchant Circle'></a>";
	if (  get_option('ebs_seo_cp_hotfrog') != "") 
		$social_media_hotfrog = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_hotfrog') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Hot%20Frog%20Logo.png', __FILE__) . "' alt='HotFrog'></a>";
	if (  get_option('ebs_seo_cp_foursquare') != "") 
		$social_media_foursquare = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_foursquare') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Foursquare%20Logo.png', __FILE__) . "' alt='FourSquare'></a>";
	if (  get_option('ebs_seo_cp_flickr') != "") 
		$social_media_flickr = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_flickr') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Flickr%20Logo.png', __FILE__) . "' alt='Flickr'></a>";
	if (  get_option('ebs_seo_cp_digg') != "") 
		$social_media_digg = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_digg') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Digg%20Logo.png', __FILE__) . "' alt='Digg'></a>";
	if (  get_option('ebs_seo_cp_tumblr') != "") 
		$social_media_tumblr = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_tumblr') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Tumblr%20Logo.png', __FILE__) . "' alt='Tumblr'></a>";
	if (  get_option('ebs_seo_cp_stumbleupon') != "") 
		$social_media_stumbleupon = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_stumbleupon') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Stumble%20Upon%20Logo.png', __FILE__) . "' alt='StumbleUpon'></a>";
	if (  get_option('ebs_seo_cp_delicious') != "") 
		$social_media_delicious = "<a target='_blank' href='" . ebs_seo_cp_http_check( get_option('ebs_seo_cp_delicious') ) . "'><img src='" . plugins_url('images/SEO%20Contact%20Page%20Expert%20Business%20Now%20Del.icio.us%20Logo.png', __FILE__) . "' alt='Delicious'></a>";	
	$social_media_blob = "";
	if ($wrap == true) {
		$social_media_blob .= ebs_seo_cp_header();
	} 
	$social_media_blob .= "<div style=\"text-align: center;\">" . $social_media_facebook . $social_media_twitter . $social_media_youtube . $social_media_linkedin . $social_media_googleplaces . $social_media_googleplus . $social_media_yelp . $social_media_pinterest . $social_media_hotfrog . $social_media_foursquare . $social_media_flickr . $social_media_digg . $social_media_tumblr . $social_media_stumbleupon . $social_media_delicious . $social_media_merchantcircle . "</div>";
	
	if ($wrap == true) {
		$social_media_blob .= ebs_seo_cp_footer();
	} 
	return $social_media_blob;
}

function ebs_seo_cp_http_check($check_url) {
	if ( strtolower ( substr ( $check_url, 0, 4 ) == 'http' ) ) {
		return $check_url;
	} else {
		$mode = ( !empty( $_SERVER['HTTPS'] ) ? 'https' : 'http' );
		return $mode . "://" . $check_url;
	}
}

function ebs_seo_cp_update_options() {
	update_option('ebs_seo_cp_payment_full_view', true);
	update_option('ebs_seo_cp_social_media_full_view', true);
	update_option('ebs_seo_cp_map_full_view', true);
	update_option('ebs_seo_cp_qr_full_view', true);
	update_option('ebs_seo_cp_map_tld', 'com'); 
	update_option('ebs_seo_cp_map_width', '100%');
	update_option('ebs_seo_cp_map_height', '350');
	update_option('ebs_seo_cp_updated', date('Y-m-d'));
	update_option('ebs_seo_cp_name', get_option('seo_company_name')); 
	update_option('ebs_seo_cp_address', get_option('seo_company_address')); 
	update_option('ebs_seo_cp_city', get_option('seo_company_city')); 
	update_option('ebs_seo_cp_state', get_option('seo_company_state')); 
	update_option('ebs_seo_cp_zip', get_option('seo_company_zip')); 	
	update_option('ebs_seo_cp_email', get_option('seo_company_email')); 
	update_option('ebs_seo_cp_latitude', get_option('seo_company_latitude')); 
	update_option('ebs_seo_cp_longitude', get_option('seo_company_longitude')); 
	update_option('ebs_seo_cp_map_name', get_option('seo_company_map_name')); 	
	update_option('ebs_seo_cp_payment', get_option('seo_company_payment'));
	update_option('ebs_seo_cp_qr', get_option('seo_company_qr'));	
	update_option('ebs_seo_cp_facebook', get_option('seo_company_facebook'));
	update_option('ebs_seo_cp_twitter', get_option('seo_company_twitter'));
	update_option('ebs_seo_cp_youtube', get_option('seo_company_youtube'));
	update_option('ebs_seo_cp_linkedin', get_option('seo_company_linkedin'));		
	update_option('ebs_seo_cp_googleplaces', get_option('seo_company_googleplaces'));
	update_option('ebs_seo_cp_googleplus', get_option('seo_company_googleplus'));
	update_option('ebs_seo_cp_yelp', get_option('seo_company_yelp'));
	update_option('ebs_seo_cp_merchantcircle', get_option('seo_company_merchantcircle'));
	update_option('ebs_seo_cp_hotfrog', get_option('seo_company_hotfrog'));
	update_option('ebs_seo_cp_flickr', get_option('seo_company_flickr'));
	update_option('ebs_seo_cp_digg', get_option('seo_company_digg'));
	update_option('ebs_seo_cp_foursquare', get_option('seo_company_foursquare'));
	update_option('ebs_seo_cp_tumblr', get_option('seo_company_tumblr'));
	update_option('ebs_seo_cp_stumbleupon', get_option('seo_company_stumbleupon'));
	update_option('ebs_seo_cp_delicious', get_option('seo_company_delicious'));
	
	delete_option('seo_company_name'); 
	delete_option('seo_company_address'); 
	delete_option('seo_company_city'); 
	delete_option('seo_company_state'); 
	delete_option('seo_company_zip'); 
	delete_option('seo_company_email'); 
	delete_option('seo_company_latitude'); 
	delete_option('seo_company_longitude'); 
	delete_option('seo_company_map_name'); 
	delete_option('seo_company_payment');
	delete_option('seo_company_qr');	
	delete_option('seo_company_facebook');
	delete_option('seo_company_twitter');
	delete_option('seo_company_youtube');
	delete_option('seo_company_linkedin');		
	delete_option('seo_company_googleplaces');
	delete_option('seo_company_googleplus');
	delete_option('seo_company_yelp');
	delete_option('seo_company_merchantcircle');
	delete_option('seo_company_hotfrog');
	delete_option('seo_company_flickr');
	delete_option('seo_company_digg');
	delete_option('seo_company_foursquare');
	delete_option('seo_company_tumblr');
	delete_option('seo_company_stumbleupon');
	delete_option('seo_company_delicious');
} ?>
