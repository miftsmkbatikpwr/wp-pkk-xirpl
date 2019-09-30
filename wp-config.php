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
define('DB_NAME', 'db_pkk_xirpl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+II:zY%jEQ(=mu-O6p1mVDThe3#PltrMZu$~U~rX$+y4/B[4X2c^QE4F# x/CT>8');
define('SECURE_AUTH_KEY',  '$gof/PRYvo~EQeX2y$m}SY,D92=asS(LU6PC>.7pEWyt2/_fU5Mm-{_su&{RR.bD');
define('LOGGED_IN_KEY',    ':69)(1$5% mb~RnX^o dqO$qn{}*z}~&@p+U<{MJ97Ci1DTiRq^HZm]j?GOWE``$');
define('NONCE_KEY',        'Y=}hV DoBj2#/iw4bBUFokZ[<NjWz8Z}-,-mbbUkMe@+Q?sM.TqYp6rEQ9s_r|bE');
define('AUTH_SALT',        'YZ#;I*$_SxS9-~od,qv{3I@1IGBL{>+28)|P~uWt.FF0?&c=WsngB?kq!gJV0!(X');
define('SECURE_AUTH_SALT', '5>0.)Zokyo.e/aNAk4[uml|ExT1/JS2GBRxxd(iB!7T;{eTc4QckCmE>U3[BzS~@');
define('LOGGED_IN_SALT',   '^P??Fs1IZ#`/e+N2Vz+~EJ~hF!e4Y7rQXoY--=bgXBs<P9[;`INAVP :blHBhcQx');
define('NONCE_SALT',       'W?B@ 0E6F~J7iH)2ltE;7TU,I76Qt#U*kS|~BxDBQcAn fgGuKElvcy4]B{b7=a+');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
