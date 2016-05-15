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

if ($_SERVER['HTTP_HOST'] == '') {
    $db_name = '';
    $db_user = '';
    $db_password = '';
    $db_host = '';

    define('ENVIRONMENT', '');
    define('WP_SITEURL', '');
    define('WP_HOME', '');
    define('AUTOMATIC_UPDATER_DISABLED', false );
    define('WP_AUTO_UPDATE_CORE', false );

    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    define('WP_DEBUG', false);
    
} elseif ($_SERVER['HTTP_HOST'] == '') {
    $db_name = '';
    $db_user = '';
    $db_password = '';
    $db_host = '';

    define('ENVIRONMENT', '');
    define('WP_SITEURL', '');
    define('WP_HOME', '');
    define('AUTOMATIC_UPDATER_DISABLED', false );
    define('WP_AUTO_UPDATE_CORE', false );

    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    define('WP_DEBUG', false);
    

} elseif ($_SERVER['HTTP_HOST'] == '') {
    $db_name = '';
    $db_user = '';
    $db_password = '';
    $db_host = '';

    define('ENVIRONMENT', '');
    define('WP_SITEURL', '');
    define('WP_HOME', '');
    define('AUTOMATIC_UPDATER_DISABLED', false );
    define('WP_AUTO_UPDATE_CORE', false );

    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    define('WP_DEBUG', false);

} else{
    $db_name = '';
    $db_user = '';
    $db_password = '';
    $db_host = '';

    define('ENVIRONMENT', '');
    define('WP_SITEURL', '');
    define('WP_HOME', '');
    define('AUTOMATIC_UPDATER_DISABLED', false );
    define('WP_AUTO_UPDATE_CORE', false );

    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    define('WP_DEBUG', false);

}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', $db_name);

define('DB_USER', $db_user);

define('DB_PASSWORD', $db_password);

define('DB_HOST', $db_host);

define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** disable editor*/
define ('DISALLOW_FILE_EDIT', true);
