<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cimigeno_web');

/** MySQL database username */
define('DB_USER', 'cimigeno_web');

/** MySQL database password */
define('DB_PASSWORD', '14252700dl');

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
define('AUTH_KEY',         'hs_5WfPbxUw?+y!h^Y:Rf^2U~ypfDIIB+DKGKeBZG,GND2A|(/v.zJu<#qEWwWV:');
define('SECURE_AUTH_KEY',  '|T2wDDnJL7(8y2:;&-3jA4nr-FYy^*wKE6b$/f)s1c]I%*QRRb,0 ^)#ed|C~[(4');
define('LOGGED_IN_KEY',    'ESq+a9.:bp8j<r}28TVDTA?tdB&&psU1k n v0O}U}l|@TW&;_yj@trP`s!&rgZf');
define('NONCE_KEY',        'Q,I-}lG-0^%f&!A97+ W-u[@.]t yr@>A+VX@x>8!O~~~;oVLrl*Yl!:a)/Nik*X');
define('AUTH_SALT',        'YD )|s(Pxzsi/,K FQY+so|?c64*$p|7C7@j-7*}-&1ajgu(s_~En!!w4nlzWavU');
define('SECURE_AUTH_SALT', 'YlyMKcT>D#c*Rv/@!1o&:>EKxB)8cO*3s[WuS:+r#]s`#+Z#Xa7.{Y&TD.[ql|o.');
define('LOGGED_IN_SALT',   'J,`/g6Zl6u<ywAw ~mR%.1aT7RBr9sw<+i-sgl,SU-H~Yfu~B:qO!E.1|/hm2|Z{');
define('NONCE_SALT',       '1rRY|jip-^;h!4wVrxURoYqr|Gk:*qcBR:&&C7}^W%UO|`t^: (KS09psZ,+EgN:');

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
