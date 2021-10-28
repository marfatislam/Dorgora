<?php
add_action( 'wp_enqueue_scripts', 'martfury_child_enqueue_scripts', 20 );
function martfury_child_enqueue_scripts() {
	wp_enqueue_style( 'martfury-child-style', get_stylesheet_uri() );
	if ( is_rtl() ) {
		wp_enqueue_style( 'martfury-rtl', get_template_directory_uri() . '/rtl.css', array(), '20180105' );
	}
}

add_action( 'woocommerce_payment_complete', 'order_received_empty_cart_action', 10, 1 );
function order_received_empty_cart_action( $order_id ){
    WC()->cart->empty_cart();
}

/**
 * Add or modify States
 */
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {

  $states['BD'] = array(
  'Azampur' => 'Azampur',
	'Azimpur' => 'Azimpur',
	'Aftabnagar' => 'Aftabnagar',
	'Arambag' => 'Arambag',
	'Adabar' => 'Adabar',
	'Agargao' => 'Agargao',
	'Adarshanagar' => 'Adarshanagar',
	'Badda' => 'Badda',
	'Baruntek' => 'Baruntek',
	'Bangsal' => 'Bangsal',
	'Bailey Road' => 'Bailey Road',
	'Bimanbandar' => 'Bimanbandar',
	'Banani' => 'Banani',
	'Baridhara' => 'Baridhara',
	'Bashundhara' => 'Bashundhara',
	'Bangla Motor' => 'Bangla Motor',
	'Bashaboo' => 'Bashaboo',
	'Banasree' => 'Banasree',
	'Badda' => 'Badda',
	'Cantonment' => 'Cantonment',
	'Chowkbazar' => 'Chowkbazar',
	'Dhaka' => 'Dhaka',
	'Darus Salam' => 'Darus Salam',
	'Demra' => 'Demra',
	'Dhanmondi' => 'Dhanmondi',
	'Dhaka University' => 'Dhaka University',
	'DOHS Banani' => 'DOHS Banani',
	'DOHS Mirpur' => 'DOHS Mirpur',
	'DOHS Mohakhali' => 'DOHS Mohakhali',
	'DOHS Baridhara' => 'DOHS Baridhara',
	'Easkaton' => 'Easkaton',
	'Farmgate' => 'Farmgate',
	'Gendaria' => 'Gendaria',
	'Green Road' => 'Green Road',
	'Gulshan' => 'Gulshan',
	'Gabtoli' => 'Gabtoli',
	'Hazaribagh' => 'Hazaribagh',
	'Hatirpool' => 'Hatirpool',
	'HatirJhil' => 'HatirJhil',
	'Indira Road' => 'Indira Road',
	'Islampur'=> 'Islampur',
	'Jatrabari' => 'Jatrabari',
	'Jigatola' => 'Jigatola',
	'Kafrul' => 'Kafrul',
	'Kalshi' => 'Kalshi',
	'Kalabagan' => 'Kalabagan',
	'Kamrangirchar' => 'Kamrangirchar',
	'Khilgaon' => 'Khilgaon',
	'Khilkhet ' => 'Khilkhet',
	'Kamlapur' => 'Kamlapur',
	'Kallayanpur' => 'Kallayanpur',
	'Lalbagh' => 'Lalbagh',
	'Lalmatia' => 'Lalmatia',
	'Mirpur 1-6' => 'Mirpur 1-6',
 	'Mirpur 10-14' => 'Mirpur 10-14',
	'Mohammadpur' => 'Mohammadpur',
	'Motijheel' => 'Motijheel',
	'Mahanagar' => 'Mahanagar',
	'Matikata' => 'Matikata',
	'Merul Badda' => 'Merul Badda',
	'Manik Nagar' => 'Manik Nagar',
	'Monipur' => 'Monipur',
	'Monipuripara' => 'Monipuripara',
	'Mouchak' => 'Mouchak',
	'Malibag' => 'Malibag',
	'Magbazar' => 'Magbazar',
	'Mohakhali' => 'Mohakhali',
	'New Market Thana' => 'New Market Thana',
	'New Paltan' => 'New Paltan',
	'New Eskaton' => 'New Eskaton',
	'Naya paltan' => 'Naya paltan',
	'Nikunja' => 'Nikunja',
	'Niketon' => 'Niketon',
	'Nakhalpara' => 'Nakhalpara',
	'Pallabi' => 'Pallabi',
	'Paltan' => 'Paltan',
	'Panthapath' => 'Panthapath',
	'Paikepara' => 'Paikepara',
	'Purbo Rajarbazar' => 'Purbo Rajarbazar',
	'Poshchim Rajarbazar' => 'Poshchim Rajarbazar',
	'Polashi' => 'Polashi',
	'Ramna' => 'Ramna',
	'Rampura' => 'Rampura',
	'Rayerbag' => 'Rayerbag',
	'Rajarbazar' => 'Rajarbazar',
	'Sabujbagh' => 'Sabujbagh',
	'Sobhanbag' => 'Sobhanbag',
	'Shahbag' => 'Shahbag',
	'Shantibag' => 'Shantibag',
	'Sher-e-Bangla Nagar' => 'Sher-e-Bangla Nagar',
	'Shyampur ' => 'Shyampur',
	'Shyamoli' => 'Shyamoli',
	'Shajanpur' => 'Shajanpur',
	'Shahjadpur' => 'Shahjadpur',
	'Sutrapur' => 'Sutrapur',
	'Shat Mashjid Road' => 'Shat Mashjid Road',
	'Shiddeshwari' => 'Shiddeshwari',
	'Shankar' => 'Shankar',
	'Tejgao' => 'Tejgao',
	'Tikatuli' => 'Tikatuli',
	'Uttar Khan' => 'Uttar Khan',
	'Uttara' => 'Uttara',
	'Wari' => 'Wari',
	'West Kafrul' => 'West Kafrul'
  );

  return $states;
}

