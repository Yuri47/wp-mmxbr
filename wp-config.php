<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '0hf>P qb 7*d4ZUu/md7ep0+.=hTPkY2iWIVV1:]Jt&{n:;3M*-*I`iD6 .h~A8/');
define('SECURE_AUTH_KEY',  ')]5XQ2i$.!Z=.nzKoi6cLJnQTI*TW{jZW(Yw5[iN!!|BaY2B+4v5r,@gNzOCXq)=');
define('LOGGED_IN_KEY',    'mvsq8K{YJGA q,vJ;q^OrQ_Ev~<F<KJ9S@rkTb=V ubYTGS&ig/!Gpp!%$K%NLOW');
define('NONCE_KEY',        'v_@K%&njB7#j`uM1w_/:pB#jt^p-tU}D^]oyw$F#n*=P%k3hT0Ca8O$&6&pz:[+;');
define('AUTH_SALT',        'yFPx2]Z:+blw^)E$?jKz:$ZLvsvacA:3pUsEl6AMB?%H`,:x*GB$.K`b@]{lDBp(');
define('SECURE_AUTH_SALT', '.9RHwl+xs)q-!{<z].nk*v%v#)RwJ:;Xn9)~3,@,]-v9RYPJ4;4brzTI,K+=6xHf');
define('LOGGED_IN_SALT',   '0Mg! Y3>:@MX(ao!C>~ob8%T|961Y6B{&& TvVUZ/[k@WdJO=act]b0G6BZFPrjz');
define('NONCE_SALT',       'WbZb@sOMexOW3A,,_fD}2ec=%+QoaM:&#R?*T)=Zoxhtm?4(?1=bm@pRcz|*/BKe');

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
