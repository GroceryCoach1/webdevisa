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
define('DB_NAME', 'wordpressfinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FFwoEXO8i*5DK^&s7o8n$@hr=bzv@P!m9|HuSw(3-WswT2g#AGo!-Tw6gAb7i-:P');
define('SECURE_AUTH_KEY',  ';AJFTvx.QvX_H~Q[b?-X}$fcW3ot#gl-81|@Kg[#jAsO.,uHA?cIqoPnDM(uK]Y?');
define('LOGGED_IN_KEY',    '-ZS/s80v[.:AADFQ!-/o]#kCu/mh*)808lro^6JW=JaH@exU^w[J@#Ca>I%Q2qDH');
define('NONCE_KEY',        'AHugl:n2v?cmi<j*wFJS<)O0;:>EXplU/YBcLuD~^s*2=XA^xu-6[-iT0In4ks%|');
define('AUTH_SALT',        'i,XGFD1k5[zV5bg89&e!4<Kmvjq7}``0p`s|3lgpq-A-B%$K0//.i}QEY1nPDIT,');
define('SECURE_AUTH_SALT', 'cl6^JtU*F$:|E|P9gBUk;b/~XYxED=mW,<vS!BF6xz>iB0_Uoxtd`%#S]uXYTt~@');
define('LOGGED_IN_SALT',   '8*QneKXl_0Gvf[(*+9;qi3eoLK$<!G|<nC1Zy*Vc{l0MH%d6l62BWG{+0-;H=@#E');
define('NONCE_SALT',       'Ts+huBMoGg4}x]bn({h*JC},W.O$D|cm(,#I@{:2O([~mBqz|;4V(=WZ>AJ.#<[+');

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
define('WPLANG', '');

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
