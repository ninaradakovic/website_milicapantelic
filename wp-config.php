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
define( 'DB_NAME', 'quantlabs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'h+ H[&/ BthrF,l*XW+RwIv<Xw})_9k!chj/?b&neec;qDr:J=,paXY4xkNd&>dw' );
define( 'SECURE_AUTH_KEY',  'xh^3I q1W5Q6>k6CAT&Z}V5uAX.eQ4= Y*|1]JCjwcq0P@CM+{`}rrh5-`_:CG(L' );
define( 'LOGGED_IN_KEY',    '3[yf=1xQ1D[{j,Hy}xHchH)_ekp)i!t?UoQ$95x$j:i>kx>ulR F<*74C?G=l=>3' );
define( 'NONCE_KEY',        ' |0h*?GANNhH5;soUETNcJ8 r Gy`I*ZSOrj1n /(H]Bnd6Y@?la=elaV,il{OLF' );
define( 'AUTH_SALT',        '~A}OC8/3+[j oqZHh:i[T!eUGhHP$[x^cBmn?Tg5uR[0b^v&1Cp0rB+,=1t#9x=`' );
define( 'SECURE_AUTH_SALT', 'vNYBd]~y*r0GA]T<jvU]@i$aJ7L6[^bO}E5=?E(CLS}O-.x61o}I>fw&^1hNk7mz' );
define( 'LOGGED_IN_SALT',   'tPQ[~IR{P>>qRt3.jMPKr,J4H*c_X0hy~Z.dP9z9ylhb9e5S/Zm8tz$bUHA$&lR]' );
define( 'NONCE_SALT',       'KZd1~0CKM12CaOxG|s,H9O/#6Yvy_!BCWhB3!S&zgHcgY5!+7zUiGpw052z;W{|}' );

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
