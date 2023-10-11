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
define( 'DB_NAME', 'makesure_db' );

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
define( 'AUTH_KEY',         'Jf~j.wK/W~1Op}ExB: <Fut5@WutgVGqDP0kJ%n<,)a:MGRSf0NDS~J,ObY[z] =' );
define( 'SECURE_AUTH_KEY',  '$;#./cZKL$xUrBWoCp1gA7U OH$KliMLHoT}].ae7Iz.uimM%Kk}C}j/w0C80@dX' );
define( 'LOGGED_IN_KEY',    'm!}4TS76J)|u+EHT:ysaPn&HBmu$`oU$H%2G.f4HH.O:hHK1^``}LUSI<D6wD`G0' );
define( 'NONCE_KEY',        '*9SH..>iXkvT4vN].^HMRcJ3R)]F&mI0sl`cE3&/v)12^d,y-#yC6T;?)Ax#Chtf' );
define( 'AUTH_SALT',        'p-W(4?Ed]G,fA~KidPfPdZ:q~2ZNbX3ZneM&(V6q#AJ8LAN{T=& :VqM>|=S643_' );
define( 'SECURE_AUTH_SALT', 'QBezYOro^8LL}g&IKgqZ$6#eP_AGu&w@nz|N*R+{$WVihwe1Wj^gd;4_-s[?3m},' );
define( 'LOGGED_IN_SALT',   'EY%0`)MSW6=bO*vED90+V1Az_nMI_fi[i%P0X4uiq<c]uUot*!5RaYrgm>Q efwB' );
define( 'NONCE_SALT',       'nzYNE0F*9H*x$3YEgjmV$ZC0@2%]U-T+l7pew->h158%}tLF0Gsj}DmeoW)3sj*#' );

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
