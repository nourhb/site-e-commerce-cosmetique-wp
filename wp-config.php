<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u945065100_Uyis1' );

/** Database username */
define( 'DB_USER', 'u945065100_Z5TeC' );

/** Database password */
define( 'DB_PASSWORD', 'xtKXG14AKP' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tvZ4N.@giKq>+Cl#p=0<1z30M$o3-07MT6c^;-6)l@8z9SW7BGGL6CZ2-T6~O6NN' );
define( 'SECURE_AUTH_KEY',   'y#MTh -VZw[vOoluNL}JNp%=6<d&_kw3NEgq h{8i)w]F}<!VGhb*Dwb#~w*-lA:' );
define( 'LOGGED_IN_KEY',     '(V]Cm`%GcE~`>_MpAo,kR*&)5Iw+nc~{KvHa:FzU|Rd.!scFBCmbfiG<&_Z HT6&' );
define( 'NONCE_KEY',         'HLXAx4$)BCx$!kSV,7Ihao>DfCt;6AMFOyzZW J6gSeUaZ&20@?X]W{Y0p8VPrfQ' );
define( 'AUTH_SALT',         'LoC{!65$E?c<Y|4;}PW3kldo+)!V=4Is(_jXz6(6`byTs_Svxy*JJcnwE]B,~Aw}' );
define( 'SECURE_AUTH_SALT',  'F7]F}Ip#,p%eW~nG0*R+nl8E=ur{^,^sZUVfwBc:N]I^e,l) HA^&e.frF&V`[EW' );
define( 'LOGGED_IN_SALT',    'MXiT::FP<-2i-qPfe)b8]fz2UKcPDpq|cd4y!DnzJL*TzPhA>u0Y&8gvJN8YG6Ae' );
define( 'NONCE_SALT',        'fV$2!,n!J)wpcvlG[`qE]i@4;[%Mqkn4(<,!`JDfQWd`8KSbgb;HcqW}nN6.M%& ' );
define( 'WP_CACHE_KEY_SALT', '5Mi`8aTnb$yL%KG(s^G]opcsQYM%SMN^&xp!gI/.`lqyrf`.&E3]#ut<Q2$FJ^^O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');


define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '9df5733a664434979c49f2533451b742' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('WPLANG', 'fr_FR');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



