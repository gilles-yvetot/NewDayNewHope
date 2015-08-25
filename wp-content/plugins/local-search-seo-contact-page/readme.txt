=== Plugin Name ===
Contributors: ExpertBusinessSearch
Donate link: http://www.expertbusinesssearch.com/
Tags: Google maps, Google Places, shortcode, seo, local search, contact page, qr code, qr code generator, local seo, Schema, Schema.org, microdata, contact, contact page, hcard, vcard, maps, social media, geo tag, wordpress maps, rich snippets
Requires at least: 3.1.3
Tested up to: 4.0
Stable tag: 2.1.7

Drive customers right to your website! The Local Search SEO Contact Page offers you an easy method of marking up your web page with Schema.org and hCard contact details. Search engines index this data to provide local searchers with more relevent results. Simply enter all of your information into the settings page, and use any one of the available shortcodes to output your contact information.
== Description ==
Local Search SEO Contact Page displays microdata formatted business information for both Schema.org and hCard formats (at the same time!) in a customizable fashion. It also generates a QR code, Google map, geo-tag coordinates, social media buttons, and much, much more. 

To use this plugin, go to the settings page and input as few or as many options as you like. Any options left out will either be left off the screen, or in some cases a forced default will be applied (for instance - google maps domain extension or map size). When using the full page shortcode, you have the ability to show or hide individual modules from the full page view.

Please note, 24 hour formatted time is required to be input to the business hours section. The displayed times will be formatted in 12 hour (AM/PM) time, however 24 hour is required for Schema.org spec. Also, if your Google map is not working and you have entered your information correctly, try clearing the "Business name on the map" variable. If you have not configured a Google Places account under that business name, and you attempt to use that feature, it may break your map.

Features:

* Schema.org microdata markup for easy search engine indexing 
* Easy to use admin settings page
* Access a preconfigured full-page view or individual snippets with a host of shortcodes
* hCard and Schema.org formatted organization for rich snippets/microdata
* Phone numbers, fax, and email for contact
* Schema.org formatted hours of operation
* Schema.org formatted payment methods option
* Social media images and links for Facebook, Twitter, Youtube, LinkedIn, Pinterest, Google, and many more. 
* QR Code with directions to your address or any custom link
* Google Map with Google Place or directions
* Fixes Google Map disappearing or iframe issue by using shortcode

<a href="http://www.expertbusinesssearch.com/store/premium-local-search-seo-contact-page/" target="_blank" title="Premium Local Search SEO Contact Page">Check out our premium version of this highly effective SEO plugin.</a>

<a href="http://www.expertbusinesssearch.com/support/options/" target="_blank">Click here for custom support options.</a>

Other Info:

There are temporary translation variables available in "seo-contact-page.php", you can edit these variables to change what text is displayed on your website for various labels (Phone, email, etc)

If you have any suggestions or feature requests, feel free to submit them to our email below.


Related Links:

<a href="http://www.expertbusinesssearch.com/store/premium-local-search-seo-contact-page/" target="_blank" title="Premium Local Search SEO Contact Page">Check out our premium version of this highly effective SEO plugin.</a>
* <a href="http://www.expertbusinesssearch.com" title="Expert Business Search LLC">Our Homepage</a>
* <a href="mailto:wpsupport@expertbusinesssearch.com">Contact Us</a>

*This release is compatible with all WordPress versions since 3.1.3. If you are still using an older version of WP, it may work, but we have not tested older versions.*

== Installation ==

1. Upload the full directory into your wp-content/plugins directory
2. Log into WordPress and go to Plugins.
3. Activate the plugin at the plugin administration page
4. Open the plugin configuration page, which is located under Settings -> SEO Contact Page. 
5. Fill in all the settings that you have available in the Settings page.
6. Copy the shortcode you want from the Settings page and paste it into your contact page. Make this page first if necessary.

== Frequently Asked Questions == 

= I upgraded to 2.0.0 and now all my information is missing! What do I do? =

The way Schema.org microdata is formatted, most information other than social media links, address, payment info, and qr code will need to be re-entered. Also please note that if your address included an apartment or suite number, there is now a seperate field for that information.

= I installed and activated the plugin, now what? =

Go to Settings, SEO Contact Page. Configure these settings and save them. Missing information will cause those fields to be left out of the plugin's output. Copy the shortcodes you need from the Settings and paste them onto your contact page.

= The full contact page shortcode layout does not look right. How can I fix it? =

We recommend using the full shortcode on sites at least 500 pixels wide (not including sidebars). If your layout is not wide enough, just use the individual shortcodes to create a layout of your own using tables or div tags.

= Why is my Google map not showing up right? =

There can be a few reasons. Make sure your address is accurate. Leaving the &quot;Business name on the map&quot; section blank may also help if your business name is not registered in Google Places.

