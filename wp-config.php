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
define( 'DB_NAME', 'design' );

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
define( 'AUTH_KEY',         'E=.HZA^2c}FOZ8`yxs9NafkMF:M,E$P;yjKt!PIxMobn[vYj1k(Ig[pV^_)gZI(+' );
define( 'SECURE_AUTH_KEY',  '3{.)<y-8,[[Dt!IC}](R(>0Jk4Cnl$x#^`:aS+EWjA,}isNq{Y{>h%cB7(63stzY' );
define( 'LOGGED_IN_KEY',    'f@ikbnoj/zuVcZ1EbNaRD[>a;kP&:z/}S;LkGe%IU$U9h3W?>8$2ckU=vGC*CIFq' );
define( 'NONCE_KEY',        'jbXOaeO_D!)7M>$$}NgApMb}>#>kb)P6Ht`Oax`<kbmLoUz:ygh@QNijaiQ{_+UQ' );
define( 'AUTH_SALT',        '&aWciu.fyG_buI6ijPVZrh8baPQ5Ji5ZTs;~>9K4 ;,z9EhzaeG$?;;|FY(1T{0X' );
define( 'SECURE_AUTH_SALT', '[HpL9#o@!E/TuadiZURYE[rc}Zo;WFG?X*PiP+ajQ+gY8K?h^cu>ix(Zvv]de!T1' );
define( 'LOGGED_IN_SALT',   'X*2I0w*Q S 3u5I8Hmy8Bwt#C<M()L Eri`6:Vrnq9aq3C-(fg@KNOwk8[I~c_xh' );
define( 'NONCE_SALT',       '_2V@?i 80OB(:q]hET$5m]0DI%vwgloI@`#[(RS5%^rDs1(9Z92M4Eq[[PN0P1VL' );

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
