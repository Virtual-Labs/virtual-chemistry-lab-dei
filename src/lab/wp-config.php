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
define('DB_NAME', 'lab_local');

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
define('AUTH_KEY',         '1d,ES5v`/],7UgS*_L4vK}-+GtE:u-#Q#Ir%.Re7]D`,)~M2k#He_wPxRv/K0s3@');
define('SECURE_AUTH_KEY',  'C~JA7v;]]`1{r[V?;uNb=s6|%Y}F6[k*$q21.Pl6,I]*^V)Wn*{>e{7|L/S5} f&');
define('LOGGED_IN_KEY',    'LIUgK=dJ?)k7H:p6Zk(1o5IFb(N f]EL7Q)Nx>iiduUkH>[}r6!EQaf0elR;gsV.');
define('NONCE_KEY',        '`s,<SO>#NeaxDA%S/;Jvh!b1,Fe2=Y7u;&_OOkW3Nt@x)P_~$A*_6=ocwI)asA@b');
define('AUTH_SALT',        'g=_IGm|FiW4oK##ATM-n4(S3Z(U8xO$=yMXcoftu`CEk=FRRg:6]<7YthuPT{lFD');
define('SECURE_AUTH_SALT', '!-G=NO&#o(K1H :pm;B*<FE|rlbz{A^AWgayKNZ)*G wJueF4l1nH[6vro>Ib(Z=');
define('LOGGED_IN_SALT',   '5J519,Ma$=({jUQIAotMM{zz[r^:jQRvQac3)^Fa2Gwddh$I8RJ(K_CWc^b4SHsT');
define('NONCE_SALT',       'Q-hL3,obk^8HZm5##.mx}Nm>8&?a^qE,)h1qcuk4.;;C&9k=y<>1z-8(l:C#P8Q=');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
