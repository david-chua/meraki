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
define('AUTH_KEY',         'z0tnJNuRktiddKsQy8HcbwkC1G/kHO2UxM3eEhjAtcrQBm076YbzgR5RKo5dH97TpM6RKlEuETOclJoLii6XDA==');
define('SECURE_AUTH_KEY',  'toIxvVC0tc9c+aTe1o0SGSODa+w1udbKyeXKbL2UKPk1S5hO4sQ5G+OAFJR5hT+5Vzmt78WoOQYsJlQ0oCN/ww==');
define('LOGGED_IN_KEY',    'OOCdE0OTConKl8wmu61ox3Xu+MOPAvL7Nkd8fFnWNF4zpRpKFDJMXumtFL5XVekC0g2/m7tNnqYDfSWvDOFh6g==');
define('NONCE_KEY',        'pvuQsGmMVi40jPZ1BsY2zX77/lROs5VBvjrtKuBQSPczavv2BNhMLA8V84lotx14PdEQXreHQhqdERKj1wfIqw==');
define('AUTH_SALT',        '7t/5c98hqYrQAVsfsqy2zRqN3+MmlPHI93jzf7dQwuFGQ0gc5d9vS5SWayO34I75S4ddp/liH2Q/FLJNhZZV7g==');
define('SECURE_AUTH_SALT', 'Fz9qP9B5wT035xzFI8ZWaXdaB+XRa9/bQCC3l98/eufAFi/wxfABxLZ0mtRYYZ5kgL5vHQC63zAJf4tTXGU3Wg==');
define('LOGGED_IN_SALT',   'QpA0eTXssfKTJR2Dp9fSHKyj9TKqRkdWRuf7Qe37392yg887RyigmuZUkaunIJScGIughBC6ZvMcVZG/Ale0pQ==');
define('NONCE_SALT',       'GGsHxvF1VCXgoAV7Oq+DBIlVV+t2emnhenlCwuTeVNZclQmvF+DQu4bzzXS6nn4B2mYzkiNd46sirkK934qayQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
