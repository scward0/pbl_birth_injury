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
// define('DB_NAME', 'localwp');
//
// /** MySQL database username */
// define('DB_USER', 'root');
//
// /** MySQL database password */
// define('DB_PASSWORD', 'SilverH3elm1!');



define('DB_NAME', 'pblbirthinjury');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 's!nCe1886');




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
define('AUTH_KEY',         'D;fs1-g}%0KwIl;7Obo[hg7+tC,n>sJ9:-p<{0bjokl6a$Y a6r#K2>1{,Gg& Az');
define('SECURE_AUTH_KEY',  '7`V2zJ~wXrPE-R{hP@g.W_nFb8xKpkmiB(RP1qmDS8=cTyt>Y0`W_=*<4]^^~mp@');
define('LOGGED_IN_KEY',    '5p{t~xhg8lR4!IIa1^2qh~X|Ebd)%:?:+:O.Ug70aODaUMh_J)0Z25lEw(_Iy*2z');
define('NONCE_KEY',        'iY!+;L(4h]?N*#x*$DUu|;BiPT;9GcNf|Ubbvj]SH)Ouk(%Guf]#T.KvIv$,~<W$');
define('AUTH_SALT',        '_:_t:n&*/Y0i=iM=go+C@ e|C;RhktNx$U!w(%Uq!6Of23<Wrc[XI-3%[2/N0q:2');
define('SECURE_AUTH_SALT', 'UTa_n~U-X,Y>M^`eUv|2d%<tPRZ7?Le,oMU?gVwj-UGcW3p<704p+/F|s9b000hc');
define('LOGGED_IN_SALT',   ',%IRkdewn`)dDq}k{?]+k&z($ZGh2n#R1]u8>Dof!)i~)f8|6mH?NpIsxT=sIb_&');
define('NONCE_SALT',       'l9>|R/U-,fjAblNcNFC23o.[dLq:b|J]V@|V{9UZ3as>h<27OImX1k)C$gA+IpZ^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_pbl_birth';

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
