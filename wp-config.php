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
define('AUTH_KEY',         'LI5eN7r7T!|(^O<1D@LCt0LRhW7~Fb~7N$#rb]?u7!WK@QL>,?p6:F0zL^(fEQV*');
define('SECURE_AUTH_KEY',  'Tizh@xO$F}iB,cG$#l6<Xg3lj 8IQz[@<l-ViJHU%m,ZN}wK$r`aW~K!w9*Y4}nX');
define('LOGGED_IN_KEY',    'IphVXO^gc/m iSr0gq-?_Q6V 3<KZ,u5WrY&Znp$&cixpb[dfyJ!-lI{c)xgC@!j');
define('NONCE_KEY',        'Bir6.O/7U0H[l NEl]|R//D;Upr}Daq[!]^SN! ZtTg5A;#D#$AOPWk:WL~MybB3');
define('AUTH_SALT',        '7+}R*gEY_aBH9,n5;G14B|4Ga(_YDKmN-M(!a61coD%x% /XzEQ{iTQ=~XqW8]mA');
define('SECURE_AUTH_SALT', 'oi,XS>}msDd6L~4udM}1&Tz3`Z:dUEPq_0Vz!naS?9v)h+339orD 6VoAGC4wZ 9');
define('LOGGED_IN_SALT',   'IWYVy.:a8b2_+;z0eaIkR*|v?d@0[B?}Ko[)tSvy,J/2,;]^8j-Of&#/aoD8PiPR');
define('NONCE_SALT',       'MCF]}!uR$#D;<|3<.jXkg;RG950X4>c.K0lK+!oXgeb+:THht/Ud6_quTNiIRM$K');

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
