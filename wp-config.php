<?php
/**
 * The base configuration for WordPress
 
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
define( 'DB_NAME', 'polytech_dev' );

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


define('WP_HOME ',"http://polytechdev.tj");
define('WP_SITEURL  ',"http://polytechdev.tj");
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
define( 'AUTH_KEY',         'dlp8aysq;EZU=Z#}vT`%V5A_@#v.?:98{3=|n+Jj@Gs>Q{($t;fIFfJup{FWp0SZ' );
define( 'SECURE_AUTH_KEY',  'be#l#cJ~k~$pL]J(2*TVn:Gwd5dWt~g<?;-LpSI5yK $4r~zgh{G !@YJLk/YQxL' );
define( 'LOGGED_IN_KEY',    'Ohjt&_060HnJ,E_KJ-:Kb;5_[ L.ldHe.$D]DudeMZB#[8*]|=PY;Ud%h0y7o?kY' );
define( 'NONCE_KEY',        'u[(@V,nW|1IjIz7K =e2-k@7,2A|G+4!L!m?jSRZ*.`_w&D7G$1DFmh*fdJY%Aq ' );
define( 'AUTH_SALT',        ';-RyrsqPI]gCdFp<K)k*QKbU.L*M!jkk$eQTWBh4D!Ahm @ U49yGsrf-iV|a v&' );
define( 'SECURE_AUTH_SALT', 'NLI9s7&aI6lD*xF]Q?Ek&}`OiF>.Gci&NQpL=]uVa#exNafb~5j>-Y#^Hs~vrzG(' );
define( 'LOGGED_IN_SALT',   'nc*M0z`dfaOAIdSE&Yixi%>lmi1SB; _8)6]no7(2O!B<@&qlmLe~CTj4P*Z ~{4' );
define( 'NONCE_SALT',       '# ^*OCxiWe_+Zo2`0.m2kf#&gRQhb<vO3!DzF5R[dqc9Ry$Ei[JXfWS:tSP1x >;' );

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
