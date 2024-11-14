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
define( 'DB_NAME', 'dd wordpress test' );

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
define( 'AUTH_KEY',         ']n3`3K*v{f[h%9UrI>jf?vW!1Yl$]Q=VC;0:LJG=N?J*1tlx!;wdvK->ad+mqxrv' );
define( 'SECURE_AUTH_KEY',  '<+0!JS5`H]xj~P#V3~hJ_7R&$^!5g}c.S;->wuZq;qXMZCt9_W=}rKHW1e-j;4!p' );
define( 'LOGGED_IN_KEY',    'E~Y[.79v#zMK~7a#66nntv JausoSD0iNkX~f3v`9tDf%d`g^eQ:l*L$7dT;vSuC' );
define( 'NONCE_KEY',        ':k)1ipI/.]QfJijMBwjiGFf^[&1e3^Q*E[p)..k;zeHCSE/E1SW<Pj0%KYIiNmp5' );
define( 'AUTH_SALT',        '6uz@,5xHpeamj.3zNw]YAY+b56O:ENa;~0VF/mKXl`ZCoL=rj*CgM<ULdl^q82o5' );
define( 'SECURE_AUTH_SALT', '|C3;A!u?fYjqCN<E?(]_=V1q+E_!1lEK-F2]#nD&oLRg!..]n@&?<trj1}fIMV;9' );
define( 'LOGGED_IN_SALT',   'yExuVSWv&,Fq )-ZQ8{s{>)yogvGMRWfAm^5.AVma5B:Q#>#fFaj~{b6yh$x`)w.' );
define( 'NONCE_SALT',       '0V%Hv<}9$k!qV#+WS_cfPc>w|%F~}FZ{MRz!l`hdW?-[?1PXE>fdaK~6zlEagxlQ' );

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
