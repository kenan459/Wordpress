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
define( 'DB_NAME', 'newLocal_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0pWx_?i8&N,RuZU6&C4fYS|deqmBKpjIW14pkE9o%V>pI(;*DWUTk;m8fa#cBl_2' );
define( 'SECURE_AUTH_KEY',  '5/+-P-(q~kD1Hf7z:%~9vyE]&mHwlWa$=8~!.6)zH>,hkVHz3=;9+lxox:Dg,qj#' );
define( 'LOGGED_IN_KEY',    '=KT`q.g7MWl!wQu6h4p^BBI..t4Lp4e{kV$VDu(!Cj! p  WU{Gpp5L@_S#u=f!N' );
define( 'NONCE_KEY',        'BJIbLAeS1<|`H?]GF>ALt,TF!hFotYgDG8obVW>h(Gw54{<`p1c;DNYf/ug1D*Ad' );
define( 'AUTH_SALT',        'XonV#Nr(0-z2`eewHeVsWv<E9-`aI,k--t8T^q`r8e!)d/7wRx(@A]+atD1?)59T' );
define( 'SECURE_AUTH_SALT', 'V}]m[1eMATHv$uE5<Cxr~;jZtTDNV.sQ/em^os$$N8wyhE)Uhs,T5Q_kD%kQVT,#' );
define( 'LOGGED_IN_SALT',   '7<q:);fU;HqaD@$GumMBN45Xy):3[G[;RbC,R+z{2eH*i<S0V+cX.VzBS1,DlhrR' );
define( 'NONCE_SALT',       'bv*S,e&r;x{ZK9qr%I(&re>.m0V!+JXcKZ<J((Q{)Iqp3cH>i+?:^ hj+&W5Z*r6' );

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
