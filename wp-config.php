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
define( 'AUTH_KEY',         '~]FN2[yT{rHDq1&C2RonvMgv3-v};K/9hf1yNr5#MLJ9rVi/+N|&57/q(>`,l ~^' );
define( 'SECURE_AUTH_KEY',  '~m.=]:{atRKxCue[ LOyQ&Zp,67~{1(Acg3%kxU^f;@GibU/?Qy22HxmLc|AIe/k' );
define( 'LOGGED_IN_KEY',    ',qWx!RXT*XaylE@(-{b]a&z,di~*!D4OXUd0<OCWCz>QlKF]d5?ay|=DKfWCWBp+' );
define( 'NONCE_KEY',        '`$P $AbUexmNs_#*~jV$+?1U;tQB^9XQm_qBonl3qWRAz*;Uuka5;l) k8*:Awjn' );
define( 'AUTH_SALT',        'LaW+e8!jMB;)M=X/ WLd5~Ei4y!k,,+<K1N *=bs-ny;+%oIoJ&O=|-$.4[(@ld1' );
define( 'SECURE_AUTH_SALT', 'FeC/L>SW1pD~i{|v&D4WwOs_^3ysQ;o.x=&-UQzJ@8-B7G~7PUq^IN+ZV^=>;Z-B' );
define( 'LOGGED_IN_SALT',   'wZF[~u.^5d,X7aO@Vwt>t YN?8#JkAZ)fc!hTHk.Gru0/$Kyl39H`v(c1RQpj?]L' );
define( 'NONCE_SALT',       'C7G46`Hq&s_H:|eHAjM8A(2Iab0>JD>9G{4=_)?MDJE7UQ&B)*[s1}HZ<mzm2U^%' );

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
