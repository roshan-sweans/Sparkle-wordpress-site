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
define( 'DB_NAME', 'sparkle' );

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
define( 'AUTH_KEY',         '<3m/l&gqVEw!BV>4Ll;`_unGNOqm X_7N%>duX6,G0;$,O&fdDcaV3j %K&9>Fs}' );
define( 'SECURE_AUTH_KEY',  'zZ]L7Z#4SF0Y>c%qO@~}Ebhk5WC-0GWVt+ysg6JI#Ujx~S+>,UR*@M|,Jo@K*mW}' );
define( 'LOGGED_IN_KEY',    'wXry-`XT=#P)NEil9tbOMZ9@fMJp_T<FeFcNym=Q#8E>#eDkL78QuvGa1;<GB%E[' );
define( 'NONCE_KEY',        '@UOQ$h_Fn6EBf^Aa6%]C9prze}c.S.GCQ=6[{MqR22|G97M`<ezGV+bUXyX>5%M~' );
define( 'AUTH_SALT',        '`&JB`YOQZIz_Wq0w]8yZ7g!7#-9 }?{3o6Q>m$o2*XhVKn6*+<e6pB-G:Iy*9l x' );
define( 'SECURE_AUTH_SALT', 'rUwl{O*,XyFR0907d;BD|GD,B5JEGQW{a-I,!db=ZmY+KK4JYKJCY-==-f|VpCv-' );
define( 'LOGGED_IN_SALT',   'w9M55b@uj?K7rb1t30;O9VZ(Y)KGQL:N4RFbsBq[%c?(i.E6<XFKPV&1Hto],CZq' );
define( 'NONCE_SALT',       '& sBe@_~=fE4{lPSo({o2[0 }Yg)p>,ajdvN^jvWd_Xc i=xD3DjwOcqhionPi0~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'se_';

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
