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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^aGk,;c6_%K3Gdc2m]izz^[N=qEJ<T$#$./X7CCEQk4/.r;gv4<o_qO|DZ(@-Yj4' );
define( 'SECURE_AUTH_KEY',  'd.g5z,X?]z[zS^_5qu/!f)sD<FXdqbtb}GaNADl2]LYK5s$@r~@Q._*b%D7,{wno' );
define( 'LOGGED_IN_KEY',    'S=1eQl(c}|Uw_:HNbV!TKu{$,urMFak{?b4~:1r{s)msNM@q&FCGJ+*~l/xEsJN8' );
define( 'NONCE_KEY',        'hClJO@b>/[~+*K>#=g7|dObiJ+Z?u2)A[j]gx*atl#xzSVv-&pwkza^m]~ET1L:}' );
define( 'AUTH_SALT',        'FC&S5Pqo#43L(FyouL=E04FICM0Q,:D3v]w)>+iR4c:cX{CL^.Kc7nCQNB35`<3x' );
define( 'SECURE_AUTH_SALT', '=k3Zh],qZ~L^d5IpVm sKR3k,ri!.Pa?O1.Jyz^;w!e]^GV-rHABE}R<D&PL-<YB' );
define( 'LOGGED_IN_SALT',   'J91H5ov$,D!nGg)>~&f,AZt9L+>?h_^.1vi9<`*JVo4FoyoitS&]j]>y[-|:l5q[' );
define( 'NONCE_SALT',       '9bZE0]0(-U44*|{KDDZpIVPp)n85c|^9.Mvob?34m)Mw(N6#2Vjp,1<)h|4[BF%j' );

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
