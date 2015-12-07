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
define('DB_NAME', 'suf_bruins');

/** MySQL database username */
define('DB_USER', 'suf_bruins');

/** MySQL database password */
define('DB_PASSWORD', 'Nxmdu73r!');

/** MySQL hostname */
define('DB_HOST', 'mysqlcluster3');

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
define('AUTH_KEY',         '/aT{.^+s9BN/!De7+pxl@{M49v,?.YD:,)^N9A8,h=M]a-h-y(-/MLr1a/y1]1)5');
define('SECURE_AUTH_KEY',  'M>-7=nXlgpBxs0-KY7~itFV#OoOB(Vbx@GznYv*C1Pf2CL yTpN@w+Umq~wIOw[=');
define('LOGGED_IN_KEY',    'u-^@?i@Y*%<rMN/Mq2NOF?NFU0OATHtg!|-8hiu=@0wt<=jn<!c[kVi;:$+ng<_p');
define('NONCE_KEY',        ',[[/vyZr]h}U-}MQ6=a.-R|_Fl&e7(<wfY=E7~o!vz{5,:-wNm:sA<jU^R[>xF.7');
define('AUTH_SALT',        'SA(}4+?~nEe&p39u9^ex<otWoL-I9HD9pv?}Y=<[2+6Ywrl496+5vwFi ?,S7mV<');
define('SECURE_AUTH_SALT', '-e`@pgmu1GDAp1ez5>s7AI|tGo/X+XuY*LfQ:ntCna>FePC^h*j=6B<3|yVp;UEq');
define('LOGGED_IN_SALT',   '%-hI:KQv1m `Y/jX*lu(y-L&#9LD]_+3!L{m$r>QPw7~@`^Wyu3D4YG7ad)g``B ');
define('NONCE_SALT',       'A-2dA,zI~2zcR9u^[oHbH{JMk4Q62|Igt5$>`j[9N{v#*+ 5JE/j.^QIG#A0f0)F');

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
