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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ')Y_}ak=kwy>9,x$?UbHt!xuF|v|R&~<3&EDB :?(o;nIOcMD)sMT6jCm>(b}t`R,' );
define( 'SECURE_AUTH_KEY',  'CIDdbK:$?aiNJ[4=j~Q7`J<%>1;aZh? ^WBGHX0Nl!<=>wnZAqUH44btO]1jhNFA' );
define( 'LOGGED_IN_KEY',    'C^-^>Rm4O9S:tLr/@P[*oirS.[E_,eIVhJZc;k:Tp;n.ai*e+rn#va.EiX<;<92b' );
define( 'NONCE_KEY',        'zUdl{o&D3Cxbs%^+$zD:vp1H^73A}$^tp,_#4q|iBQ2:,}x6hWc^La]+&},lQNJW' );
define( 'AUTH_SALT',        '[3(BtO_Z=g,6.?zqaxgQ;9Enlr]w)CR!ExE/(E8<-]r.A&9`wYgh]~f5l~:+A~E)' );
define( 'SECURE_AUTH_SALT', 'lAjbJ}&K.:o#tTw#0i)J?G:C6fxF~JE$ 4l*7R0}#[ZPj~6:WeJI.U446%4<aX<&' );
define( 'LOGGED_IN_SALT',   'V>R/5Z]v}A+^ORm*5C+hn[33{YY}cC_pK&A~4:iz=SfGX/g_!x>O=ztW1oaji,o$' );
define( 'NONCE_SALT',       'i=m=|:BX;QiP>({Fsx;V`fsd}%F0_^I_YnsL`fvAB=I!<`g@lG^o;krsqh(t$@P<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
