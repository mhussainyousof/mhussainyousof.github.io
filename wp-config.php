<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mhussainyousof' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'f0`a[^IhfjwUh[PU;Y|$sH_5.2S,N303iCWW#,tJZ$4Wt4&X|;Pp ,e%3KJ;Ga-4' );
define( 'SECURE_AUTH_KEY',  '^uV+lLzX2;ztpnb]:~-&kkq8Tc)u4RB5nTC2a`7sd6NjmjBG_E<FUw4 %,Jx@SX3' );
define( 'LOGGED_IN_KEY',    '8jBRxD;-qhpEUb)rM(Ft5JT%W.@IS]*d_E]5^@>o(-|-W.?_j`@lP%8_O1Kd38ES' );
define( 'NONCE_KEY',        '?nNge7qAe/xuBsGt]IcHuPKAE}Z5{W]U #H^g>#6>bJUzPv@F2-QXg=~KF#-d$rT' );
define( 'AUTH_SALT',        '1b-r5l%_lV*!j}:KEWv8QGA/D]<,aTK06^Spf*N7kwi3uJf]lw8x]54ZF+0BB7t=' );
define( 'SECURE_AUTH_SALT', ';{ik;0.8.<L. W)pn3.!~S>wRk7bI (l4]zG :3O3Rv>Lm=*^!O%h9BAH%ENU%?3' );
define( 'LOGGED_IN_SALT',   'A&+C}Gpp4I/qJ!,r)AVHzRlM_gk8NDRD[+ju)</InkSoN[@~zNe@S.njc? HLnA7' );
define( 'NONCE_SALT',       ')JR!?GUSmCEQI(Ig.,uV*zm7z]:E/j%n<70e6eDyu/>7-!-UEWpq_8M|3#x.Zhw)' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
