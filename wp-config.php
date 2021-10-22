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
define( 'DB_NAME', 'soscommercialltd' );

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
define( 'AUTH_KEY',         'e|t}Sp+r6S};KZR2]CF,t,jYe}4&uaC]WXLvs!:s<W&]1-?oF1n5:zSn?g([rds$' );
define( 'SECURE_AUTH_KEY',  'T%W#t1k*WU+COKp@vI@|MicX8:Ld)EcbmK~p[%V!fW}iv$C#Q.!!X.Q9d[aXTi-f' );
define( 'LOGGED_IN_KEY',    'vEC{PFj.Mf%S,#Cpujcr3qVdWV]hlEZOWNU>z(fPs-CBt)u2]~~;l<UaZx%*=Bi#' );
define( 'NONCE_KEY',        't$e35:6lUo`+uUD|.dhjr|gI_W{PCoi2+EdNF].{HOrjPWC[:F/*YA)pi%XzgYMO' );
define( 'AUTH_SALT',        'CxZxDT:O.Uub$ciBezTwKEEKI|h0u,Ebkc{GqOi41U[P1Qam__O-}(!!(;`lc:UK' );
define( 'SECURE_AUTH_SALT', '5qU5k|@[Y~joL&~l4V=<vf;]4/L77K#*6Re%hrj`^&u<FE4s#k;P^pm@4ylb*PQy' );
define( 'LOGGED_IN_SALT',   'o%X[wUo7];f*TrrLnjR[d m.34]Z^g 7Sp.5BrH(7n_QWX5)M;lQMoDsY?SwhgJC' );
define( 'NONCE_SALT',       'me}5J!xc#YMiDGR?8@O@,]W0X{.$cXu^.JJ9=7<=gR*AAFzzH=rSgcE{R$jPs-%^' );

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

define( 'FS_METHOD', 'direct' );
