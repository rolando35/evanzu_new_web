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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'evanzu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'SA8*R04j?( ec+h0=U/Sjg,rZju5]A `Al8hZ>d~`IiB_Pt]M$8Qk>*r:tz2{7X]' );
define( 'SECURE_AUTH_KEY',  'H/{6gv=y691Jn83g#i/D~j(ER6-85FwWWjIo=<_,Q,B4T1?W rU, TeLj^/f2MFr' );
define( 'LOGGED_IN_KEY',    '#$o`;U]6rSn=p18+Mlj=N5o@[,x(J`^FXXIWpT#8%U>yMU,IiF0>))Ke(6k.kgqf' );
define( 'NONCE_KEY',        '_!x}br@4o^BWm.bf:y!Bpfm`44} ^LJ!]a^Z=>G Cu!R^H.^9xCZVbgzN<Km;P7|' );
define( 'AUTH_SALT',        '76iO/NN07mG)5p!RP~wTCU~um!LfS{}M:$5~/^b#h3>4gY>[5L&-Xz|Q`lbzTC.d' );
define( 'SECURE_AUTH_SALT', 'O-Q11[UN?KxhEVy3@rSF1B}F6dKko?fwy|K&= HS~5`}JY3jJ( k[F!zRGS9`Bnj' );
define( 'LOGGED_IN_SALT',   '[ap@)Q{xSt_O.lI$]jH`*OT0zkPY%[G#c3<7/4MR[Bj#*x*h)4Z)oJGU f;rc-@]' );
define( 'NONCE_SALT',       'fxe4/y}|K`MwN7L,( H%5&&P(PxnM6Qc0<+NtZuM58of!e`{Rj<Rxj7vNz_@~e{4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
