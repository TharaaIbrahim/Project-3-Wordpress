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
define( 'DB_USER', 'tharaa Ibrahim' );

/** MySQL database password */
define( 'DB_PASSWORD', 'level' );

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
define( 'AUTH_KEY',         '|Wzr>8%K_4la$3Obf*~G*Ph0*aw=$8$_/Mt+ 8oOtky@@`*(:t/%2]WyK!!nBPB_' );
define( 'SECURE_AUTH_KEY',  'WLY)F~.vxSCusx.=I3&q7K;CLmjXw$|o6U{8F?A[V&|AvqyS.;E:,G=O|P}U%#^q' );
define( 'LOGGED_IN_KEY',    ';O Mtk[s(2%$gkb9,>!aV)gt4i1gU$[*{QZ_C<ghjYZ0F2&!Dn]G`i9*T::8$$V:' );
define( 'NONCE_KEY',        'w~1%1>P|z!V9w5oEeH6G*j02]pYJN!b>_xEw_oyj=<<8UoOY%hzbT&E0u{M:v1J.' );
define( 'AUTH_SALT',        './*&eC`~pocAAk}aC|yyMvat~yW3*?[[)l+-Uq2dEpS>]XJF^sai!?G:}R;u/0Pp' );
define( 'SECURE_AUTH_SALT', 'NIk*!tIGL18A|OuH{ojVQf8h[h}$>2$N+]QXQutc++8w_P*5RvFpM#Y)HzWKI}]`' );
define( 'LOGGED_IN_SALT',   'I]zvL=n0{{fy ==o+<&q,!Dy=K?:te^VDqmE7tx+@al226xe=mfVT)-X22x.x{LD' );
define( 'NONCE_SALT',       '|)y` *$#g-|#m3#!:9Rq)TRq0lB`qF.fj#W1*S9-zJ:9p q[b|VIX{-od|~..$4_' );

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
