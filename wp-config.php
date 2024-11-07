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
define( 'DB_NAME', 'tedxsangiovanniinpersiceto' );

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
define( 'AUTH_KEY',         '2T`iz;Qujc c$Ve9Lq.3tbypa>fV&L-yr3QU=fohMgEcit}FFSq$I^4nVT(u:9)(' );
define( 'SECURE_AUTH_KEY',  'wU]Bcr@~*od^>,)^JK0on3zbH!ZNP*Ri^!i5SQyXqqt(7D{&;v:o<?b^3JSa}*&R' );
define( 'LOGGED_IN_KEY',    '?*qWvi=7tZr2~=Pt8mJbd!AR27~{Wfd4E3~+m#%|m8Vl3oU<Ho5T!E}se&y@i U?' );
define( 'NONCE_KEY',        'OIT~&IG[eHB<cU|q4s[O$LmwIB{RMm!06*otly3{b#;#w=;X/E`!.VF2:B(!dv1i' );
define( 'AUTH_SALT',        'Qr7_Ydo;$DC,rhrUfowi0WBNsyLt}o OV22-io;{6]2zzI k=A*J^1/XVOa.yz7k' );
define( 'SECURE_AUTH_SALT', '2NC1nN( (%BbYFa;,7Z8NaXcG8!V%6^Ed5{f*)wezT{TK;rX/?WItaMb3RGDO-$<' );
define( 'LOGGED_IN_SALT',   'ojSN+^>9dg<i2?4#U%k-t)`>jp~^LR]Gv)dIYg)[;`5;JEer-)#YWQ*!b>)!a0$^' );
define( 'NONCE_SALT',       '$zu!Q]E{}p~e6081+e6(aBQk@EX%jvx2}YBP*Zy%C!H}$}:RyJP(9_QXX8-pUqvn' );

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
