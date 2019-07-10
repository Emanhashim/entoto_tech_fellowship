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
define( 'DB_NAME', 'w5d3' );

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
define( 'AUTH_KEY',         'WWF=8:Dj;B-83}jCLmMK6sYsw6WIF r4nC$BF?IB4GAW6R7UzD$Vr~[ /}&6>Pv!' );
define( 'SECURE_AUTH_KEY',  '8dvNT-&FIb->*{>X6`7G71`S#(dz%fnB|R9<p8ywhEpnA1`EHeiNo}K#KJk~`r?h' );
define( 'LOGGED_IN_KEY',    'O|(5;(%%b;YY60CFP]e%3_ow;7UO*vGF&]N[2Z#lPoVdmV`z#FL`6q3/_ G~$.*d' );
define( 'NONCE_KEY',        'o$s!<1]LhRZ58X!lF3d0@%C<rfGtL/_lj%O3i=;/Ndera3M ZKGsi3znyOqwO|}<' );
define( 'AUTH_SALT',        '>% $xFUp951wgj-x>?7,p-^cRuO]slk@6r77+tft2K ;K(.=g:]<8Utb~lvL:Lx#' );
define( 'SECURE_AUTH_SALT', '-njmi17~q19]bfjJQR;Dx+66U4lc}=AmF(_Zrs8L<1fFP$6L|lk;osBO@;ORd#L!' );
define( 'LOGGED_IN_SALT',   'S(6Q-ioK^5+;I]2*9}}{W*(&FVkx|YrV{r~]SsUsYO-^M[=s/3s6bX#pcnJ`+Aas' );
define( 'NONCE_SALT',       'S{7P{r_Y7g!.64pG>FYO*E`^p%z0sq9n*Z 3VrC{?=Z5u<FX];`To&a~MT>]UNo0' );

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
