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
define( 'DB_NAME', 'states_taxi' );

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
define( 'AUTH_KEY',         'gbrM86b6u3xIUK!1[Qqy7<x~C>|xZ.ef`co/?L(K#f=:jAXi;vmQ5*ZfP<a#JKx?' );
define( 'SECURE_AUTH_KEY',  '[1qrN`)ja:(AN=-#oo+nDNkfA*Rjx`?v.xt|+## nOxeTV|;g!EAPw~cyA?q9aQC' );
define( 'LOGGED_IN_KEY',    'smmiN)r_P>TSDf.T}+`ao_pTI&[t~4<65xAe*54X>W=x+6[%xzg*$GI/F(xQZ$:4' );
define( 'NONCE_KEY',        't,VQ%Pv*%.b68Hg  lH*!0zjlybg0u %gW[n%0mIw?QfRWf8s$_.=[gvX^8H3A8_' );
define( 'AUTH_SALT',        '(aw%~+*m)%k2x$q|trL8zfuNw*pMxyA|%1ji[d;1Yz;ujck7`&1.`!B=|b*>gekD' );
define( 'SECURE_AUTH_SALT', '^[xBA-/;xham~}Olb_@0qgomYF}so *#WcU+nV^dgYnwo9$,?FGvLi>rr<?D+1}j' );
define( 'LOGGED_IN_SALT',   'a7O;kpw LJXTFWqrj#m[g i}mewS*Rj/wAGQn/fGrmqoUAx`V@noV2p1%/P}Bzs)' );
define( 'NONCE_SALT',       'FyW:w`~*cp}Kl/DGk+:NS`Y E)id(Vszb7?pS:Li(,IWcn]y%P$SvVz4@O`[4Z6,' );

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
