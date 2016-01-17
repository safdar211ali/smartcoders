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
define('DB_NAME', 'wpress');

/** MySQL database username */
define('DB_USER', 'safdar');

/** MySQL database password */
define('DB_PASSWORD', 'safdar');

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
define('AUTH_KEY',         '+j+Lz.r)vUP+ac`+|DpKx44|/b57aj,Gq,v,@ %2VJi*;E5B:G,ocmB/`g|!WAe-');
define('SECURE_AUTH_KEY',  'Z.+4iGK.CcaWc61n8|no*c{+ MoB<]X5q~M`%cm-3-d;yfDB8};uCflb,*}f2aAC');
define('LOGGED_IN_KEY',    'WdR/+SGG(4~h#m+ev2ie^=X8]Z%dNUQ<sx1O@([-eD-Z!}s!I1vf=O0.h[;(J<VF');
define('NONCE_KEY',        ')!|U6++ {Us}Q$62|Q:f3c,v!f8eXk>CeY-*`8s!CL-H!iQ!-/jE-z<I+S-2ypl+');
define('AUTH_SALT',        '+TS/ vE;gDZ<#5oQ1[bs=,cOR.;{_xwz%k9OCq@_?b&<-3ob-~sH*V9=UGw}C:[Q');
define('SECURE_AUTH_SALT', 'MtrraQQ#kTh!:QjI#xv~lc=(YDi_z&-s!|V r-!qOt^NJP+f)XI[2U!U^IvO-CaH');
define('LOGGED_IN_SALT',   'iU|2inG4~Df<-iBO+>{/eT6*@FOHGm-qPVaq72y,_AWwQS.=e[rgkDLa2$R8C!(X');
define('NONCE_SALT',       'Cr-GdP$7;JznLm>;&AEi%-d7t7gGV.%GUqd|*]-!a2?_!6em?+jJ9yQ!F}+EZnHm');
define('FS_METHOD', 'direct');
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
