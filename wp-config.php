<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'Ecolys' );

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
define( 'AUTH_KEY',         '?bFCpoA`sUH*O03a%3kzXyk&G+Z<.!{$;b}}_~)L=7h3{Svi TnkU:hGMX8!WQIU' );
define( 'SECURE_AUTH_KEY',  '#UU{!Pl}8hRNBbp.k*3_86pm&lKM(y@io1+:{`mAPo}AN_ DBFf}x *irgQhG&V!' );
define( 'LOGGED_IN_KEY',    'd?!0My-TOkp?Tvqr,>zU!C(9PA+<Nq/rdCj`I^yA>VT8pG8yH@H[DEV8wYQ)_pPM' );
define( 'NONCE_KEY',        'Djesp8wJBtO5j)CcYQR$rjb_qo&LhewX<8tv%wYU.l>:A11:Bn2K~Y#Qax*^R?)/' );
define( 'AUTH_SALT',        'y(%Y?/2iZ36m35OTa086WI,JY93M!x{1BH*h,*,D?ey{CnQ?._a%5zbOwV}1@|SS' );
define( 'SECURE_AUTH_SALT', '_QdI{A^^}6Me$PA Qn23: SKL5*Q&W5Cm9:X)qm~n}=KSLG-jIoz(f]:(xlF (kO' );
define( 'LOGGED_IN_SALT',   '<u;(AZ!GO~~&$Yul<&m}3c)OCTV=xE3JdAXj?J#g:}fP+Y[(g=T7{YN2(>xk0,.d' );
define( 'NONCE_SALT',       'BA]{N1*OVPDy[2RRTaqU2q^jJF#cvB TQ)i#(ydr_-:;t`)74aJtKkq^fqp* r8l' );

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
