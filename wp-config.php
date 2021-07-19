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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuto_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '0q>08P1Pu(vQ_G^,w!O$*t[IT|< >$cW$~}8?vy7t?W &ptpo.BghKQZ!w]rxo#}' );
define( 'SECURE_AUTH_KEY',  'HkN3>oHv_)Z6BK{re|b}DRVx3wMQx}NabkbymP}DuB?!U^^C8J9a[,BQ5dO,pJ#4' );
define( 'LOGGED_IN_KEY',    'lCZm&0/KHl;K.be.-mxBg3t-Lg61~zE/4)|geBw~YVOz`wo[Q64#B}DXCL6bx5DV' );
define( 'NONCE_KEY',        'Z6g*[mY?sYrc%w#WOarm^P8Y[XVy7 0w{Qu0.;dyte=7[+vL-Dy,OSDi{#r8r&ne' );
define( 'AUTH_SALT',        '%Jq~uHn5ss/gHQ;*`c|!a.y9G]*UEGDF bYyPW!/ gE#.#;x8J?:FLo0xnamJhA^' );
define( 'SECURE_AUTH_SALT', 'rPY6Z+z3}(9KJr=;A*+pdy6(CJqLB$>gJ)]Q~~ zSv!]Q@oC1PZ.1T(kgfxiMW1~' );
define( 'LOGGED_IN_SALT',   'bN-=JO{U^UiY7;8+JHUjWxEnjUJdfEg0$@AmCb+377F0}Tm7Y&W+eu#EQ*3`wLI&' );
define( 'NONCE_SALT',       '0^r4,&!T]ZQ,_ut6*]yIl>uepg ymDfa)RJ=]p#`;5BDv +N.<E}cpcG-8jYX^O3' );

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
