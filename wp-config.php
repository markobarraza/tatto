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
define('DB_NAME', 'Tattoo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|<I_v@O{f(mfpFWr7h{Gl:GcdN9{8yH.S~qYo:@Ovk]xaTgr(WJgD|Qel~H{!r[H');
define('SECURE_AUTH_KEY',  'Gv.+E0G9ZVzoOl*HU@+Qz&i.7_Mk}+9Rla:lbggq%k+&It .;;t9dM^{E)wkJW3#');
define('LOGGED_IN_KEY',    'WrAAo[jJ3KPB8#`SDF/)fX*A84yV=Ym^sBD?;]vO_)/7H#H8c4It9J_xajn^y5$G');
define('NONCE_KEY',        'R0oUE?r~Fg2N^kh_U8W3]s0{q7%x>Ic9xwp8&2njjOLyauR@F1XjD%kXgC/QR=Sk');
define('AUTH_SALT',        '{PtMI4`,:Rt-?0~5wh2hFs}S`U=0@eZlBn#XDt>5ojMZ.Pl.B-bl~~8c 4oN.3x=');
define('SECURE_AUTH_SALT', '6T) E=U.=47)b~o;@f8;8<_5#plB.M.iN2tp&F,OA0ik4e*7QT5ZS2fQl><b/$Dn');
define('LOGGED_IN_SALT',   'YTKI:aY2;Q,ig+VIi--!bB1nK=uO~.8K@lY(]$=LQsX[_BV4NBx;0)+ .-3_n:PI');
define('NONCE_SALT',       'WnWs$NE!tB=aAOqfuV8${@I4deel9`yPO8R]{XQ9Fo8R G#$A4[?nT$M~0vPtu4<');

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
