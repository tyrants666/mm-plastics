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
define('DB_NAME', 'mm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');
define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'L503sh1tRUUyDClYUJqM9GdqXQgUzXNdXB0UQch64Mww2lOulCewEnqkkRflHSYT');
define('SECURE_AUTH_KEY',  'KTAIlK7sWgd0OpwfInZU4H9KNOqUDdc7bJuVprCyhI1MB14SpjQFgPQZDW7pUyGA');
define('LOGGED_IN_KEY',    'rfXLDoByxI1o4eCUtmzIEQLm0yyICEBtHt2jpddWurNUrMpb4mCwG14sK8omWJUC');
define('NONCE_KEY',        'f6m38ZEhi8XpCIprzzOCHB0x1I3fYH11sG0fBPoGIf0LxQnQvXkNPhlZABwH35jx');
define('AUTH_SALT',        '5L7m1dwe7cj3WpqB9aBTSf9A2ZimMW5hCntGbmLyVp2a3GfDSpHyTUjSFwhOO965');
define('SECURE_AUTH_SALT', 'VgbLi7fnXV4f3kGn9bWxdLHtdqk42oNgcy2EaQkx0Vq0XhYxcHIMRUY81RFIhVff');
define('LOGGED_IN_SALT',   'QqWjngEWVXAEFGpp32oVP3s6J8VTbfSHBHXEWchMn0ShIpsGpH2XED25P6hc80bG');
define('NONCE_SALT',       'UJpcsGhzah5309izcSCabF9Y6uqDC8hL5hVdHfcBCaUgymkqiVAw1avNSsZEn14f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
