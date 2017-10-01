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
define('DB_NAME', 'nepopis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'ADU9N!cfRs!QD?s_J>{26>$3Ip|wBpO2em?b9Q[pOFXLIEd2cjhszGvR&M|nj)k(');
define('SECURE_AUTH_KEY',  'Y;5x iZQi{vb%zrFi&1u}hN3msyy:e%nn2L{p&X/XS@*nD9>p*m#Gu0Dwx5@T%Ji');
define('LOGGED_IN_KEY',    'g!by$KLw5+M.{s!.];9#`:J$t{Dw.7yVL1;9d9>Sq0M-?&u(x8+DLbXb]X>j$(0m');
define('NONCE_KEY',        'y0NR*P3mU4G4fctCb6xvX*iV%Oq3m_/l4iShg;ze1Wx}w2CUodE:D;[$.!!|M5;?');
define('AUTH_SALT',        '%<Y!,>}Vk2cz1q12(C-~%,v^kj<cH_r8;>rM0hJr<l!orXmfS&!$c#:nk=318Btb');
define('SECURE_AUTH_SALT', 'y/3o00i@X>sd1NzM*TGN5C!-Q7l=!~iW9,)Yumvm4zz+e-5M`;6RO+@i}M,Z7f:u');
define('LOGGED_IN_SALT',   'M]jas1hi/1pKC5G|sQy|,/tSiXH.^V>%:iNW5ovbz$Y$[E!o *w]b6!i1oR>d(mw');
define('NONCE_SALT',       ',>xEeV?gQ`aSVvtyy?B8[W %>,/UjZ~xLUSlhOw2ech|M0$-1T~Cib?%Db**2H4!');

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