add_action( 'wp_head', 'gtm_header_code' );

function gtm_header_code() { 
    // YOUR JAVASCRIPT CODE GOES BELOW 
    ?>
       <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KNQCRP8');</script>
<!-- End Google Tag Manager -->
    <?php
}

add_action( 'wp_body_open', 'gtm_footer_code' );

function gtm_footer_code() { 
    // YOUR JAVASCRIPT CODE GOES BELOW 
    ?>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNQCRP8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php
}




/**
 * List of cities for: Bangladesh
 * Source: http://www.bbs.gov.bd/site/page/47856ad0-7e1c-4aab-bd78-892733bc06eb/
 * Version: 1.0
 * Author: Condless
 * Author URI: https://www.condless.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Exit if accessed directly
 */


$country_states = [
	
	'BD30'	=> 'Dhaka',
	
];

$country_cities = [
	'BD30' => [
	'Azampur' => 'Azampur',
	'Azimpur' => 'Azimpur',
	'Aftabnagar' => 'Aftabnagar',
	'Arambag' => 'Arambag',
	'Adabar' => 'Adabar',
	'Agargao' => 'Agargao',
	'Adarshanagar' => 'Adarshanagar',
	'Badda' => 'Badda',
	'Baruntek' => 'Baruntek',
	'Bangsal' => 'Bangsal',
	'Bailey Road' => 'Bailey Road',
	'Bimanbandar' => 'Bimanbandar',
	'Banani' => 'Banani',
	'Baridhara' => 'Baridhara',
	'Bashundhara' => 'Bashundhara',
	'Bangla Motor' => 'Bangla Motor',
	'Bashaboo' => 'Bashaboo',
	'Banasree' => 'Banasree',
	'Badda' => 'Badda',
	'Cantonment' => 'Cantonment',
	'Chowkbazar' => 'Chowkbazar',
	'Dhaka' => 'Dhaka',
	'Darus Salam' => 'Darus Salam',
	'Demra' => 'Demra',
	'Dhanmondi' => 'Dhanmondi',
	'Dhaka University' => 'Dhaka University',
	'DOHS Banani' => 'DOHS Banani',
	'DOHS Mirpur' => 'DOHS Mirpur',
	'DOHS Mohakhali' => 'DOHS Mohakhali',
	'DOHS Baridhara' => 'DOHS Baridhara',
	'Easkaton' => 'Easkaton',
	'Farmgate' => 'Farmgate',
	'Gendaria' => 'Gendaria',
	'Green Road' => 'Green Road',
	'Gulshan' => 'Gulshan',
	'Gabtoli' => 'Gabtoli',
	'Hazaribagh' => 'Hazaribagh',
	'Hatirpool' => 'Hatirpool',
	'HatirJhil' => 'HatirJhil',
	'Indira Road' => 'Indira Road',
	'Islampur'=> 'Islampur',
	'Jatrabari' => 'Jatrabari',
	'Jigatola' => 'Jigatola',
	'Kafrul' => 'Kafrul',
	'Kalshi' => 'Kalshi',
	'Kalabagan' => 'Kalabagan',
	'Kamrangirchar' => 'Kamrangirchar',
	'Khilgaon' => 'Khilgaon',
	'Khilkhet ' => 'Khilkhet',
	'Kamlapur' => 'Kamlapur',
	'Kallayanpur' => 'Kallayanpur',
    'Kochukhet' => 'Kochukhet',  
	'Lalbagh' => 'Lalbagh',
	'Lalmatia' => 'Lalmatia',
	'Mirpur 1-6' => 'Mirpur 1-6',
 	'Mirpur 10-14' => 'Mirpur 10-14',
	'Mohammadpur' => 'Mohammadpur',
	'Motijheel' => 'Motijheel',
	'Mahanagar' => 'Mahanagar',
	'Matikata' => 'Matikata',
	'Merul Badda' => 'Merul Badda',
	'Manik Nagar' => 'Manik Nagar',
	'Monipur' => 'Monipur',
	'Monipuripara' => 'Monipuripara',
	'Mouchak' => 'Mouchak',
	'Malibag' => 'Malibag',
	'Magbazar' => 'Magbazar',
	'Mohakhali' => 'Mohakhali',
	'New Market Thana' => 'New Market Thana',
	'New Paltan' => 'New Paltan',
	'New Eskaton' => 'New Eskaton',
	'Naya paltan' => 'Naya paltan',
	'Nikunja' => 'Nikunja',
	'Niketon' => 'Niketon',
	'Nakhalpara' => 'Nakhalpara',
	'Pallabi' => 'Pallabi',
	'Paltan' => 'Paltan',
	'Panthapath' => 'Panthapath',
	'Paikepara' => 'Paikepara',
	'Purbo Rajarbazar' => 'Purbo Rajarbazar',
	'Poshchim Rajarbazar' => 'Poshchim Rajarbazar',
	'Polashi' => 'Polashi',
	'Ramna' => 'Ramna',
	'Rampura' => 'Rampura',
	'Rayerbag' => 'Rayerbag',
	'Rajarbazar' => 'Rajarbazar',
	'Sabujbagh' => 'Sabujbagh',
	'Sobhanbag' => 'Sobhanbag',
	'Shahbag' => 'Shahbag',
	'Shantibag' => 'Shantibag',
	'Sher-e-Bangla Nagar' => 'Sher-e-Bangla Nagar',
	'Shyampur ' => 'Shyampur',
	'Shyamoli' => 'Shyamoli',
	'Shajanpur' => 'Shajanpur',
	'Shahjadpur' => 'Shahjadpur',
	'Sutrapur' => 'Sutrapur',
	'Shat Mashjid Road' => 'Shat Mashjid Road',
	'Shiddeshwari' => 'Shiddeshwari',
	'Shankar' => 'Shankar',
	'Tejgao' => 'Tejgao',
	'Tikatuli' => 'Tikatuli',
    'Vatara' => 'Vatara',
    'Vashantek' => 'Vashantek',  
	'Uttar Khan' => 'Uttar Khan',
	'Uttara' => 'Uttara',
	'Wari' => 'Wari',
	'West Kafrul' => 'West Kafrul',
	],
	
];





