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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gourmet' );

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
define( 'AUTH_KEY',         'QfAnh5y6kT 8j}Th6v8d~yT6CCh<4_9.]O8FL2}Z5YBh#KF{_d5}$?^&Cd|W{C9p' );
define( 'SECURE_AUTH_KEY',  'qZpfXwl$U*m{+A!h{|V73yh$9m~APS$[eEOgMqB6[3>g$I$eh+Z3<95NMUl;)n=~' );
define( 'LOGGED_IN_KEY',    'm!u4r~sD!eIQ~r:j0#yGo8sl@W6{e,.IkgvhbQ5;1jXb@^URsjb=;-BC)V^Mn{3n' );
define( 'NONCE_KEY',        'O-kD[3r;YTe#9o=Z9 caZKW^ueuv7|nu7;!g*.m^VT77DF[,(RJKM@28j isrAoi' );
define( 'AUTH_SALT',        '+pCG}_5L0H[-JF#8=zeH;.&8)KR>cm3yt!G0(c@kxWm]QSawjfrY?5?oot|O]^KC' );
define( 'SECURE_AUTH_SALT', 'y^Ds[E~hr8}:cHw$e53Z93_bJn|y;o)hHK{wkiFe-[j=V43;5vV>KyNu/**XlZL}' );
define( 'LOGGED_IN_SALT',   'R lNC.$]KFzzF;|?.&L$je]BG)tkb8}5^MiKSJt:G1%%B>`N(r*RYu(%tkWj2~xd' );
define( 'NONCE_SALT',       'bE|(HDf>,.2:R_!FNJBgsF$FTGm<M-j[ghc<k8*STe)dURvddby }27@|RIl(ZM[' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
