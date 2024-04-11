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
define( 'DB_NAME', 'WakeWorld' );

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
define( 'AUTH_KEY',         'y/q&>>`[)t@|`,i71mcnG.vM9r&h7SNF<P>pi#BI0R7XhE]h6end]<!ggM](wASZ' );
define( 'SECURE_AUTH_KEY',  '#ivk 1tudZM[<3*STEMtQept!k;3Wom)NX*i`A7XI/NM%KkvYy`2sn:}V+Gf%&ws' );
define( 'LOGGED_IN_KEY',    '+X5[fr:FnpHnk0ZT|Nu:e27OB-K@dI6,OorN3S>=x}$,3cd8eI|bZF%/g2G*;WsG' );
define( 'NONCE_KEY',        'rN/|Kp=p|S2pV`NA!3z?]&Gxa9/F:>P$qRX14T;6?[$jhxfUi?^iGIs+A,aD%C52' );
define( 'AUTH_SALT',        'o(E;+ZMSzK#9 A|os`Yg]XU|y)&w@vE{ngUf_>!i32sO$=,0aKd<y/-q`JQc{e.6' );
define( 'SECURE_AUTH_SALT', '-Lg-IFKt-r87[GL8&;,cMGWZc6w4eM-dlFG0rB1sCM-x9f~@7.nwsTAi<#OM8:]F' );
define( 'LOGGED_IN_SALT',   'DUQ4,!Q4?KCAL[k?P&&T~LZH)BMGJtzE}qw-}Rg7v0o^oXD$Pr9oKxC34SF!477E' );
define( 'NONCE_SALT',       'YPFTdoL[ZqjC#pgpy!94U;kO!ve#|BXWo:-?$~DeIlt20d^|}baKFSWY5_OyIqy$' );

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
