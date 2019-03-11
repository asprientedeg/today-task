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
define('DB_NAME', 'personal');

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
define('AUTH_KEY',         'FFZCsICp{8j;%3r:<d_%[^=bLkOOF@|iX2%zP^z`(N8|3m<cz_#Y]w?r}ck~~pcv');
define('SECURE_AUTH_KEY',  'K%1dA]4HY1*JkopxTB-5,!r0aR<+Hsu0aLys_s{}xYh6H5`QRX -^uRTQhX%9&q1');
define('LOGGED_IN_KEY',    'U8Z*(iA3-!DX8 q(,R@UUXSMpHX4ElSg5_(,YaVj_QI@O]QWrN*x81}XPb[@go4g');
define('NONCE_KEY',        'NktM9YNMA;=b1JNdz_dq9d]M#16HlPn96A7Hqi874hHX5*^-6?.cN>$`ykBG/$/Q');
define('AUTH_SALT',        ',G,~#8/OobKtlnZ2D.#=Oql3dihhuAANcf9+>Z9]WO`u3)YFXcU0[LqJF@ ]5@f:');
define('SECURE_AUTH_SALT', 'fj}Kn866BS6kRc6Rv<%h-vw.5H1, P*J(Q*:fv[AoGQP=MP-g;m-IN]1rQfK&qw%');
define('LOGGED_IN_SALT',   'D,-`SCHm+)dz0x#TB@Trlty#!M*n/ciZZbdDJBm]pq|&++yZ(#7:!Q@:2#Iw#/:W');
define('NONCE_SALT',       '<c5f<yLg+yOx_uLL-Wn-F7N4e!h/wL+ccp;;+/V9OJa>/q5b#MdzH0}b`G@mK3po');

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
