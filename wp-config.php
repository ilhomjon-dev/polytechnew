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
define( 'DB_NAME', 'polytech_new' );

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
define( 'AUTH_KEY',         '!>)NF[0nhA&C`z;cnv&3,LnULQ~>~GSN>QD5[YC5m 3n_7d)>|Bed+`#6wld1Dgp' );
define( 'SECURE_AUTH_KEY',  '0Y@q(d#h#gd75t9%@QVIULa[olEG(R3ZU_L*H|(>6n7*z+{wHOiz8@}H9eczxS j' );
define( 'LOGGED_IN_KEY',    'jG/DBvr+gD1OMS9A@bXfI>l>Yp ,Ohz<fw_RU0t(uIJ5?rT8VE|.q]9!v$W}twt]' );
define( 'NONCE_KEY',        'Cx{){e|Uj.Jh#h,~r@MH}#K/Unjf>e54T$Xx(z_Jgq%CW]GAX55!5)WX]i/T!M*a' );
define( 'AUTH_SALT',        '4bJ4aQIslg,9U*9x?RC!_Y8ZgHJ/uFCGzF:/WagLRH.)ydC#,wg{Wm?RKei8UI2[' );
define( 'SECURE_AUTH_SALT', 'vAHJZi.#I;KhrqiDi2fVC|&#[*/?Y Jt7jj+ThN#c9D7T<j(&.NTUvz@MxjJ2G~s' );
define( 'LOGGED_IN_SALT',   'hAE|-fYI81[dSXWqg ZE|1t?WR4JC/0kw]BXOIp[%q_<W,FJ%4OX`zLKFF}n YDW' );
define( 'NONCE_SALT',       'R2.odT$aiDsDPgdrZ dO)A_{gbQaOmKO#U5ko GUknb.UwfGnx;LAeFbkGaQ>MFi' );

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
