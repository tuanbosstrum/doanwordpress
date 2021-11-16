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
define( 'DB_NAME', 'sachhay' );

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
define( 'AUTH_KEY',         'nlR!61%znNm[ZtnzRPt@EDQR1+p_&9_xyhH^bR$;0$x=6hSw1J}`>My2SZ/z .(T' );
define( 'SECURE_AUTH_KEY',  'VXa/60hrUB{6sj]fRb*5j19/EWu1Y/(Ro^X1r6K}7;&!}$Rd*wB=VNw_GD6Sa !@' );
define( 'LOGGED_IN_KEY',    'KQOKXES)Z3Ix,fBI3@`bK%Z|RZ(%c0xwDa/-SBs,bM6<&kwGs.1l`A? +:bWY^e%' );
define( 'NONCE_KEY',        'GZ%;< OJ,Kd?=JZ2~>B*Si[5TkLfZ2}aPOO.gF(z1x/5qnjx@N%TJw(rsD(sD/qp' );
define( 'AUTH_SALT',        'hlAV| *VLGprYN-|Q94KO,DY995Udi*<Pckc%xX25;pIH;zEQ1FlZw,1<_;NnACx' );
define( 'SECURE_AUTH_SALT', 'v#9FuPrij<(v|Z-G07J*cF,-H)F2~Z5T4f`5|z:Xa>rXgPJg;FD@vnl?z~4|M~1$' );
define( 'LOGGED_IN_SALT',   ')JB0k@>r^yh4xdRdIb5*2A}coaYlcyR8*D4?wRgpze!.X:jos)t|:&4{]MuTN;t8' );
define( 'NONCE_SALT',       'L%PPC]3FDI&`Jmtjfa{J9h*q}xF#*xjM`# |KDDcAb?wulkr/Ntxpq>%kEq~u_|j' );

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
