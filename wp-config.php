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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ReiKn}5(6pzx*S$ETCK]E]IQOlZ j<2$:*)l6py}%~Dq%8Cl(HE#$N/*Fn1UeD=w' );
define( 'SECURE_AUTH_KEY',  'Q/~`vqs{SjixZC9mNe?9o*DA5Kk7D:v<Nx`-iG;Vxs4tp>QrvLh<U80(|yEQvDx:' );
define( 'LOGGED_IN_KEY',    'I:O)A !%(?_K*N!m0q:vR) `$Q?{:[}kwojfN5Dp~^@9U>3F_/s~ifg)(iAFRh/O' );
define( 'NONCE_KEY',        'kOsW:}WT0]1>[I]Qo2ny6o !CmM&md5K+v`Wfj=C)q8ObW`:6PnC6h_zLmDQyE*+' );
define( 'AUTH_SALT',        'Z%};^]rUGwC|M[DpT>|cZdBghi8*ye=ITJ>co^W`4su[u(G^_ {@0LXo}s_;#L~[' );
define( 'SECURE_AUTH_SALT', 'pE*%d+VPxjj<CxlM$ligL=]3<.-/l^O}o&)EjRs*|]4S672hqdu-O}.J-:HL$:h&' );
define( 'LOGGED_IN_SALT',   'ukl<xi*0ZAcoiV_+Y57WDk/lWP[TLd1XHoSC/A-w:vt?Rdq.!@FMvEM=Ee+KT2^Y' );
define( 'NONCE_SALT',       '7N3D]9uu_hhIe9$8d 7Y}a(OKYWF5N{jdXw!A`CJRG/!~Qyb<;*Tc/!v8?^pdLf,' );

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
