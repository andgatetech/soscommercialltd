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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soscommercial' );

/** MySQL database username */
define( 'DB_USER', 'myuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mypassword' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqldb' );

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
define( 'AUTH_KEY',         'Lj 070IM[`TPva+3gHV4@lFuD97=ViM8![^EFK~3m[nO[/sKF,{J49ssBVPt.#$#' );
define( 'SECURE_AUTH_KEY',  '4*t[auC6Xbcou,NRw[X<]x o59bviK$1!W{R2x2Y|`WlI$ieeHp<w#r!SzE5?^mS' );
define( 'LOGGED_IN_KEY',    'nH2G^4mP*uQI{wy/^UL;92J1d7A1xn{=L!dWK;~jY-PXD%fUP:|vr1hDO4Hc[s6F' );
define( 'NONCE_KEY',        '!Fneq/-JgW7$idFu$,xaucekoYQ5=Fa#,(; kF}b9C}QIU,3?,t[Ehr<Tw.5nGa9' );
define( 'AUTH_SALT',        'gV_,Vcq#Q0#e7|c[([dV!gFm2s{Y9J%EsC9#htfN)~:VI9v!V#]A!hb);X-6VRhw' );
define( 'SECURE_AUTH_SALT', 'S5jPHLee)--gH(*b<A6~w==/ CqUgb{6R~!TO2jyM<bnN%cxo#QZG,rgJ2TZ4=dC' );
define( 'LOGGED_IN_SALT',   'xasem#nRoV9)4 1s@:HlEIHD2o!K}pMTz81rI9-HzZ#A~k5p`_jDQy_^quTqv|+@' );
define( 'NONCE_SALT',       'l%*[NX0t&CjdW8:*r5s}Vvwn`p4FEi1rB6mLT0U-}7;x#/IU+DNa_wYB=E}5cq#z' );

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
