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
define( 'DB_NAME', 'podglad' );

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
define( 'AUTH_KEY',         '$O**fV)_yXIDyFzC6!+,i`TPO47wZH^&jVFL kTxQVgZtIH}:@/!|(|)JBeli~-4' );
define( 'SECURE_AUTH_KEY',  '4.0U@{de`aoQA)?D[DX&3O=6c&9WN.rM:uo7Jh2kdjhP,~HPGNVX|@C[64xWO>+;' );
define( 'LOGGED_IN_KEY',    ':/dCBGHIeFjb%{nCDn(UG&dWo/bv1r5eT@]e)tDTG}Sw[oVt*{._Stp(FNuO?Kf.' );
define( 'NONCE_KEY',        '=z?}e:U|4<?F6_Dc{e-1:[e0( Tj0`|;)E%I(IoilfsVg^]UU4=H)[u?&>>4 0Nu' );
define( 'AUTH_SALT',        'J?e5qK/w~t!fl(lq@Ct:1j=F^#aB8Z)za,Y!nVz`^ bl=PFbt%0{m%4#fbzM:^AT' );
define( 'SECURE_AUTH_SALT', 'psQzFX]V(Wwg=k4%v2Z}bO>un{G)Tu?iL7p(].~;sLI_B-1lv|9g*?Nv]|RfG_F5' );
define( 'LOGGED_IN_SALT',   '=g5$;XhBuW&([ymQ?s-^/`I{g<XK/&E;9AjBc9+=I$8yM*]LAAx#P_II3x:2n/R3' );
define( 'NONCE_SALT',       'C0A4#.AkA[E[<5?4t_j V*-HZ6pgDC!v1*JnBE@3dQSZ/%VGpt17niBJIR#I[#B$' );

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
