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
define( 'DB_NAME', 'strigoi' );

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
define( 'AUTH_KEY',         ';?+~nRd&V$xzyByCu&~_Da5#GoOoE>g(Q@_Uya?J(O.1bO/YjG2z&F$MlE|U{[ry' );
define( 'SECURE_AUTH_KEY',  'l.f<Q9;*38JR%G^nmchfy a1lTXSub_L?MGVMu7w%dvh?*`qmx5 dk+1/@i2&F{6' );
define( 'LOGGED_IN_KEY',    '}VJkx-7mZ>6T%k~-?O}pvY7r0).Om5s3~x;l*`*T]n]/wm|d~PCqu$Fe9thg[XX1' );
define( 'NONCE_KEY',        'l!kg~+S(<2WJ>rN|YRBxG7Ss85~p8!JJbnM&?>OZ]_#i~!h#t:.5*4v97H,~}yO)' );
define( 'AUTH_SALT',        'godu=ipD1=X8GooYA4I*J`3#|u395oOHA3`&-,HMC<%o8U;;*hjVr|2n(bRN?v j' );
define( 'SECURE_AUTH_SALT', 't+eNol`1PRf&18+-2>w~A)B+ej~)uA$!%@C[Wi}1F8W@<l||KgEQrU7;RTO.,yOL' );
define( 'LOGGED_IN_SALT',   'y5r4NG<Mf!d32DD1`Em!Xh_=yXc3iy!)^ht1GR#cmD2_|hhGMO&sl@mO~#hem#Co' );
define( 'NONCE_SALT',       '0}rb7Y0%)G:|eJ>`RElhn;K*&KL*qO]kdFT_p(S.*Lt4+j+y40vEzs`B6}A2K o8' );

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
