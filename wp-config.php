<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mickey02' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']t[N+ Ga[=](uc+Wlyaa`o`nAe.kNN,|Vp7kbzRWSQUfgT(,a_<CkUuh2(#v%Utr' );
define( 'SECURE_AUTH_KEY',  '&J`b.Oh2E>t`RP }+>`O2|NsR&#msq3m[~%tZk}Gp<O0Eg`z<-t e6Nrbx;M9oVc' );
define( 'LOGGED_IN_KEY',    ':Nk7#_PD.cXoT!<]/H1ICv3GF4>cRW8F:&u)8oQA{*zSTYojOC^n&X56owu:mc2*' );
define( 'NONCE_KEY',        'n6:J_14Qqrk7=io<.hZ bvq2cOWRILWY#<Y>O<PL2`aJ_*zCHKIMl,>I:Wz JvjM' );
define( 'AUTH_SALT',        'MV|a[FULn_*2plK/%Dvt+T@wYt-^@!:CCg(-r[(PO]n=OR&nSfZhv.v6Bk#Q-W/<' );
define( 'SECURE_AUTH_SALT', 'Yp9T[Y/NH8)IWq,~li*xs]c<KoMvbHph2pm_j*KDYquhwY{SDb]#R1K^e#udCCD]' );
define( 'LOGGED_IN_SALT',   'QsfY4u2@V/zV,FG9KkNFfT; :OJ=U<VgOdQI$z8:4fOtJ2H>zlO@+_v&zP1QSF>:' );
define( 'NONCE_SALT',       'z|@sfHGbE#nL i;m|]&|}Ndi9Pj&ROZ/!72J<7~4zMJlMHc.)Rl~LrrCY9tP,(0_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

const JETPACK_DEV_DEBUG = TRUE;
