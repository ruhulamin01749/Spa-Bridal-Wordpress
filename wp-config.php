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
define('DB_NAME', 'spa');

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
define('AUTH_KEY',         'h*~eH:u39G/<.ia}VSTauRNdXR?,N2&v+X.mV7m0E?{BG%lP*&p+U<kgS4J5Wfi+');
define('SECURE_AUTH_KEY',  '4s}qqk+-d,{q#F/q|E{F%KtF8HE0RS1.4EjQQ=UdX^9mQel =j{E]$^M1:PmATko');
define('LOGGED_IN_KEY',    'E`%qSSu>!&bxgk!(2T_N?$HkT,XmM&M<PZ<#>(<Xo9!G7/KPmUk1}zX45(LADI5O');
define('NONCE_KEY',        ']Q2%pQ%7;iK>*uKC<+F2NdL&5X[|vyGK+j0fgaS:eo=vpmsU&9(#gv.fi&_&,`}e');
define('AUTH_SALT',        '5UP~;_UccdL5X8AXx*Upb>d,]S{BP/H?7uW;;F$3U{BVa:sU|.0vV:$YyK$oCa0H');
define('SECURE_AUTH_SALT', 'Z*>{njMt,/+wZIUb^nyE=~X_!G[k[U$?Qx,4F{+]p8,EydNp@dEh?Ko%!vjz)iX>');
define('LOGGED_IN_SALT',   'HrHk%)a]ngze09VFVCtovk*SO_jC*/4KMwv:Qocl=j_(X!@LJo9~(~X*:7o>1yg_');
define('NONCE_SALT',       'Vk/ir}@kzxpKzQBQ+*~z C[d2=VXo=@F3T(#H7ls5$c_~K?Z@|Vrh6.0gk<EPe=:');

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
