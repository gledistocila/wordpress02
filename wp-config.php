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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'XrbfNc_sqMXL#NZ9C&fw-}:?osw<Y@9RDS@PA9av2@-Dc%e#>7&rdULMA^Vg4DHp' );
define( 'SECURE_AUTH_KEY',  '9zsHhk(*Z={&*A ]k&{Q1byaueVuimg;En-u++1&[tIEQcf=@e-Vt:=?eogBV|[z' );
define( 'LOGGED_IN_KEY',    'hY03]!s92)9-76m%J2k}aN&!Q`EoqTH.-@$(;|JRQ#XfyoT$Eyfd>vl-uLVgU0)~' );
define( 'NONCE_KEY',        'zDs:vyy55D$aJ9z)5Rr`a*BLd_9N/%Jb:R_ALo9FP]YNz&zZH%c7KzQIb?-GvG]u' );
define( 'AUTH_SALT',        'g?[LI%<1167p ^iw3mHT+oTWD[5Fizh=P2~wS6Tif!#fiRDg^-X,&U[b(@gV{{:W' );
define( 'SECURE_AUTH_SALT', ';jh|oE4#l[A:((hn:p;lg4-TXSrHv6?2CsgLb-<(R<aR6B=hGLUE7>C,m]*,6ga.' );
define( 'LOGGED_IN_SALT',   '@F>?S2]FfzBP9e0c!_n&JhMMzb#Q{t]1,GI/AXbz].vAH2OCyUl,qf0/YMG}d_|z' );
define( 'NONCE_SALT',       'eQ@Mr8Be=@ti-Fu=mbp %^)VeP8*V(yvD/d$*0R[8=F7VU6Y>5j>08r(=^!Fa%u.' );

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
