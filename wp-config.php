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
define('DB_NAME', 'noablog');

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
define('AUTH_KEY',         'KtFjJDs.J|)A{97k4Jr.8]GA#Lh&h ulmc$jt7q=*wG?}wb~+Wfn#cGfZV>n9:+>');
define('SECURE_AUTH_KEY',  'd4nxQ)5oY{,D_fC*{hh0+jrB~M&uZPD4~*[EnoI!a>)kb`NM~$Q=4c{KKX2?ZJ5*');
define('LOGGED_IN_KEY',    'lY`x-wc%`N=d=mmwn~ sVRZhAE}H,RzSX]85ZG.<[kxF#X#hA<nP-1[O!`I%S_D!');
define('NONCE_KEY',        'H>!g6.A$h4-0Z8JYu#&$=8]E:roqEvqvo|F,x|UlDez(k8H@:t$nb6>#:]TpE+2[');
define('AUTH_SALT',        'khY[7Xy>gdY60AI[BSogrESn)[Cu_pXDJ]{5:jYZQ{s74m_*=z|l3/^PzO}jpoy#');
define('SECURE_AUTH_SALT', '3UDsAPvo&jlt)nSh<A9,<2@YmXS|2KN-87i#$2B^5pd>o^wg{&y]qQ(x`>C;d3{#');
define('LOGGED_IN_SALT',   '[|I,bZSKQ2xGR:v[ZMUXkoTc_*ZdIn*0#A&Xo&Hw-QH[wZM@CPN3&oCQ!Y8KK`.D');
define('NONCE_SALT',       '1U~Q#;! ([<ut@vI|aZ7i_pc4CEvXC:d,~O}0A-o>-=Le`c})qqJQ+4,.x=H%E`X');

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
