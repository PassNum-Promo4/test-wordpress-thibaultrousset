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
define('DB_NAME', 'thibaultvt194');

/** MySQL database username */
define('DB_USER', 'thibaultvt194');

/** MySQL database password */
define('DB_PASSWORD', 'Vivezidane123');

/** MySQL hostname */
define('DB_HOST', 'mysql028.sql004:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jonHkjJpo/dtRooJBHwDGL7KBrLPeTc+A+VgqgODNnrHKTNbeXhX+5g77Jvc');
define('SECURE_AUTH_KEY',  'jFgKWP0hbjFalejGGd1oydgKfJzTfiDNRQk2lYM8Qz5IUCQ6fWFeT2hJWOCC');
define('LOGGED_IN_KEY',    'YVD6jVbB3WZYdTWxjgvEYkkwip/qPifQhvu2Pb9WDNkiTNpXe+2TJFgRBkFM');
define('NONCE_KEY',        '4axyENU6PQBnPJbX7KityuIjspWZGuzeSLGRwi002sq34qt/RtQWtzc0gfzW');
define('AUTH_SALT',        'UuqHv0z70oGKIZS9WuVOKQSf2+BlU5gop43c/PIv5eQJF8CuyoE7s63WMCtA');
define('SECURE_AUTH_SALT', 'CkhwAptqvZZS0K5tAowpkXgZhRJZnAOf2ZvOqMCVFULAvz9ZTIcIVRzhjC/6');
define('LOGGED_IN_SALT',   'fOYE3x+8hPQhMmI70DveuNMO9DY5ZvG15BG10wW+wlmwaPng9RckEVKhxor/');
define('NONCE_SALT',       'yW6b92lfwSTw5frK+8TvsvQW6PlgwHH74UBwZZPiebm/q/lwKaepnEaI0vkz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod774_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
