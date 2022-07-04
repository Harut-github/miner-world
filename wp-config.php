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
define( 'DB_NAME', 'wp_miner-world' );

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
define( 'AUTH_KEY',         '}3J.Bs+2;4e3kJR>_U[P9Nd<-h(yb535R?0 Alni?K_@XU)s|%}BE>]jOj5>`P_(' );
define( 'SECURE_AUTH_KEY',  'WEeRj3`*|T;_]h`#QK:,))Lv?(EM$&}|Y:~QGg-*6c@Q|2dpbh~JeXz5p1Z{&!>U' );
define( 'LOGGED_IN_KEY',    '0u5R+Y`R]~1k};@pWrCYP8x.~A$WsD:6%W]6(lOU0PI-)m(bWh+wUG#wM^=MpM_a' );
define( 'NONCE_KEY',        '3)8Z+*pkS~c(qs#puldVo/Q7Uc%(9;$,Q&he`QQ@_:tIwsor]MZp5CVy&~`Wr1kf' );
define( 'AUTH_SALT',        '0f[[<(5YtGd=G/w3p@rw-Tt7nNVA_T:s&~Ae&Gg.57t=E_|@;57_A&q9flWCV/YD' );
define( 'SECURE_AUTH_SALT', '~R}dptj4*vehfm>PC?o[C2E6}YYO2S!_54Jygfo)n#`:7Z+Ss0<}b.!Z1,)G[04p' );
define( 'LOGGED_IN_SALT',   'IbY}>YVp/y<w&HNdjylRu<R0HoRp3TEJ:e=>kerAg -?#-61q*I#:^+)-exT,V_(' );
define( 'NONCE_SALT',       ']K8$$q/g)gx:D/OK[f:p`sK280{A,GSXr[1q>tts0,:@ka^Gpk!Cyfotyhu<DrG-' );

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
