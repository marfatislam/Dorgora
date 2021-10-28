<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ukaidem1_dbdemoovq' );

/** MySQL database username */
define( 'DB_USER', 'ukaidem1_ddeemn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u5qvbhgBCEMO' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'SI%Ik,av|5sKcw#g3;Nx}Vx$qTWIM`7,$?Uz8M`xH!NNvNuWv>8*n3@0X-t&,D{z' );
define( 'SECURE_AUTH_KEY',   'E~{&$B;/|0XRP4pE:^oVU3o]Q+je.f~*#/=>h0}*?XX85K{[<oh+(6Mwuyr`/G+}' );
define( 'LOGGED_IN_KEY',     '.)5f{h~41%!|%z$aUIc{2O.ZV;$5bIjMW f4S>bB=SZ-,^a(hd>A?Y0=1EWiP zp' );
define( 'NONCE_KEY',         'pu73 / sLg{B4Ck:1iM:a7lA/a`!PT?d_!U4r<a._2- bs@vjS=QM!ot+3X{$+E@' );
define( 'AUTH_SALT',         'y;xE|T}$>Yt<Vs>.<jsX_{_=BR~0e3iWM?-s=zL7tJqd|)zK*W1Wv;~{pa!b2{fH' );
define( 'SECURE_AUTH_SALT',  '>G:S}zt^@1w0r&Fvm,EZAZ8&34KE20+`N^dSdP~o?dweMi6XLO*/HtH=otx-wnmA' );
define( 'LOGGED_IN_SALT',    '[9:td{%X)L(@>`oT%*+E9[li%q*@KQ*N<`H$ALQJ>ug[!d=FP/Qv~m>KFB*t/=j;' );
define( 'NONCE_SALT',        'Y|4EGjHE~h1:v evTag1M2_cS&Kpd(YwI^W{KmkHa6=WDcMQ7>*5}G,.{mq[HHF6' );
define( 'WP_CACHE_KEY_SALT', '.oMlKQA70)XHvBLMx#:)AH[bpw{H=u!g}}m9t$%rE1@t)0d217A>a]$}e/ARgD7F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_AUTO_UPDATE_CORE', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
