<?php 


/*
 * This file redefines the URL constants defined in WordPress' wp_options table.
 * It simply pulls current data from it's server's configuration, and uses these
 * data instead of those stored in wp_options.
 * 
 * This file needs to be updated with each fresh install, to point to the appropriate 
 * development 
 */



/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gregneme_<DBNAME>'); // the username here is <cpanelLogin>_<databasename>

/** MySQL database username */
define('DB_USER', 'username_here'); // <cpanelLogin>_<databaseUsername>

/** MySQL database password */
define('DB_PASSWORD', 'password_here'); // <database-user-password>

/** MySQL hostname */
define('DB_HOST', 'localhost'); // server's IP address

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

$server_name = htmlentities( $_SERVER[ 'HTML_HOST' ] );

define('WP_SITEURL', 'http://' . $server_name ); // this should be the location of WordPress Core
define('WP_HOME', 'http://' . $server_name ); // 

define('WP_CONTENT_DIR', $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content' );
define('WP_CONTENT_URL', 'http://' . $server_name . '/wp-content' );
define('WP_PLUGIN_DIR', $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/plugins' );
define('WP_PLUGIN_URL', 'http://' . $server_name . '/wp-content/plugins' );
define('PLUGINDIR', $_SERVER[ 'DOCUMENT_ROOT' ] . '/wp-content/plugins' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>