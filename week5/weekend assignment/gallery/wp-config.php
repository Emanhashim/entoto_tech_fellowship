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
define( 'DB_NAME', 'gallery' );

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
define( 'AUTH_KEY',         'U+,&4>&r8Wg# [}kHpqtjewWEZD<(P{0=0y#=&R:=[UkfB3H[}V[ys6v*R_L:IVc' );
define( 'SECURE_AUTH_KEY',  'vPbdaNlw)9z?L#fZtH! dnpvx@n|&wSe/dqLBy~ViXHv:{.XvD$={z<i=fsi[pz(' );
define( 'LOGGED_IN_KEY',    'fmCE<ll<>Am<X?fa8SvbyObsY-.HZ)m>K}+m0-$)yYbQLoa2:YK9k{JY_ain}_{{' );
define( 'NONCE_KEY',        'Mos29s!n@tnoF_e.5O/q%O)9M*s8B>>oZncxzH}4r5-r6c#d-(ev0 |hy7wyC8Aj' );
define( 'AUTH_SALT',        '7Aofco<:~_Z)Q1DAa|XLTftjOO+_/^GI4C92%2aL#@GVs`KkV#OY$El<uztc,Ju*' );
define( 'SECURE_AUTH_SALT', 'a^}}ewd&06iRpHk:u7spP-~L=[]^+%7]eFz/gq/BXWfCMe1aogu]n4@VS`.fDs5A' );
define( 'LOGGED_IN_SALT',   '+BC810jC]9jyX+9BODlq>(M|a(>?~.mdayf}7C@,x!C#?T.uK[_7WN8^bo{ih)(+' );
define( 'NONCE_SALT',       'O%tg?yTg-g/ZhY-4{oKD]R]=4wKwJi0xRwFzUO<2i3#iFNz0xD6ys<tzl8b9%l(X' );

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
