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
define( 'AUTH_KEY',         '.ijddbr{VV_)c%9hlMGS.6M!S|PVXgTfwGh&5u,Ky2e.}EA&Sc)twh?LTieNHjD5' );
define( 'SECURE_AUTH_KEY',  'L.~|0gwkkU8*wL*Bf=mS,Oh7oW>OAfTm5-SD T+n*lVSDz)E]?*c!rF mLK<..9I' );
define( 'LOGGED_IN_KEY',    'N>YF(NK8~E<+l6a)s.9Bya0-Wc&G/E=}sIbpTd5r}>lZn+.}Y>HGfFGJfvi+hiB?' );
define( 'NONCE_KEY',        'JuQ&=0MTs%e3m_%&9>4r.$Xsu_ODWmSVYUHXf;2J&tbu{hit&)Z9,a:-`7)J}GpD' );
define( 'AUTH_SALT',        'Guv9wU$5F</83o6k,>-<@t4|GODdMDgP7Lz=&>Y:]3VZTd(0r-?2}e(;,l6s9ncq' );
define( 'SECURE_AUTH_SALT', 'xM/*y|P&ObmGAdoDnq&<.|Kdt]|?M/sV4i!A. ,OaPo^j1(z.MQ.qN:]#7joNgdE' );
define( 'LOGGED_IN_SALT',   '23}]=&9hD#]Z!|KV[!q=25bI;CL|4616@NnqteMYiWgu&?`|Pc,F>#}wjj._QfBx' );
define( 'NONCE_SALT',       '*C^GBPV~@f09hw>8`sj{ooq1T|-7.LF[i6m!:&1 MdKZ@HC-Prg~V5orHB=+@fNv' );

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
