<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'q?CU@3}V9k{s`+dmo.2qho0_ VRHuG.nc2Gi#=Epnl=TYr@K|gWTr?ZBDPOcEpxC' );
define( 'SECURE_AUTH_KEY',  'Z]KCFz4OO2&TRb%Cr1#(j<{&,F_$PZ:yppx/[6R+^U>75c[yZhxzamQ@@W)(Jh60' );
define( 'LOGGED_IN_KEY',    '|NG`VTofew6EtgZ0AQHH=.l(Rw.E.F!Q[LKmnNWiyE7 (ZWIojg(nYD@xlB9`]_!' );
define( 'NONCE_KEY',        '}sGsmlQx%*H%X2euQG&ei%sxuQ;-Dn:@3DqOZL}c/7F%%s>+%zCVt[=M I)1rDj#' );
define( 'AUTH_SALT',        '|X?/rS}uqq< I*_A$ps=afX6N6MJ(=,R9TeZ#UZhHDVfeHLALn:4+^s@EY-Zu)NR' );
define( 'SECURE_AUTH_SALT', '`jYdz,J*%=XH1K_(6Ugv>W9eh#y%{x<i&u=ya%Grx3NA<i[vX+&;7(y<D7G873Ih' );
define( 'LOGGED_IN_SALT',   'D*g-lt sKrgN_-~*6*HF9)#PsI^w)9F_=!7K>zNmh)pZA&@$*3s7_ i?ZRxw0#vZ' );
define( 'NONCE_SALT',       '3.JM46!-092[G7I&weSvscA`QNOD^di}G5AUs^*BZx=`3jA=91_?k[l,q1V]z2%P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
