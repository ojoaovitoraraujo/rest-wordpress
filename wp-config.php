<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UpidbDkkOweoXws6aJtgaxMC4eG9xZ6RHG6l5SjBD6n1KIdj7qxhx8jmR6F+cz5hMZvde2o1yZVYJHmtli+YXA==');
define('SECURE_AUTH_KEY',  'Bj/3oZrURiN48IFr973HGzvCjcw/WMUBrS5LOn1tyTLpZDILfTYpWV1JIalA8vhoxgE0/LNhuce+/E73t2J9wQ==');
define('LOGGED_IN_KEY',    'k8zp8U4Qwx8s6EyXDdi5QU91FpBDHMpY0niw3Hx4WgavXD/+W0fJZOIGOzVfdmDBDjyJE+hV/mIiAzh9USHlVw==');
define('NONCE_KEY',        'VwHIYACotHjeG06nfDX97MA1Q33nxbg+3blFfU60nLBhEowb9Uo5NbPLpdIYNeJjU6JpBZI0hm4BEQlsI/Xmig==');
define('AUTH_SALT',        'HR7fjd/y9AgsoNeqVxHsiGe9pCCsFZeEco2txXeBp5z88K4vSGpTJMLUuqIs7qcQkVdJiGhAwbNRI95sZiLbMg==');
define('SECURE_AUTH_SALT', 'WLLkWLR9Mxf9qAJs3akdWIKu6qFUoTtmAbfFO5h4/GIuhyFiwktdxuoGwmJyVugDUFiUPbel/puNp3FjKZmpjw==');
define('LOGGED_IN_SALT',   'wTDbvPYXRZYsDSz3qXoFDTT4JvJZcSqOtiiehvw1Gdw8rGewpQ8z8W4nVVooNpFHY6wuexw0tJymiiFWVIsXYg==');
define('NONCE_SALT',       'Uf892Z0cfd3oFce7eIln4qKlnZOSG9DZkEoDLtjpnSuCaFiC/8vVwf1akR/yLH5P5aR/YbW78sgPCcYDPNo7Bg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
