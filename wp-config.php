<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'frontyard-grill' );

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
define( 'AUTH_KEY',         '?),f?}E_JP:S{c96_4w]*|4A-:vqKdAqgj~Z-H<-U6=v#4x-EC{1%nV{J@iF6H}M' );
define( 'SECURE_AUTH_KEY',  'Y%!Tn_^$;:zM)Ac[>*$UMFgy1.`kVP>cG7u(2%HJ3fH:SI&`/Y8b6* kq>1btyO*' );
define( 'LOGGED_IN_KEY',    '`PoB]N@R|4~ E+C|vqNcgslx9SB`fDx cqNZ76fx}Gj.z7MqbAVIY?FBfW!N0Oxn' );
define( 'NONCE_KEY',        'S9ATE^jjyJ4Uge)kKiMm4 ,eh|U~+Lj!-Q/{v/u6O?=gK*3cuM:U3n[!0Dh%G-!w' );
define( 'AUTH_SALT',        '%b-!rU)(XTru0ea$P9;xF)t8 6*rZRMC,S_zx)l|Z>Z$ID7p)AXW*.lH$o0vzF`X' );
define( 'SECURE_AUTH_SALT', 'j1x{7jcTU2OZGIPH&u8)Quw/V^A4 fG}mw%:|f~*ZXn0kF[~vr_&y@+T79 C1<n9' );
define( 'LOGGED_IN_SALT',   'S=w2-tO[Ny9qfgz_`XVN>an ,:{saJo/u~>%W#@4[3;4W5ytv*%%?Z1J`0Hdj+y0' );
define( 'NONCE_SALT',       'cmft%od08LHj@t65W*K8Tt!>g;> ,s-uZD0+4B574&8*P6AVv4)N:+yG@nEtZoOq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
