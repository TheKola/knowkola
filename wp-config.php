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
define( 'DB_NAME', 'kola_new' );

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
define( 'AUTH_KEY',         '[LoZW}gVw`z7XQ.6w:p]o%VMlfVf._K/UXwm}B8Q:3E5myNfUw_kCPq*bdwB ~lO' );
define( 'SECURE_AUTH_KEY',  'g}c8X5y =CBMA)0Ed|9pK!f7a=y^RR-8pe24<(a`rZZ|Ti:W]da,}mVV[.ThmW;)' );
define( 'LOGGED_IN_KEY',    'tNtf+?9mcn:Y4F%2p$KPS%s?sj7KPD9Ya(w9w)Mw{ZyG#_]50p%~T/g^s5UmmOHZ' );
define( 'NONCE_KEY',        'qEcbvr*lod!auhpAHx(!XP,ym+Y}%d}-kvC2.A32o PIHX5>z+`22ExAOCX%,yFE' );
define( 'AUTH_SALT',        'iL*C#dn6-$+[3hiIu=p6V0_.}?TPppZQ!2V9RbG&+EcG-#|rrqm2njj~WiXATy2$' );
define( 'SECURE_AUTH_SALT', 'A.eU]SeS:oMi5ETW3cMX611&VyfR|@qTb!JcfsoGWnHhq#m?^){jzmm<&G:_p3<M' );
define( 'LOGGED_IN_SALT',   '8jo0(h;Q<sMtUeEc14[rR&D,YQfq4kZ-N`c3[u` 0q*zG8UHBMSjJ(kgC5$!>ACc' );
define( 'NONCE_SALT',       '2.79Ir-}EPI&O*)5+$@0jfPs*H&|^].E@|f@vrT@_p.sZ,=/C[mVCBXf;DI_T48*' );

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
