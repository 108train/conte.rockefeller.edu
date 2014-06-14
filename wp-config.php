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
define('DB_NAME', 'heroku_6b1ad07e4cb927e');

/** MySQL database username */
define('DB_USER', 'be2fec43dea1f1');

/** MySQL database password */
define('DB_PASSWORD', '91ef617d');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east-06.cleardb.net');

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
define('AUTH_KEY',         '`1 Q`t:@HwY^_P8aNC+Rh*4.]q!yEc {i~L.Jb5^}LZfX;S;,+[Y[oSU+XlM-#>L');
define('SECURE_AUTH_KEY',  '-te5p_A|<cx@.._a-*Wx69fgU$>Nm2-YL2U1sP,1;l<8X8{^o=[=2vK)_H<U/& }');
define('LOGGED_IN_KEY',    'nWx24V^e|pk-3|G2GA*rJ=2;=?.AT>Y)u_&b;{JB$-[G)HQxTDP&!#+|n$MJ;oI^');
define('NONCE_KEY',        'Ie+k;L(uyO<qZt5N}6VAbkqN5/+_jV6=ymt8$p488W:]T&N-O^pYVJmw%i1m:>Xl');
define('AUTH_SALT',        'u`:3p+Kv-=*5e|>l+D2C-@nL|!~Nabu<.j{[p;rb|.dl2(rnFStk~Bk18se0N~]-');
define('SECURE_AUTH_SALT', 'F9)8e^jtxo#!H+A`xR~:*~7r #-3D+!=l-P[=hH-Yx3nIap]$#cOU u`qy!k%wl8');
define('LOGGED_IN_SALT',   'wd4(&m.q2qW5yN/,E$P~o+MHN3MKLML|0Sw0Ay[|&Ve5Tlzse;-DD!]Vo`b? a(a');
define('NONCE_SALT',       'yb@k:IU3r-/SqT-i06&FsV>XKX7.[tM|S[f+Lj.k[fda`Kd^eH,be/sKZo79f8#7');

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
