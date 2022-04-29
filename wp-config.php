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
define( 'DB_NAME', 'plugin-contact1' );

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
define( 'AUTH_KEY',         'jya)A&[[vW)h?)-$bVs9]h:S%%g9LRs!xMs;tQWXo}]OCd-6:TY,Q!laKVqRp[(R' );
define( 'SECURE_AUTH_KEY',  'u; )X9g@4ug@;F@dFsru[8{-zUN0jmMf`l.v_Ao?W+_l^8TM/<<]veDtq5HR[slq' );
define( 'LOGGED_IN_KEY',    '_r2A@?`hLFLW>h?F0MmZ*=a-g]MRu6p#%s+&F4o-rt=#2Umyp&vvgG4X8<EUVYSH' );
define( 'NONCE_KEY',        'k?[V97 d1,7{4-)V$Ql;a5-BV<hpC)iEuc$>xUa&3GrYM:)g9@:dnV#}eDt/jR|P' );
define( 'AUTH_SALT',        'X-@ZgS#J@*3Tt9G03jU<IUl?e<em#z9jW,/`}x`EVy7bo(77wm6cJ^tn<xf+n]aW' );
define( 'SECURE_AUTH_SALT', 'gTV3D^9F-QN{o7&MC.jC`&%9b~B5^|]S2zwP$CqL3^p?t<9S@>A[z)px5YxGnbQ9' );
define( 'LOGGED_IN_SALT',   '(^`N0`+k;bF]P8NnMEn>MP[t|>wllr6KZ*z*6RZgguou4Ho?AR^]_D#9P,OBfmyF' );
define( 'NONCE_SALT',       '@-VD+_L|%9?8p>r,.bck*9K^y.uLW*o#et|4Es&7!cO,*ZE5Yt [%(wBA{! JlkR' );

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
