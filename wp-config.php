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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'darknk' );

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
define( 'AUTH_KEY',         'Z= _T5`s|w^ -Kdj`6|g1(;Vi|^?Cux)/i}rKebb^Jq]1QQ1_jT[^4bCqQ;s>jh8' );
define( 'SECURE_AUTH_KEY',  'la{6DBU>t=j;(q*r/c=s<KwuC)#bM)r3wd_X<W+~~s]C5TkPb1w?S]9{lEeIo^Mi' );
define( 'LOGGED_IN_KEY',    '~{^vQ>EJqY(TA:Iux)|N^ORmX)=gx~o-XDm*RYz -).Kvth_PxwP$?Xb##[)I=U7' );
define( 'NONCE_KEY',        'd=PFirr9Ydid*{6*1]*! _V wdInLZR=/!UvHQYc4WfC?HW/yCxWFb{>g:$GARTp' );
define( 'AUTH_SALT',        'b]PSYfQNf9SmWvouduG#`K;/[FNf~j606W-_7+P:TAF8|@w4?,@;AnFnN6q>$0;*' );
define( 'SECURE_AUTH_SALT', '%5dPN=/?,z;r6sSDDo>uz4yL{n(Qk/y@/7qfWN(<$#ne/DFvNCdt<ZWY-wBD+6Ny' );
define( 'LOGGED_IN_SALT',   'uP&XA1uI%#yS(ZBX8is{:@&Gkd <+VK{/*<_bSu|^Gq4pvNpK#g;^Kg<bE}mP$#C' );
define( 'NONCE_SALT',       'm>kBn`O!vK+iaY/1-0}ZgjQAUeX^hlWwEHjOI4)elTK@NeOTFNm7U|LlN/%q2KU8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
