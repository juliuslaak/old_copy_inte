<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd43948sd73969');

/** MySQL database username */
define('DB_USER', 'd43948sa74536');

/** MySQL database password */
define('DB_PASSWORD', 'w86bVU5R');

/** MySQL hostname */
define('DB_HOST', 'd43948.mysql.zone.ee');

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
define('AUTH_KEY',         'v yFU9Cg+bC4$iuh~<fzi_p-<-:|p/]CF*=CCu$;:EIDKuff4sQX1^(wje1hF^$7');
define('SECURE_AUTH_KEY',  'p%|-p;9Y_mJxzx%^Dc|ne5mkJTmejf+Yvc(Dck/</Hx3KGUXe;t?))lx=6`}[&_M');
define('LOGGED_IN_KEY',    '-_YE{<q;9Ys@d|qhl6@6uksEKk?@J<%t*&MnhPs+J)1:/*fu<~L4e1WGr?1qPdbE');
define('NONCE_KEY',        'o|K^>C?ztcjy=8e~84W-V|sAdMO:P/k-#M^XFsT]rumf/$YM&((/<TPs0,{C}R-/');
define('AUTH_SALT',        'I`5NP!(*0}`+bd)1ww4]Iu2wMy3Ryke+Zypk _e$p.(3j{k|3~.@H|AG]>7?05|o');
define('SECURE_AUTH_SALT', 'jbm%`g|(%<C8tvW|y;y7_+yleA>gksG<V7+td u[|S$}G~-1HCn.;|Q:%t^-~i7v');
define('LOGGED_IN_SALT',   ' IRR,b9#+!H;).|9(ntxj;R} }q!w2@D&Ph21-kOD(/h;01wNO}h1e,Y+xne(X1x');
define('NONCE_SALT',       '+pijY8C<6+cALr_?|@>xHLtNNGmC6Z7~N&}|=P. .{HFvp+3kP|qg^-v)-*[r2DU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'et');

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
