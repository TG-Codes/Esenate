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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gpelema_wp' );

/** MySQL database username */
define( 'DB_USER', 'gpelema_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W1NyCU3w3wX8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`8jl:.!GqKz/$lQ|a[gtloYx&P4qbJ] IrN+--FV<p:b=-q%%Fg9&7]i7IPSl_h:' );
define( 'SECURE_AUTH_KEY',   '/vHzsIo+$5&-[henP0]^.3!bYrFZa@[li)uE~w?Bs0t|3C=duC;gDZ~SL7qNdt1U' );
define( 'LOGGED_IN_KEY',     'tm;`U{L-8+,;*f$:IXO^1|b$;+:9vh1/7JGeP:664FnIZOW{G7)&^ShF@epwI;mG' );
define( 'NONCE_KEY',         ',g}VLTKU~MGgY^pzpEuF}x]Qnd x[Aw,7tsZw*Xm$KbTAe=_P8H}s8T6iqXZE*cH' );
define( 'AUTH_SALT',         'BG5mOA>I28k.EsFLmBZ 4|BE5z4LuIwK<]8!=C }6cm DEk2<!mi1IN;mKC<d65Z' );
define( 'SECURE_AUTH_SALT',  '*O{Xl})pHR?QE= %@e25qd{-mX[0T(e.+~IFpR`lMG(^SiTp_rL;8yG~~$N%RHHx' );
define( 'LOGGED_IN_SALT',    'Xed!Y FuCyWrCogoGd~%|,xhj+:d@Y.VRK:j3^EZ42)?`w0+ICe,.n(?Sj 3[wZ^' );
define( 'NONCE_SALT',        'rpvlIz~4|W#wE|ykMc9^Z3m4>:rwV*0?+,q-TroQntu&&A,C6Dp+xo/#;u0}Mr1b' );
define( 'WP_CACHE_KEY_SALT', 'S+{Pre+JB)uw/=>owZ191xgV^C,z2):-83Z@^/N#j~o,;*~TJOfXO_y_-WF%5&p|' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
