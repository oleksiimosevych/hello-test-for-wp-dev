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
define('AUTH_KEY',         'P5a7sDHAy3uSvnpX59bBYOjv7S/xPrw4ln+tyTOsTSLZh/Jn5nPlKPMshKy3/4FG5onqnE1FubJV8DlzbTcXYg==');
define('SECURE_AUTH_KEY',  'QS3PQEQPB+RG56bU9EzvujD4+jOWOzU4oSvS0yWjfRn6jgTgbZmlx7bg+aqPUpZTj3BqI/3UJxy8I1L1iWn/RQ==');
define('LOGGED_IN_KEY',    'js92Vo4Nt0n/4BQHiO5xjYRIqkN37XXHMQ2hxAxuxqg+6lWroJVb8tv3PVZtR0h/Ud9fu6O0M4XHsjpuHST2/A==');
define('NONCE_KEY',        'WT2D/IRmUu3N8VqVMw9OJXH5oP985UWbzo7AgTYLQMHiyG2Uo7VHOFsJUSBPtOdKvEYimhsseV/Sp+tn3UMBfA==');
define('AUTH_SALT',        'AN3B4P/3siZgVDDUoxx1aItjW3e2FfLcnYTwv9Zu8C8QUYzwL1gUvzatmPSSx/XOY63JWFglPbzIVcGit8x/0g==');
define('SECURE_AUTH_SALT', '90HgWDS9PK7fkGAe2wiNAhjEN8mgaCV96uESgvjutu3BNTZhjDFfBtJw2+cjMCMuvMsO0NocnZvGH+VgaevMTg==');
define('LOGGED_IN_SALT',   'BZz7tetIY+WjcmetfiWCFHimdmClyqnIwHz1pKVLJ+WEwghHgsKUiSB2UncpCH2d8c2wKg4spoOB1wzbLKQvQQ==');
define('NONCE_SALT',       'NB7wgAUIz77JCSUb7SDX/fo4FHtUfRawzRuZ19rZFNxO7rsTRMrkdGCg7ggZysWGXhW4q4EjjOgCaRIQvateqA==');

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