= How can I change my QR Code? =

By default, the QR code contains directions to your address. Under the Settings in the Dashboard, put something into the Custom QR Code space. You can use a link, email, telephone, geo-code, or more.

= My social media button does not work, how can I fix it? =

Those buttons are based entirely on what URL you put into the Settings. Check the URL again and paste it into a browser manually to make sure it goes to the right place.

= My Google Map always breaks or disappears. Will this plugin fix it? =

Yes, our Wordpress Google Map Plugin shortcode will display the map and it will not get broken by the Wordpress auto-formatting no matter how many times you edit the page or switch from normal to html view. Just put your address and location (latitude, longitude) in the settings page and paste the map using the shortcode. You can use the entire contact page shortcode or just the map only. 

= My question is not answered here =

Please [contact us](http://www.expertbusinesssearch.com/contact-us/ "Contact Us") at http://www.expertbusinesssearch.com/contact-us/

== Screenshots ==

1. A sample generated contact page
2. Settings page in the Dashboard, top
3. Settings page in the Dashboard, bottom

== Changelog ==

= 2.1.5 = 
* Removed a lot of assumptions about user provided URLs. Added some logic to google maps URL generation to check for SSL.

= 2.1.4 =

* Fixed a bug that caused the map to cease outputting. 

= 2.1.3 =

* Bug fix: Fixed logo image display
* Streamlined phone entry
* Minor formatting fixes

= 2.1.2 = 

* Bug fix: loading admin javascript on all admin pages, causing media library to cease functioning properly

= 2.1.0 =

* Revamped settings page, making it look nice and function easier.

= 2.0.9 =

* Added temporary translation capability, you can change the display text for days of the week, currencies and payments accepted, telephone and email labels by editing the "seo-contact-page.php" file, you will find the relevant code at the top of the file.
* "Real" translations forthcoming, contact us if you would like to help translate in your language.


= 2.0.8 =

* Removed all usage of site_url in file referencing
* Removed all print() and echo() to minimize conflicts with filtering plugins.
* Updated support info

= 2.0.7 =

* Fixed issue where settings page returned 404 for some 

= 2.0.6 =

* Fixed hours not displaying on full shortcode
* Unbolded shortcodes for easier copy and paste
* Fixed Wikipedia link and opens in new tab

= 2.0.5 =

* Issue with duplicate plugin and header errors

= 2.0.4 = 

* Fixed phone number display for international phone numbers
* Removed leading slash requirement for image file locations
* Added link to email display
* Added ability to hide hours from full page view
* Hours section heading is now customizable. Leave blank to show no header. (ie. "Hours of Operation:" or "Business Hours:" - the original heading)

= 2.0.3 = 

* Country was missing from contact settings
* Updated hours formatting, other minor formatting fixes
* Removed <center> tag. If any other non-compliant customer facing html is present please let me know

= 2.0.2 = 

* Cleaned up google maps URL
* Seperated unit numbers from street address, maps will now work with apt number or suite number, etc.
* Bug fix: form id names for location image had a typo
* Known issue : updating some social media links causes a 404 on the settings page. If you are experiencing this, please email our support address.

= 2.0.1 = 

* Fixed the updating function from 1.0.2 -> 2.0.0
* Please check your settings page immediately after you update. Due to the nature of Schema.org, the way a lot of data is stored in the database has changed and you will need to re-input store hours and phone numbers at a minumim.

= 2.0.0 = 

* Major rewrite of codebase
* Implemented Schema.org LocalBusiness microdata format. This supports:
  - Business image, logo, name, address, phone, email, map url, geo coords, payments accepted, currency info, average cost rating, and hours in a compliant microdata format.
  -You can use as few or as many objects as you like. Leaving a setting blank will remove it from the plugin's output.
* Added support for international Google maps. Select your TLD in the settings page.
* Fixed all localization text. The plugin is ready for translations, but as of now none exist.
* Fixed bug showing email label on contact info only shortcode
* Map size is now user-configurable


= 1.0.2 =

* Added more social media links
* Changed settings page to use social media icons
* Fixed an issue with centering

= 1.0.1 =

* Fixed broken social media buttons
* Changed Youtube button image to be the same size as the other buttons (not the wide one)

= 1.0 =
* First official launch of the plugin.

== Upgrade Notice ==

* None yet

== License ==

This plugin is released under GPL, you can use it free of charge on your personal or commercial blog. If you enjoy this plugin, please spread the word about [Expert Business Search](http://www.expertbusinesssearch.com "Expert Business Search") and consider signing up for our various [Training Lessons](http://www.expertbusinesssearch.com/social-media-site-do-it-yourself-guides-and-walkthroughs-training/ "Training Lessons").
