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
define('DB_NAME', 'db_consult');

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
define('AUTH_KEY',         '-yp,h@}@AP^ery{2V0&X0YxI~7zj6x r;sL,(yFu/3~X@%WW Bha{71e[ vy;^kY');
define('SECURE_AUTH_KEY',  'kqI5*=a..Y#wTA)r#j}B-002)V$9fj l222(^>v^P%_4=+4EmmEn+9R[XK7*}<-1');
define('LOGGED_IN_KEY',    'Z?g0<_/PXv.t1Z}VQLY.x92y&S58iZK%M=[tZR$w#v0e>TbZN65-Q<h>G;A:]<[%');
define('NONCE_KEY',        '(lHG^-*4EPf *@`he8NiB#qE~IO@O!(,DDS.*CV@Q4ST/C]ScnoymCwdu>]|Z&_V');
define('AUTH_SALT',        '9;_*kQ/dp>=`mLFF@q#cDKuv#c/Q<x|tCN,<vcl!a`k7=(:;?6l+hEUJY$r#}?_,');
define('SECURE_AUTH_SALT', '@pw& $nmjU*4hu5ZdErLfc*Cu=Vr6k,fWREC*i3R0h0d4|aF2<SAfU-h(~)iZ*8X');
define('LOGGED_IN_SALT',   'P>7>H/LhOA7>.OywFWfpG=%,<L}oytoId|n#{)DHF30ZCBy`H=>L_B&<``$TrEii');
define('NONCE_SALT',       'j-v!!N3}p^2`y<LOc=vk=tZ6}5pAz.5H*YZ%HcTgG8i%1p- Z^!![bA!%hTqr$X#');

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
