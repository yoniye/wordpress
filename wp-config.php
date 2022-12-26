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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '[A QFLtfh4o%(F;h0%g)1_0/J!]~4y7biJGF7!}lsyp}CJa(wg09x*N}!tm:Ygh0' );
define( 'SECURE_AUTH_KEY',  'b{nfv6[XB|=kP(GBoC(/~+96{JW$.Rx{hPG:eUH_9k+UY8W`63mRzx^cV6[N^(Xy' );
define( 'LOGGED_IN_KEY',    ']G}ZkiWV6G _}KzT}?ul*qv(JeLMV.s(]FZ5pc340{,F{X.K=UI+@I+ft**4C-j9' );
define( 'NONCE_KEY',        'dg:e1fT>UwU&$+(!?3};*<h$5,:-m%NkNGCOt :U%X%XG032ja-$Q*c,oz0<Q5?a' );
define( 'AUTH_SALT',        'OM*3-as;DM$7ID5[;jk`V{imZVN,o&<I0yA0d!;}bq0qy==0OPyHN-$,oH@}~G|S' );
define( 'SECURE_AUTH_SALT', 'l1z]FiBtPy5;HF$S?AhORrGxl+F=IZ9lGRvcz]6L*>Jkh)1yf[$th(:qDA0|7}vm' );
define( 'LOGGED_IN_SALT',   'E!W;q K;B4)0z1XMzL2P8fE2Q</okp)4|oXgsxc#tohXK/.$`a#{0-N1:> :X&o5' );
define( 'NONCE_SALT',       'O0,p[5k[h1UMeGk7E$v5kyA+w8=1_Z=9d.;kfnm VMN|piT@K}g)FIoS%AlGN8/g' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
