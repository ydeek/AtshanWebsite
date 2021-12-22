<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'AtshanWebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'efSR?=y;P:B9@HKaX$#I|~N]|B4qx~<9o*.NODDfdz%xPC:`ng+&D#dY[z810iQP' );
define( 'SECURE_AUTH_KEY',  'mElD07t=+,&O-GlD{t &Yy9<O$RsSJ(/$50 [.1e~Z3-!o>6+:9F9SaZS9FZ+zu_' );
define( 'LOGGED_IN_KEY',    'm^]xoy?{D,F$/dkX*>cDWar[Z^YJAxF{U*u]5s3GeT-1F;JWDoP~S27-OaPs4b/k' );
define( 'NONCE_KEY',        'v,^+t+8XS]KhX|80;$V!P}<`v|:dDNfxGp/IC]*_S[k!eHnpn`ZR:cw9|5~o@B[#' );
define( 'AUTH_SALT',        '4;Aw*,00Q3?R9LPne<fk2U9Fh1/^]s]^~Gk_#7s@MY1$d/{,?j]_nrU2Sj>JJuGg' );
define( 'SECURE_AUTH_SALT', 'cuh/TiHj#.i0r~U2Pu|^)!C1;I-+oB1*#N4(5r%WCd@OWxg-F8{6g853|peq$K&N' );
define( 'LOGGED_IN_SALT',   'DK$w)l,x$Ovq&KL_Tv,=T[FnFpk|0K=7{BRzut(<Wx>* FtOLYb`%]L9D#(to~J]' );
define( 'NONCE_SALT',       '#f,$[lRslok#sD{(aazNeIoWxy<snk*H,JpP$=U<dC-*/:ApLRofu1G {]%#}^0P' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
