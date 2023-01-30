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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LiteFinance' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0!lcT=<zK!Buk;#R@vvw Wn%%y*y.,|6fw,,FWp*KBUL#8zF2*=D&_*^bp`YymfT' );
define( 'SECURE_AUTH_KEY',  '5}.iIk+cD)B~&M=M]9UBU8+cnDSjjBYl/V!t&vF ntvLBnpn1IaG8;=4f> @-v>c' );
define( 'LOGGED_IN_KEY',    '^-Fn4.OD)=X`w0VPC^a;D[;|}tfVZk[~b_oV|wjkB6beC^zI>~F7[D8GaDp#&7;3' );
define( 'NONCE_KEY',        'l[iLI )m)&z;aVY8z^n*SPxHtd_?B;Hw!}>lpiR^?RYE}`x,*Hn5sQ Ga#m*q)8b' );
define( 'AUTH_SALT',        'KD4X73XkgYG,{-!/z<`!M7lJ%rFt;NBYAYLCGG<N<8zQs[`SO_dSNzS[LsGET+./' );
define( 'SECURE_AUTH_SALT', 'YMb8Z:iE(]1&5$6zJP_=JpVY$$NQ&T(mSTUpX4| g:Hh+eG 99E3WHIz[0`bk&$P' );
define( 'LOGGED_IN_SALT',   '`Zmr-2_(I?:QpDXroZ*N,]v~R*-MEH}q<O|ZJ9g$L|lp~<g4F_WGuc$?Q6Dy-e%[' );
define( 'NONCE_SALT',       '`L!S5D8/T6fbah$zEuzq$Pj8na1}]:z=co:b9`t~=Uz{; >RIIC}vQ2`RUtwrvgb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
