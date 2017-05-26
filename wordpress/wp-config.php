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
define('DB_NAME', 'proppractice');

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
define('AUTH_KEY',         '*1FMm*/!s}2W)Obif^>n1qmCx?9njNgoD6[@_B~Ti ^h[;(,;|$nTx)[<W6:<,f<');
define('SECURE_AUTH_KEY',  'QPUmmcbTik3(Cz%f~,.::cmTpky7F<Gv^6)Zgo@E{BBfDmTcy&yI8Jo77ySIs2WV');
define('LOGGED_IN_KEY',    'm8G7.L6OX|]n<Ud/6Q5qafxb*R% C!iyEtw)K$*^HQ5*?s0V [We<1 Ym?PX&Kiu');
define('NONCE_KEY',        '#1L&?)+AA02h;k$m@6aF~FW K(1`]$i:%E^x)P&c|EO2Qs~>0j>pW77loWk((h @');
define('AUTH_SALT',        '-d`$>a%pq&Fov#t[FA?hz1>4>hI#N)B+?Q53!$xyFFzPDKnh=7IF4$#4]])|dpK>');
define('SECURE_AUTH_SALT', '{o9[|xO{~/<xNVU0q4~L78`jZx%H ]0g}:vSnu)N+K0XTz1(:q<LNf*M!b]pi*w&');
define('LOGGED_IN_SALT',   '5(SckmY6}z6(UdSfSeqi|s;kh9Nqgs#-2k?GtY_eD^!bXQ3lS<:Pg>*fcarwJg9)');
define('NONCE_SALT',       '8186I;qRXc=fMfH!r2]$JXxkw>JjRl/])E/pC`Q%l[$uH|e5MijnOS5j#{WYEnOo');

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
	
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

