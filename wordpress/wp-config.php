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
define('DB_NAME', 'wp_extremetechnologies');

/** MySQL database username */
define('DB_USER', 'etuser');

/** MySQL database password */
define('DB_PASSWORD', 'secretpassword');

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
define('AUTH_KEY',         '-IV6[:+mg&y8}APfMvTX<jk]9R+-}>~x?aN-zN_jx~)_^A]z{#y~|=zz{/GRc=%f');
define('SECURE_AUTH_KEY',  '^|!m|7r+WL[b)GuQ~yNy]^9[8gfOu646<*/8.Q]xGT<N-~|W!E.Mp^Vp(6dG+|qR');
define('LOGGED_IN_KEY',    '@w+:a<72h`RFl|+-3lczh$1Mm,`;.IfdIxCU$e+4e$XUdcC+[&O{H)<X8^ TZ(-+');
define('NONCE_KEY',        '*]GazRG@+S1Jh,EKXrH7%6[W`qQyyh+}8cQ*qR+-,Yc>J>C]ze*b`a+vR<>UXLW^');
define('AUTH_SALT',        ')y{W9jo@wQ3IanR-KVe&K5]]]?ZMT<[0l[XLL~dn4~Lm!znPKR$l_)<<|qrtSRQO');
define('SECURE_AUTH_SALT', '}FCFKgwI2 >rvFwgmtyl?V ZbkK4[ngwEZw#Ex0(|Sd$bDZb-FO/w8D/-/5+|`.f');
define('LOGGED_IN_SALT',   '}gSWwSJHc<fRTPC!yKtU150=R)M0J>y0O,%HSA@5qC0re5h|_b=hr1pSkZ=X^5!G');
define('NONCE_SALT',       'LW/JE/-As+5CWw32?!%c9>;ABh==|q`:|X8g1G;[(KT`-tWtMl8fTl+M|n8ceY*s');

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
