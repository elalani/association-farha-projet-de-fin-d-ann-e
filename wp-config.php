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
define( 'DB_NAME', 'farahh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'iZfHXBoTjO2TeRoP3KlHeP7Eo4WQITWr482ueM2y90ASPq8YvBQ8pzXaDwxsDch9' );
define( 'SECURE_AUTH_KEY',  'NVFgxlPodGBthaERZ2GziyiohNsOAOwnoKgnGsG1XQ6fqED8Ca6gQ3DRQm5bAnJC' );
define( 'LOGGED_IN_KEY',    'nwLYUpXjeSYfRWm0Q69aF2GRwNwWm9rKymUhW2JIMgCLRoUvApEm8fGgx6RtU2Wl' );
define( 'NONCE_KEY',        'RDPt6wyB56ae93nymXVFBSiLgogkMQmXuuXE1Lc3BBAy3QywK7f3ElGCvuMpbu1c' );
define( 'AUTH_SALT',        'AnDwsNTzlyvZzTfXt408HJCvk6emPbCXIwC0e2clrNJVyqdvqB3vtmbNrnEEWJ05' );
define( 'SECURE_AUTH_SALT', 'XIhZN27LH0GFq8OQBjqYJ3HnJvPYWzescgmXn464k0hIpioTQ6OtwCs4hTVHqr3v' );
define( 'LOGGED_IN_SALT',   'IQlmjFgFJhY5hcoQAQTCFIsnjIz7XBvo5jKuEjsle9BWF7XPrC1CrBGVj3f2QyW7' );
define( 'NONCE_SALT',       'FXtaebuQ6lD5LAoAgOGvuEJvTIZIGQNFpgm7ic1lag4BrvMuGe6CPK3UOMi6n10u' );

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
