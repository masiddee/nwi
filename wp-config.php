<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Aw{Tl3?@INv;qI606>ZE-6d1;YFKkBo-@|Cp((Ufis,!3+a,WiuEk5|J|;W-qdNi');
define('SECURE_AUTH_KEY',  'Tkt[+M _gachTX,!++k|4Ie{02!zWm3B>^&9vVA$BR]23tosyu<f5(T=A?kE@cTr');
define('LOGGED_IN_KEY',    '9D #R_V|MjO|ZA%ER{u0p>[-D}%(7i<>W(-j-@rHw#B- Kmhc oMb~xC/;.CY25N');
define('NONCE_KEY',        '|Q)=o/?,_p4bl71|8qT9S.$Ft,-R0k?&?uf#Z$oZwqL=N%rP|?ckH31go|%4qx|<');
define('AUTH_SALT',        '0:e`Yn@nOj~L/?.ZD1[A4%>^V.e,UI]oZS`G~.J@d&_ww?iI?[V0!QE<QYLx1=W>');
define('SECURE_AUTH_SALT', '!Gv7_uq~qBpzmdc+,uEGM-{42sDULhc0=d%n9Gcf`|-=pv:KEn)za2(<>O0rU#~0');
define('LOGGED_IN_SALT',   '=*}SAtk$9>a$68Ugnj$v+Y+Mcd;2e_& ~c7Od,|_cS@E0,+-/*^v+XiG&!{T E2T');
define('NONCE_SALT',       'D5sAW,aDa5d0rEmL(@erP*}3iw>j^Q/{9x|G.fzQe,FB%8?uB?eh~uE0gk#LM[.F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
