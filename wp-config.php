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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PortofolioAdi' );

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
define( 'AUTH_KEY',         'xSpSzKc4gSdDgd4A4g5b9veUrzXFsUNlN0yCt4mCKKPLH2e1Ito3oWyxSxJpm05e' );
define( 'SECURE_AUTH_KEY',  'nhNsfvYFCXpzQVrAIXoCLYoUaH8qNBED3wuDkTCNm53ASehX8PwNkAH8eDCXXTGj' );
define( 'LOGGED_IN_KEY',    'Kg4ZXz78acIARmkdCxpvbjJ5nMzukev36BmUfDYbW3rPOXb8srVrANwoTfcEhNtX' );
define( 'NONCE_KEY',        'BGrzDkSJxiUwq6JdgeIWOLT56UJfFVmkkYhV7tenymFEZae6RM4cxsFXfl6cSx62' );
define( 'AUTH_SALT',        'D5SAIXIBdjs3C8wXCmmBjsAcORztIPdY4fr3jWDhbP1TFXwLTe5OWhXF52GuBB1R' );
define( 'SECURE_AUTH_SALT', '1A5maIPNtyk8hyTzWY5kqLLKmj16LXpAjRPPTKbwPe6pVatKe2eEo7OhBt7tTDaC' );
define( 'LOGGED_IN_SALT',   'tBhmPqsCULnYgEX3BNsaZHHRqbLpaHCnOWPaEmi9uHIErG37omkVz1JWRdnOdPvf' );
define( 'NONCE_SALT',       'oegk5bUn6aVa2NhfAjAaARSXOWtRVgaj6OGJW97qbbDTMTS9GAvPvYizy2kea0fG' );

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
