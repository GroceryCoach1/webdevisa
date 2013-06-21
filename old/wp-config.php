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
define('DB_NAME', 'webdevisa');

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
define('AUTH_KEY',         '.WuASziV$NyHH rN#6BT|@ptZzuua5etiSEB{6gM^c.~]Ck4k|?O125ehdu Uqlp');
define('SECURE_AUTH_KEY',  '1+{65YI?L873?|#G|A*|Z0{%/3V~r0/+4#XGVkZQjiReQB`)~wSrcz]+5A?l7w;c');
define('LOGGED_IN_KEY',    'W5G1=7k!~M$?9/Al>$@sd9YyJrS4PtE27x!O+B4wea!|]2B~+m7&u+>9NYN$akCK');
define('NONCE_KEY',        '1IBi@^-Y8zw9 /)L-ghR;#xykU[9Ye%rN++L]^e|9A-{72kdB+3|YU#H?wE12y`~');
define('AUTH_SALT',        'vV ^XMTw-=Z#W>f_b(HuwzA3,+VGV1?lmF8S5T>;?Sfc LniQH:QsiRB|TJ2ZoX{');
define('SECURE_AUTH_SALT', '{u4N1?-;N`S|9o_2b,W_?qSG`A@j,htdsLqeFhG+ZD|b+=5Jx-MLbDYqr`p%VNR,');
define('LOGGED_IN_SALT',   '$M>0#-hJP71EI:gC?HspHLQb$vj~yI=&K:-7+gw;Mg-|}i1x2%jdaE&IC1zw+oUx');
define('NONCE_SALT',       'yl]J|Z[P8#stv[A2NwC)1]/1cl64;}1}*N:>Z!d{veAlgC`$%BL6^t`FPg2lw~!a');

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
