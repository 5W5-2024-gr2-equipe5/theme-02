<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tim' );

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
define( 'AUTH_KEY',         '6z(*gR`<SDHrZ6$vjXqZ|TOG=wn6t5dSJ`V_1n3^%3+v_tZy*|FfB*v=Fw$QwK<<' );
define( 'SECURE_AUTH_KEY',  'aWl(D}N|C4q1]erm3d;|}z&d2+*&C80vn+&{_h>#Srssq_/Ckn$a?)+>MYP@)!!F' );
define( 'LOGGED_IN_KEY',    '5g0@H2}RzYCdx^Fe:|>Q*o1U>HTD_!]H3]`+fX=xVSbh)a&5Y!+[fl_i]|ag7zj+' );
define( 'NONCE_KEY',        ':ue4gdo-vH/N]PuB3H 0F w-4GRw/p178wq<&IW3heohR?NodfSk%-3x 0f(f8`/' );
define( 'AUTH_SALT',        '--ocS^t,`s^VfcV~UeYvS34qNem?gIeF@1l8.[M-V{]Bv=mWS1Pb1JH)]N(lnL:Z' );
define( 'SECURE_AUTH_SALT', 'x}}Gh Nd=,)5titw99ZXS&H%.KPXiBL$:}&!ND3y9Zmi>gpI,ZMNiMTUYh$#OE[I' );
define( 'LOGGED_IN_SALT',   'rJ:u/W?rl0lx(E&5vu&n.xF5pb<OI%-:MvJQsQ|r9q{H+U*E$(pTJ_{,}wAD$O8a' );
define( 'NONCE_SALT',       '1Kn+w2r=d6TQ,Piv3R|Z,*`{B6B=cBwzscVNC^NkP8PI&zQ9*u?Cm]/!s^rJr%uL' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
