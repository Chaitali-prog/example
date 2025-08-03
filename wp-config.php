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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\example\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'example' );

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
define( 'AUTH_KEY',         'Ko;XAsd/Ys*sT^YZH^zyIZSn$/Ax7B]T3J^9`A/D.NAVVSM$s~eBeC8f-e5QMp&-' );
define( 'SECURE_AUTH_KEY',  'b_*e^ErX:S)cCl)q,&xYk%RPdO*Y)%5{B[/jjNDps8d9gbN55(x~1} NXP:2~;[F' );
define( 'LOGGED_IN_KEY',    'em$SlBt>cE7iqD0o=3<FmvN`cr>.b=-~/8bz?lt$`Gag@KD0=?8]TWCHy%UB0ch`' );
define( 'NONCE_KEY',        'hu`@-Q!G~ A$Q|oW?c~gyL}~z-$XD-R([1l>FOSXW/V)+W:-HBhtnzolsB`zz2Ra' );
define( 'AUTH_SALT',        '@A=FT6d}[r$^`sb4r^2$@W,H[/HXD3F<?ajKo#g28hl2_?F1<=d{%|rg_7,UV9|1' );
define( 'SECURE_AUTH_SALT', '#3 :}#5tY/oxDxZ1?(%~W#sK_G@A<v$A,$h/K2M.v4 0p7({UKt=AlAy/j~xOD(P' );
define( 'LOGGED_IN_SALT',   'CPbG?6Xt`)t~JJv 5~LV<b$*Xg|on~zu}INPA4gfJT{nQJt8t,.BI6?P.Zj?0[W3' );
define( 'NONCE_SALT',       '=AkI%vtP%x(}[=v3(&)ngXrEK?LX/-a5_^_6.]JY7M9b.TSq,u!Nl]~~%,|I;xCT' );

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
