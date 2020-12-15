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
define('AUTH_KEY',         'zNaD6ehROoR378hYtXAMg6cc5QHUMD9PqnCtwnZzDmwQ3CqbAEf7JHyCcky2LRzA4OTcqrbPZDgc08KOJs/4NQ==');
define('SECURE_AUTH_KEY',  '60mGerFWL7cWu+9p5lNwnegXwKitAhlTs16vOumt576M/W9//Aup4NrkKFKrwXrYKKYcbMJqcHKPP3X7VEf8xw==');
define('LOGGED_IN_KEY',    '2VlqY7Lm+O3pGY06qirVsKLAFU2g51Zl4oCS0mMURTNO6Xi452mQnCwIhguwDX7jsYeH5BG9mXOIbXwUw+J2zA==');
define('NONCE_KEY',        'DkypUYsXRPVDi2uHlU0D/4qMgdMRwltTDVRAYWEr6nf3BS8zXclafBKrswXWAIe9cH5hu0ijYHlwrw105uBgwA==');
define('AUTH_SALT',        'nIz+zMW1DfRbBdfbb5cs5dL1GBBtlOo70IjHOlLFlIWgKJKtCIdNUeVlvEbcMSfP6gM5z8+P83nDY05lW6K4Iw==');
define('SECURE_AUTH_SALT', 'R0sNnipFRFQgx34Wtpl5312WEixfhYWyNFoCCXuh8TZN/8C1VWAJnTxS1RJLq9WsvoBD5ICVT8rQITP79q/2Qw==');
define('LOGGED_IN_SALT',   'WP/GOlivcKCWhjt4AOivCwlTHFm6H8+P/7G8iFbZPDK5NYPAzHuI+Yv3RCFo1ILDST3WHmuHNW5DnhJ21J1zgw==');
define('NONCE_SALT',       'g4lIpg+bzWkJ0316qcyRwFILW8tjq09oOgL4BFJehuFuEe9d4RkzvltkVWrOJNOaZHq2hACyz/ToN3+CcB1qCg==');

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
