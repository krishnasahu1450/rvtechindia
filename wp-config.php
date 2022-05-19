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
define( 'DB_NAME', 'rv' );

/** Database username */
define( 'DB_USER', 'rvtech' );

/** Database password */
define( 'DB_PASSWORD', 'Whatsyourgame12#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );



define( 'WP_MEMORY_LIMIT', '256M' );

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
define( 'AUTH_KEY',         '[32b0Ft u0dAv!RPXnV0ew.HN_;vE]C Ho[vk|i:O{znv<[Y2D25siLJS!^:0T;J' );
define( 'SECURE_AUTH_KEY',  '+2J5u*Yg7u]kj}~J});rQI76U,&F8#2%]f^u-SocQOf,/La0c9;`KUgw}oc~QVNS' );
define( 'LOGGED_IN_KEY',    '<.`YQYX?3i08:fa[qD<px*haq{O]RE%zo]kaS7g3SN8k.zF;ma.Q-:!GC7MX$db^' );
define( 'NONCE_KEY',        'TrP_sr6]+h:,*-i(WO^k`Boz*JZr`)s`g8fqcFFHDjP<_7vr =-K|_B-%nO#;rya' );
define( 'AUTH_SALT',        'mrmKJ$CwTsf@B8n2jAfv-TAqtLc {Dh/(!T2fg8Jct/!L3Xra)Dk4^HE&N5[)z=[' );
define( 'SECURE_AUTH_SALT', ')+!f oWBBFodOZ6u)i_N:[dR-#1N[?XKe-/GI{XgK@A4Sj%2)V+UP./^A%BS ;-v' );
define( 'LOGGED_IN_SALT',   'i7:}`L6gX jox1~0Y1pU^in{Wj7@b?QD+EX<aUdf<y|$y:ot?Z{m7PT)C/F^mO.p' );
define( 'NONCE_SALT',       'dchp7Grq`qiN)tE_dY*r33y*27V3f&N3<q?<_J9HHKXHfX*TbC(pM8~hCH(yTsYK' );

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

