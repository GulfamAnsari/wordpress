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
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         '{]&+!F#a)T8n>YUl6$4sjeHlXQ(o1k+;8?gZh)rI4>w6/+]v+R{|C+Vr>)|hd8G{');
define('SECURE_AUTH_KEY',  'IkbmJ(`pXpR036<BuWNuJlnD)|_V@dDf[#=Njyz$!HOTm/>~lpa|*I_2R+)f$vy(');
define('LOGGED_IN_KEY',    ':K!m7f XQV7eSLr&^n2Ze->p^ooJ<=$Yp7F7URA=lELVgnv.C;#&j(X}CL=uCbkh');
define('NONCE_KEY',        '$F+jX|%k/iIA-ga&,es~k?RO{lfxF)f9TSQ3H7j1,xm~&Jy c%|J#1? |Q=;?c>$');
define('AUTH_SALT',        's-DBY>Twe[E:u iC2Mqu]<K[@-J/CH_`S,L)pGZ51Y*=:B5V^M+d=OKAO fVz;z%');
define('SECURE_AUTH_SALT', '4I(}YZWD OGu1aTh$XRNZV.{}n5,^R$SDN$FQ@J|?Sa5}8G=)-b)@~arm^EGIe_-');
define('LOGGED_IN_SALT',   '`<0)%a^o$j={1Aj@W+-|ZV/;]y+;+Gka?xUv$1K}VZ(m}qine|vRJoBqOnnhf$c+');
define('NONCE_SALT',       '*_hTZpV16{dJe!IU(`g-+.l}/1I|@*m9m7v$}QAs6f:|Y#v_ABQM^?a-hcfAaMg ');

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
