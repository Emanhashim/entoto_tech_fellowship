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
define( 'DB_NAME', 'homework' );

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
define( 'AUTH_KEY',         '+;{3#=i;Rx3BbL.nlU#Mou/+(i|/bxoo!!r;sEOU:6/%q/@O=<~};9Py[2@6r^-k' );
define( 'SECURE_AUTH_KEY',  '/+bG@pxB(,A;~Jh]^$tepPZ(Acpe &a]oScJ1v 25%c.s`C~V5+pLM:B|T#%}Z8V' );
define( 'LOGGED_IN_KEY',    'Bj=iNO*+.~&:/InNVhuDCkk1fQO|hX[ RIT|k>`x~pM{A#^wh+MVl[Q2{ZLz6@j`' );
define( 'NONCE_KEY',        'a1>oy)1gveO17qL7@V.yi}?rS<n%l*~oj;H6T^$_rKLHyWQ?LXuKYiTk$zEYefxJ' );
define( 'AUTH_SALT',        '[6ScLFu.+[w9t:+4ZAIJg$+Y-D:xtSWQq~(Z3GKxiPuEGYmqoY4_x#IU];q-fcee' );
define( 'SECURE_AUTH_SALT', 'MaJOi=a[~(tg7dzp3:OV>QP;rT~!cm{dj5;r^`o-h7FLHR|CFK$h%l0C4}J#l9+o' );
define( 'LOGGED_IN_SALT',   'lDq/IRwi:oyqE&qnfP,q|TsDL[esP>>SAts -W-tbKxVC{Ltn?h!^2n1 }fkqg;_' );
define( 'NONCE_SALT',       'p:=l`CZ,R;rv{z`}ZcDhg(GBKzvb*BgooNgqxz?7drqBDfakM/?:nkg8IF2>p,o2' );

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
