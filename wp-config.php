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
define( 'DB_NAME', 'guruk2cy_stagingevent' );

/** Database username */
define( 'DB_USER', 'guruk2cy_stagingevent' );

/** Database password */
define( 'DB_PASSWORD', '!!S8q2VpN7' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'pjw3rl6114teidg5sp7tq5uqsccr7ryzumyklk1istels6bnapzp07od5kzkzwvh' );
define( 'SECURE_AUTH_KEY',  'xroaxfzozsy3glcmwsgkcoh4dyfylfdygiluaegumhh5lto7s6xqouy0lwnk7qfz' );
define( 'LOGGED_IN_KEY',    'jovyfajuqffr8jby1ucf8fdagtfzxgdrlyjcdbkpus6jjs7tlfmwdfqxo3j46oqd' );
define( 'NONCE_KEY',        'jjagzghka0o7vacuf82fbzihprqb5gdocnwkwtawsk6sz6ypfm2tpcrthv3w4gxe' );
define( 'AUTH_SALT',        'azf9ovjmsriwzmmrtawqoyvzetr5tyd2gc9ac0qawh6r5s9dxqspvryb5a3fkzfs' );
define( 'SECURE_AUTH_SALT', 'nnjpcghzsgr4vqikq6ke43ucruwagcvdo6omw2bnwqvcma9uhnckvjbg5unt6ky1' );
define( 'LOGGED_IN_SALT',   'wsvudys5fikfax7rfizgvjvzybyyj8jypmogoakaynpcsrz6p70rft8cawim3uyi' );
define( 'NONCE_SALT',       'fusa45iiqogmuffglzuqoets7fcmf2agaweisghhycwoizwpekzcpjt9oeibw1zi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpfe_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'staging.event.gku.ac.in' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
