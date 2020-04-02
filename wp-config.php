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
define( 'DB_NAME', 'oculist-cms' );

/** MySQL database username */
define( 'DB_USER', 'oculist' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manpreet7!' );

/** MySQL hostname */
define( 'DB_HOST', '74.208.228.35' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ovt@c^uV|j@?ZwLv63wK;@s?Q]rMM0B6md6fR9IzR[*:jj=No%fu^1:O$5wYJ#j2' );
define( 'SECURE_AUTH_KEY',  'VTxOgZH+B-@gCmS54fmD`p+e-@KiA$7RZ6lrY;,c{rU^&H F~~Z<,,Q?&Gx=I <X' );
define( 'LOGGED_IN_KEY',    'S]vImIGvcXY^|g14Ch29p<S&Dj+KC+nFxCH_npy2X.Kopp#$`s_0SUF~[7@QG8lS' );
define( 'NONCE_KEY',        'yE?I{q),Qo[o4-+0m. </.YWA~jzpR*XEbyJ@rI51a^UK$5MUR/F1uQKztRhaZ2W' );
define( 'AUTH_SALT',        'ttzB9n>3IkUI*vpsug|n)P*Rm7jSiO0E|PZIWMe`fz5.U]If2;aAZTe!uJ8i[<Oq' );
define( 'SECURE_AUTH_SALT', 'Z{IfTV0V*F4RcpHlf$#Yk%xqc]/bkOo/(BqTs1pRbJ*XA8.45zzQ<eoMrfsDQ$fK' );
define( 'LOGGED_IN_SALT',   'MER|-OWK,nX6B5R@Tc1F{q]l+$l0O9dLf%2Yz6!Ks;V=k(UP1Oe!x ,6OSV6]_j%' );
define( 'NONCE_SALT',       ';(zu_1J.DcZ6_NrJRoxIebNV!qqH1SU5auPa~$ps-|uQGta%2VDG&VaSjGhD+_m9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
