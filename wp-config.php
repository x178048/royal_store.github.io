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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/u839955054/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'u839955054_yzewa');

/** MySQL database username */
define('DB_USER', 'u839955054_adapa');

/** MySQL database password */
define('DB_PASSWORD', 'aRupaVavep');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'NErXTW7SYJ4FtSSUH9u3Ide9vccstUqAQu8Lt1r0cqjgdtu3k4YQi4Z7rfwiE8Cv');
define('SECURE_AUTH_KEY',  'g4rZ6QH7oMpWZsjW5A4EocQyUoOeTRveuPDTribyisfnKaxF63lrtF6xrYs6mz2h');
define('LOGGED_IN_KEY',    'bDmWAswmDodoqA0DQ143vlLiHVhx3dBL8XHrp0zN8xTnFdbuiaq5sEpOGqPaFJtK');
define('NONCE_KEY',        'N9YVwtwAjJhjFcLUUe9qXNU3aOyx5GcQZkuImCEiXGXluRkOGdZgUMy1FeRR93OZ');
define('AUTH_SALT',        'cy315FcYPMlE3zZ8rA8TD2AzUK0tjO5WWqtyGDL4vNWt4y96C4coLNVlGVAF3gsF');
define('SECURE_AUTH_SALT', 'WZQfnsSk8dElz9XPjLzHHvaSdNnZUzI3wIHokmE77dFymOIArLBsLa5b0MbOxlLL');
define('LOGGED_IN_SALT',   'cKEwiP64STf4ga80wQDVgTNONAn3NVw5FFpElbZQIyarY3c258NlAH0QHYuOB7F9');
define('NONCE_SALT',       'eTFk8zMaxCZKTAGpGBCSwihR4jynn2A7jWUkXRXbCfsAxHBzSJtx6NcTKzKgx64T');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'srst_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
