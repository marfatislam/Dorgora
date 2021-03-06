<?php
/** Enable W3 Total Cache */
define( 'WP_CACHE', true ); // Added by W3 Total Cache





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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */

//Contact Form 7 does not load the CSS stylesheet & JS when the value of WPCF7_LOAD_CSS & WPCF7_LOAD_JS is false (default: true). 
define( 'WPCF7_LOAD_JS', false );
define( 'WPCF7_LOAD_CSS', false );


set_time_limit(300);

define( 'WP_MAX_MEMORY_LIMIT', '512M' );

// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "dorgora_store_mv_live" );


/** MySQL database username */

define( 'DB_USER', "dorgoramv" );


/** MySQL database password */

define( 'DB_PASSWORD', "B1smill@h2349okBDFLY" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'nk(u/NzRvKmDerluDO2qOA:[Gk>=}])L{?,u+1^UP|u,EjZS-+}:ou#JI am %Da' );

define( 'SECURE_AUTH_KEY',  '<EbOyqMTruc3m?k]w&$v8Xvr$3nx}M&9eC!(ETfOBlPcz%&6|3KC`SvlCofAmfn7' );

define( 'LOGGED_IN_KEY',    'kWEQ2}K@{{x8l35{8soOayBGu`%FajZE7Six$B@rI1%m>/1gat?~uH#>)Z8C@U(^' );

define( 'NONCE_KEY',        ',09Tcx9(mj,_Adcd(CI&fo=Q;Ncb[j<Nnli`QNCj[3;A~LR_If1r811R %wr`b-|' );

define( 'AUTH_SALT',        'PmjK,EOZ99,vOj`6mnPmf1 U!6Qo[kw2cBM@Ev(eh~drL#yIP}%Z~#_}T<<jE)e/' );

define( 'SECURE_AUTH_SALT', 'i(vgf4u=}5WOyaBR~ibJ?25,]1zT$>d<8X9f-g/Fv+x3kMq<rjRHxsm qc1irFu9' );

define( 'LOGGED_IN_SALT',   'W3 ^#^u5.g1D/)=]mu,ID8bDPDcajH!y:apanZ??6wmvof,<+o9W46<P@H?u5xE9' );

define( 'NONCE_SALT',       '.~DK~5TJHblts~vOyd[=W/54G|n,d}j<$Jf1/-#Jg*uP<V(XN$]fZsb};L?z3yqp' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'dg_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

define( 'WP_DEBUG', false );

define( 'WP_DEBUG_LOG', false );

//define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';


define('ALLOW_UNFILTERED_UPLOADS', true);
