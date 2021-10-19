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
define('AUTH_KEY',         'd7eG3Zs2EuuF4idI+4ALpdiWDW7p8kMrb0UEYqxekDk7RMafDXgr9jE4WJnRgAkrWEHWmsoY9LY+Iso7jh8XDA==');
define('SECURE_AUTH_KEY',  'vwtdc6TO2xhhEBqZhRESafEkVawO9HMT5WWI26DJ1OPU5lNEjYTYT0a2BdyJns8SyDgUAzn9BkDPhmyqybKD6w==');
define('LOGGED_IN_KEY',    '6LSvjNUjAjPgQNqKaX3Lw35Q2XDTENu8JsWic5t6e/x/q6BraKN+UeQhPlh2eHzLDGOZjEf26AmDucmjh3dV3w==');
define('NONCE_KEY',        'JyQZSxELES7SXEPR+5VY22l8XBl3G6AVt5h2j3EdraRjgWsfGBzfopRIaaGibALYwu1FMSvtYTetUtIb5WWNew==');
define('AUTH_SALT',        'jC8dGxLIsrOKGZMoN58q6qGQYYRMR6YFQmhR9I4pKzix2gAMPU6nJPjBkEjhoSgfeUz3j30wqBoXp/gbeyCxOA==');
define('SECURE_AUTH_SALT', '+t9ybm+jL/jZBHANoHcKpwd/tNnnm9ugHCq8EWtetYMIswPCwQG94yoFGMc0N2X1pDqna+kSpbqZzTPjT1nfWQ==');
define('LOGGED_IN_SALT',   'nW8/puLYdlDVWYuCeCc2mik92SEYLBI7e6pUQGPSF9bNE8FDQNO1S1BaSRP7G5VOZvutjzd33bHvd4ATPhSn2Q==');
define('NONCE_SALT',       'q9Xv5CF7GxJhTAzXKfLkbV0oIMEeK5U7TGulcociw3r/ZqTBU8rGikGf96PUUGsmGL7FAo6zlvaJukBrH42bgw==');

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
