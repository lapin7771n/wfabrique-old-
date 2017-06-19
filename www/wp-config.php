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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'n(L1AFi/wf2u7[>8nMSoI1+{Z E>N?NpsPN~MPx>(vC-^l7KS~ee@(0J<+%OzfMR');
define('SECURE_AUTH_KEY',  'G:5e{Gf) OM#N0}f<$wc|f%R~jasKL~2:C<7bVj8uXKX[2wfWGM$GWoYm>sfU!U`');
define('LOGGED_IN_KEY',    'M%(O=]1Du|FpH&:S}D^^Lz?E}:.X2a[sVF_b@?svWacVl/x@DY6DL0P4o;xnJk8Y');
define('NONCE_KEY',        '[06dKW.dJNl[rGeX> ]egx/4+4XJZs DzZfRBjwx$e@@,Wcm?uGM&0qW5F>PV)8#');
define('AUTH_SALT',        'X4%7OpeBnY@8WB(5T{Q`qSa3/,RH9.e{457nd*wN@b]Mgxa5]HH{jb79TX#O<JWy');
define('SECURE_AUTH_SALT', 'N-EZ.;3N+0a&eJIocv?F8|%Q7mFu D|(O-ky,6RyvE57n`()eM2l}xA!z@]8tts#');
define('LOGGED_IN_SALT',   'zJsiFV5YkF1w7>5s$pY`p.H9}2)WIAPJ*T/X?s9tZ)ty-kL2!a]AD5#zJL4LAG7!');
define('NONCE_SALT',       ',Y-;xL(7ii6y&ojm%&*N>WZ^w_MK($#]k(O7v(%=/k/DrZ/jAO#JOvL$wYYR)yM.');

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
