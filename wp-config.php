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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'number1_db' );

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
define( 'AUTH_KEY',         'tG{s+EOr_Eg0_&`+E1h6OX_z50osLAd3B7(Y6r(S^q&GVZryn@%e[qPh4gK0=GIO' );
define( 'SECURE_AUTH_KEY',  '| ZRem:KNBlpRcaOeAZL=n4lGAr*z{8t0X6*`^0`.TZ@1/{wEb/b9+Tc0/Bd6PL8' );
define( 'LOGGED_IN_KEY',    '%~!c9)Hc/o[nN%OXP;aIcol~rF~pvhW$W^nng#R>*4E7p[.fGqaD{@wll:,?YUQp' );
define( 'NONCE_KEY',        'v~p:X+}bG>#(NqhyO%;PJOW_fuOFD5,gz%Oj1rc@[={=YE(C2k9,yZsB!g;LgTMG' );
define( 'AUTH_SALT',        '%)<Ss8Y}068ZyjH854H0*uuIg]Y<o<@&^SNgCrilT+6i$!9zvh3`SiN!X~|B1;[M' );
define( 'SECURE_AUTH_SALT', '<.W/Q5}3p|@$C20OlZHk|()_B~@um#Q74!9$LViUAoX5d~/)(Fwz6R$5LpIw?Hn?' );
define( 'LOGGED_IN_SALT',   ',r@=EbR2`zRp}2 GY5~9qJ:pZ@zsB-?*yM Vm;nh| 2r`&##1>S[%Ja49;0sK-)%' );
define( 'NONCE_SALT',       'u+3@dI!Sv3FV~^TfJi/GM;HC@Gj-5J:YH*`3C>86TGZ)?JdG2>TpEEO+xa:%8[{[' );

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
