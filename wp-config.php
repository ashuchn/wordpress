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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         't={scQ&QwX:Y;b5jPzQLvBq Jx|0?v[M~8*M7{&+X%gNtf^q^-C&(KuO=+JHmBg/' );
define( 'SECURE_AUTH_KEY',  'wE=0Wqv*2e!Coh,B}rnMb:v~i~p]{?up%e, ?g63mQ<c:G8q:&LSOw2i8}4|EC3?' );
define( 'LOGGED_IN_KEY',    'N;6e:E2HX9KK9B`*Kc1.ha[Q-OshdN[gJ[`8{Q<X(5(C^f)}Elzflo~Km8:zV$R*' );
define( 'NONCE_KEY',        '$UngTrnvl^xj:X@z[Z&=i=+zjfsY*gAJ;#|#4h{_;~~N_GW~?~`ylP?HsT/~1$Us' );
define( 'AUTH_SALT',        '+5Z)d~L)jz^gEm>SU2`<n$S1?YIM0lFm!dg}WkO1pRDVsU)inL#-}6_~(+qcs}b6' );
define( 'SECURE_AUTH_SALT', 'l}Mm~8((v^@xpD3TZRt&7)H_]|T(--GP9f9UPzH>622nd,W>jV~$@GV;ItnbMcR8' );
define( 'LOGGED_IN_SALT',   '<bgF>&.8O}[V1N.c|*6K}FE`dEvDZj`dVwpcyRaxI ^_Xf7A#M. )KUWq{6$Q1.T' );
define( 'NONCE_SALT',       'JL=vLU,CkdWN|~X_!KY/-Oq{eEg0N`]tQAoe->CMG&m5r>O*lJ#,a&N>Rx(G&lod' );

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
define( 'WP_DEBUG', TRUE );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
