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
define( 'DB_NAME', 'cms_practicapw' );

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
define( 'AUTH_KEY',         '6WppNw4cBbUc6[K:I!Th!%ac2Dh/07#y]po4}d#1*^|.5{xQr[u*U^y<dB5U$r.Y' );
define( 'SECURE_AUTH_KEY',  '97~z,qK)pYV{vXpvt3^4PFf v3E5J]k]EFTWfHM=7l3Ot>jKiMR</+]9?_oYP#{B' );
define( 'LOGGED_IN_KEY',    'h^Tb;Z/0p~JzV_!;uoH40M>3<yn31WL?/ >)!]COY~v/kz0GkGB(hUGh9$F=109}' );
define( 'NONCE_KEY',        '-tFw[Ja]y! R0bAy}FY$UBW1#gY2`NMvH?%QG20^aO7Jh)%L+cVRx_xFd3~c&PRV' );
define( 'AUTH_SALT',        'w`veiXdYFnUA{N3TGK<e*w~ppW~AO00C7U}RC)B?Pc#b5QoUS3(D%*{+`(4>QV9[' );
define( 'SECURE_AUTH_SALT', '9u5R(BqdFYJK~tW<8$QpfGb5mL$KkU&;8Ed7 !1X&{FVMezS?;l|]bo!E NvIfIY' );
define( 'LOGGED_IN_SALT',   'wYbs%uv[!Zk@?OSnPi^.Mg)A?~2yY>R2$1rOcZ6[dzF$f]03JGBf{9cKEl]b?ncO' );
define( 'NONCE_SALT',       '1yGtowOphB3OsV2VabcSf;y2q!^*|Ne].E^iDNf3|hbT(L1,kGRqfolV|?s#e})8' );

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
