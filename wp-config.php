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
define( 'DB_NAME', 'neve' );

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
define( 'AUTH_KEY',         'K~@a1!I[Xir`65.Eea#gHAN{JnUCjigh34-G.o2.:W:_=G!TI+aoB{b[B>o%%x~3' );
define( 'SECURE_AUTH_KEY',  'sD<Jzl0sm{s]AI?KCQY,<%xFzQP(s@ycoY*nqshkS^,8LviQ%R]F.}n 8J<<1y1g' );
define( 'LOGGED_IN_KEY',    'n!#<%bcd$<(Pd<x`mY*i(~`H={C?>.T$}2bU v8Rxmx)/pMUPw6OWBu|~K`DJWcm' );
define( 'NONCE_KEY',        'LaKM8l/$)J}P@5@gbkqN>x<5,<*BVc?h?1_yr>;eAv3G+Svzzz&?wd~n6Lv,=F8.' );
define( 'AUTH_SALT',        'c9K:uz5sx :tCtrF![Ygxydw2U*H>21=A/_ yS[5Fq}C)xA{t*pEV.fg%#Oci/^7' );
define( 'SECURE_AUTH_SALT', 'UN3MfUNjriT;k(e4Tg MCV9~a4fMW?E3!oDT8Ght<N3`LZv#$nA4M)j~$~W-v7ob' );
define( 'LOGGED_IN_SALT',   'HHy}en]scWwq{2uQqkq,TVj3hW#Y&&akc2H%iWo T$y=`C,+C?@0[FS1a:],s6Kn' );
define( 'NONCE_SALT',       '`jsoMm`K/~tlt_<A)GY@1UMYBhpK&%g-3/57(zy:BWjm6xu}W<Vx,)xxt|UEn2$.' );

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
