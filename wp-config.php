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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W;|6K9l||5f|GN0p~.n2}iSu2pZ[D1$Lgl>%IVsjLjnID7ADnsh/de4vBz*`g(qI' );
define( 'SECURE_AUTH_KEY',  'h(yE^!P:8A&)rYM3`%X(:FH WZ S}lvIRGnbA}_{-.~o/$hesJ_qv9%Jol@88f@b' );
define( 'LOGGED_IN_KEY',    'U<KU9vPz/#6h/!P`V{9C^7L?H,TPcwl=z0FPtuEDk)$Mb7~T:bP2Wa!$/6s^<e-)' );
define( 'NONCE_KEY',        '|bGN-O^KMCVn;N2!WBXo`lTEN+(ky[}6WhMTmUr*gXH2I3bwZ~>:w`xGoK 6IqAZ' );
define( 'AUTH_SALT',        '$]T3k}dk12;`C0QvX>sd^1h/LcCVk:px1}}Vx*-1cg/gpF&{XK9a;qBWRbwZ!{W+' );
define( 'SECURE_AUTH_SALT', 'M#nl&kL~gRT,AP+DirMO>$)Yw{ri,Wfdu^KHc|t96<;0sO/%iW*,SW7jP5wJ}BYw' );
define( 'LOGGED_IN_SALT',   '_!58+;T|I(zbxaan1$!Z-Xy-k.#^E&A_AAu;u6B$hI,x?ugmxvW5XsaQj[gT~0=e' );
define( 'NONCE_SALT',       '^!xYbRtT$Fnu|b6cqsy6vt]bgpi654.,ea{m:T?hk2,/KWPg6}QVUThQVO>[f.>P' );

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
