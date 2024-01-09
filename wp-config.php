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
define( 'DB_NAME', 'unicamDpdtt' );

/** Database username */
define( 'DB_USER', 'ilhomjon' );

/** Database password */
define( 'DB_PASSWORD', 'mydatabase@80' );

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
define( 'AUTH_KEY',         'OrdF#UZKW,##{ =JC-[;*pP]@u%-if3EbEHG`IS(saVRv(-/bg1>Zt1/U)[DT`98' );
define( 'SECURE_AUTH_KEY',  '>0a@gg{C]^%Ybak8:%lvK0%&3#}p{$ZxZ<;_pzXAqi:+w*3{x{>ZWtYlC39<yN$y' );
define( 'LOGGED_IN_KEY',    '3Cmu!]D>+4Wz(%_HTO+47$z? R_^p2x~@v_ghtAB^znI~MonRwPPscM/HLbhUW,8' );
define( 'NONCE_KEY',        'tM@X09}w9Df@>6{CTEmEO! <M/Vtq7Rf_uP1kMr,7URF,kGRY_a(!&N)BT/U;/TR' );
define( 'AUTH_SALT',        'F?}E`:a0:PXE#+v.:2]MB?d+[XZYGf5mb]t+w<g7A^:F-5=<zQ4eQ!&J]u`5-o17' );
define( 'SECURE_AUTH_SALT', 'NB_3 JH1^jm|.*kcE>7Q5U4|s`l;oLhm+6b,l_S@,^q/*6*COu/0L/(4PL*+^^bf' );
define( 'LOGGED_IN_SALT',   '_}a*qRrlrrtXv_u~l}P.pI~Y Mj!cbmrm-~V[>ohXv,d_hw9Rx)C-E?l}xEfyDG)' );
define( 'NONCE_SALT',       'H|Hs4KeUARG1*W*|WYzETQc/gXCY}1_e`dbEF,<nuVj|9qO)6i#44xy[9i3Ov:RG' );

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
