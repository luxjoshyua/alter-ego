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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'qEs8QzqO0Ik+ky8SKQzF9VDpksCtx7J0YwiOyq7Ue2sBR5vwQ8YiSOeg2rrDeMjnyU5NHVqNmPbHkO8NeXKLJg==');
define('SECURE_AUTH_KEY',  'cmlgcuWf5LlBPF4PaG2oz+lO/oVxI1nbTkEEEvEOHmcLjbXIV8EdhkxN9t97qYX6jEvPLkqFO+RHf0jLFKj4Sg==');
define('LOGGED_IN_KEY',    '/gVGMQGQucYLfZdEM/OoKUdhhlX9gJ6jyNSuZn1kxmrgfPAX3daHURBcR11v3XHEAYIvlofUwxmWxffW6B3eWg==');
define('NONCE_KEY',        'C9/+BH/PV0SWr4jIYC8igR/P3RoRoOfTpQ6QsZyERRxXG+/Mcl3yCHYxlLxFt8B/CTWSm8HWjF5y6kmqwD/Kzw==');
define('AUTH_SALT',        'cHdt5KR/f+5Bh2wgMYzcRGS7oZPeAXTh+wGQ6+kq0E8OfyfFbUS5bdKXez601HxWeMUQM7mG7kk/CLQqBcrA8Q==');
define('SECURE_AUTH_SALT', 'svxQ+1f4bQA+1XrITSFfThLH6xb72cftAKd9MNBcLE0hhgSxBRvWJK3weGFNPrkzwO/Jzp0LnwLlCMxfAjrvEg==');
define('LOGGED_IN_SALT',   'Bw03ycBTIFw3bb8VCiKRasC5f0GhB0P4LfquUPmq9SQD1YKZEkqJivmOg9cNhLM5aOSaJC6u7bAzF3kpOQmtrg==');
define('NONCE_SALT',       'KzZyl/8zqT3nKcw72QIDgtSCOqzfLHnivE6ortnR/OryDyuM/QYljxFHmRw7psaQQlboRm2+NrQdXN0arXpS7g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
