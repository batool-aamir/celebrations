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
define( 'DB_NAME', 'celebrations' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ATEgxa&WP/&2@C!(O~eqqDaeK]jD{dFNU![yTLzL5_C*,?qc18eI*6^H3mCU2r2a' );
define( 'SECURE_AUTH_KEY',  'qy#aP#3T*fh CaM>9]gdQe%man2_d?wAwD<QDpW=7} yQdHE@Jv-16=hWiGkk4qB' );
define( 'LOGGED_IN_KEY',    'UMR-#g3NZLFj:]#*aIg?zpvRH!#ZydWWCW:W(0dT^~`GA,pY.ni.+Bek7<2^oy!I' );
define( 'NONCE_KEY',        '+1Km(&XsYL(=8lf--eF>kB}i2<^wA35o@?jodnEkIy?5%5p):u)[J-f-u;T8<Usl' );
define( 'AUTH_SALT',        '*W8BZc,K^l9X[Fh/!eJA/p]?q!tHKR.MF1qi@pb9KHg?Y;*f3_T&<=5:(x`u}V]$' );
define( 'SECURE_AUTH_SALT', 'g#tCp/PCx~svM2uW=P.P>X(z_bOOOql[U@h&Ykes|zWmX/rIU! yr].Z|_TrZ/]#' );
define( 'LOGGED_IN_SALT',   'Zc&EbC5eP7hXF85V;dd2<1plQx%_;B)42-3B=<92$MWm#r`@*6#sz3D{,O%P0u9J' );
define( 'NONCE_SALT',       '2U)9h%{cnpy|51^9oGK`3=RG/YFMo5s]}T]4i`6KG kZ;>h~T>l75X2RWa%NbK=E' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
