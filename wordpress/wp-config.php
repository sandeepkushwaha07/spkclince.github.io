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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'YPVbGvY3f2hHQip?E U`W[2U4X8N~pY[,:@FX(|yx`o#P_rOW+hB:E`M$}; 5yQd' );
define( 'SECURE_AUTH_KEY',  '+iW1&b%6SfP__+l)&QjWc=5is@aB^IaYS ]-.4FkJ9S%32#;bb;)v:Aw4tXyhT-p' );
define( 'LOGGED_IN_KEY',    'u?Xo4&8m4TqAPHbq]pmag^a[;,^ek0}w&n}y<k~`m-=&DRbMQGuEa=TrKYdk5-EF' );
define( 'NONCE_KEY',        'P-,#iA9s!=AA4rl4Vnp^Og[_91J,/4b@zDyKRPOdLg,8iAqXLj&oI=0u?=m!OT:%' );
define( 'AUTH_SALT',        '1TEA+h^W4@66]QFWZ, w=!WVM@hYq5t3Ll_t0k:V6,d LTaj;k&WvwH^=ELPH#$%' );
define( 'SECURE_AUTH_SALT', 'SS8*KAhy#amV?r_d|E-o.=pMz_P#o[P4y5ffklaF:fk/B$%JzA%@;H/bdq2>NY%k' );
define( 'LOGGED_IN_SALT',   'ipg{~:^U,=r[V|tn^An<3d[A4(*Sh5QX/=j!&bIm{04528T|7JZm]2aKa}O.@zV ' );
define( 'NONCE_SALT',       'ePl(D@^}loy[X#x[9fV1FJgy:b/HDud^1$xf/Gs-)iH{T{=!FgA6w5_&]|BQtU(N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
