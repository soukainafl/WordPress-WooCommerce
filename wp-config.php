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
define( 'DB_NAME', 'e-commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`.3BYwV<oc2vCdkl:#>0s2BA3%ZU<iJHqz]50,P*j>!/^E/jiFzq7RHh<II6L0lp' );
define( 'SECURE_AUTH_KEY',  '>REH|9;3^qI:)*Gi([!jz@d#@5)8s_.naF__%8I:Yemxr,HMz8jdZ,Gq,k5~B&$}' );
define( 'LOGGED_IN_KEY',    '`Eb+iyM~qB;+B,A.&6X2sH[Gj<K=[vu~qCtWF9.k~q|zb`1C=Q[-=#,~kfH9g~Cd' );
define( 'NONCE_KEY',        '5|nN3RnW4,/CZvAohJGmkVTA;VRR^541xc}TY.*;#H2-p=yFup8O`=R|6S/.7PTL' );
define( 'AUTH_SALT',        'E=@8P|Ar{b0S9)<EuHk/ob$x0+lh/9?bJwQgA65RRxDQ<I!Ekggd4Ga 7<k^Y/iL' );
define( 'SECURE_AUTH_SALT', 'hX)J2;,x+=H|x8pYWY4!<efX$oz!1u`$Y/2#7#.#6!Mmqy@r%[1+1H}f+LSdIjS]' );
define( 'LOGGED_IN_SALT',   '>~(IK6`&]&%g >8rJ_AA0x6QeR|&ETK0KZmsjAdRlV.5p6:dDR L~InNL8dA0bt`' );
define( 'NONCE_SALT',       'y<q-#I8/!~6J_U9=7x;sH.u+EJO:HcyhEsWe=3i$fRGo$8RN-P5$mJvOWewH1{T*' );

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
