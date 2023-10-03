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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\web\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '5M%?ssHd 8g*B*mbeWx:{=P0k[[f=4CS[+B?6l`]_+LL]L#k-EF_.lZ;m7ciU`Ap' );
define( 'SECURE_AUTH_KEY',  'htCb9BJskAT+_@t.|?64#Sg;4Z).xHiWS[Tqs&%5~?ap};v+8oiO[wG5[QGo(4oC' );
define( 'LOGGED_IN_KEY',    'Gi:pF:n$>0Es5!:7FeF/P?l+pPks2X-R. Rvz,}Gke>IKK0=%/MdG]x)we2s$%sU' );
define( 'NONCE_KEY',        'P>}?lilo:1dDv7C]Uh;R]<b{nu(rP?pm[2P<.P&(uD@Y3|>jHR6jBX_f#|CAKH#a' );
define( 'AUTH_SALT',        'Bt:Y>Fw+f;(+n/bQ?H@)0fi4Wcuy4c]4@cC8T)K1Wr]S^%&S%xp(_!})H~C`/JTM' );
define( 'SECURE_AUTH_SALT', 'qe#%2`6`RF*CuNW,Vjk&aj,It,CDZII$IGy|!|JO~5Z3oq]G?Kbq_Mkxs7~V.LK?' );
define( 'LOGGED_IN_SALT',   '}3. UE-$2(~sYx5@,&O)&;c4mlvy_bgE-w0Mw&wfDd.L|CsU#jg=F 76`zC< mxI' );
define( 'NONCE_SALT',       'FP/dM`I5*]s%rC C~fHJlF3oU/y*<,w2pyc/6QQFj=>M=Jzm!nP$xNfa6tu,0_$,' );

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
