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
define( 'DB_NAME', '2025-conami' );

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
define( 'AUTH_KEY',         'RP5bG]Q^f,PP)</=eOU|/PzPr`elQW@-|&]Qhv-I REGnmizO,$r/j0D3#<C6g6}' );
define( 'SECURE_AUTH_KEY',  '-VUR7YeS!,`muc% KjvlZzv+Yd!q3IcAQ.|w8Lt(/RM12+SDbmESaRBL,@vT.V}A' );
define( 'LOGGED_IN_KEY',    'b1SZU#$3u#wYLUOMIRDPA/HgS&`].dqjq8Sj8vPg5%9.WV?Ba!fWc-,zD-QFu6A*' );
define( 'NONCE_KEY',        '<iALR2E{H=Qkp_=iOu+=#A_jr1G).re;*-~M_szYZzn+WIzWFXd=Iibt+x-3d*`X' );
define( 'AUTH_SALT',        '<-ZX<,sBsrzm4y1D`6Wxs>]4Ws@kS4Zjf4?is#T@?x-&iHc#*>t 2(U<|&3?-?yu' );
define( 'SECURE_AUTH_SALT', 'NnuS99rXk<YLwb7yC<|=2fQmN?yLa</n8Swt^, UU!U ND.E@gE6;$dJ-~Ti)+8?' );
define( 'LOGGED_IN_SALT',   '|ed!i05o|Lfpu4wW `;J:_IADZ]7n*;p=LtQR>gZ#&_ncaoO*DAEEX9 *;Og(-.h' );
define( 'NONCE_SALT',       '`W0vQ0`x$}N&sISovRP[Bj09+^5du|;)oBb~2.^4~,XVRp2^r 7-]TU2CNbNVt>c' );

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
