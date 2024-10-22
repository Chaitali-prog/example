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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'kd]X>cq!K-=+)p@lbCavSRb[Ms)w^c&yL&^M~Pc{K.L};=)0T6d5,OuddIOS*iXZ' );
define( 'SECURE_AUTH_KEY',  '_S$}U32EJ-SAFU_c*o-:+KetK:@KMkn7OxgC?8{3hoHZ&5L@O1[YzJ /s)SGKf_t' );
define( 'LOGGED_IN_KEY',    'O(|X#zaqd-{q#U2OVSRgokds`JIn5G(<Jq>K{e1PIM`p!))=|<Ei%pHaFQ:>2.V7' );
define( 'NONCE_KEY',        'z4hfcEtA/JPd{Jr<lQT=9}(;HI$`_I5vrn}r6a>k1E6PC4a<q=aj8RpQ,utvSY!E' );
define( 'AUTH_SALT',        '[B3LTIfF?g]#<a6FX$%A*tsZk>%+/5Bnp)m/f);!p3iV;,P[)_hoR%ls!bbKY|[j' );
define( 'SECURE_AUTH_SALT', 'fp8b<2PeNWbgXWSd!GxcG*FP8#[6P$W:iV#3ZJ=NPWU@d+C+N`F,d8|@IlnxG$c7' );
define( 'LOGGED_IN_SALT',   ',dEhUG7Mz/)PTOFW!$R))I>t!#yfc!p78K{q.WV8Q//O&{sPX!]J~>?fw,6oismF' );
define( 'NONCE_SALT',       '2yT|OwG9 AJj1R&`G^tUsZS}=*]{E&;h9Gq#>|1!-=:.{S5F9z#xld%jA7dyiJu7' );

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
