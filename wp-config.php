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
define( 'DB_NAME', 'achilles_gym' );

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
define( 'AUTH_KEY',         '/<jz;G6fSsr$k#M[Lp }=oNW#zAL)E|u6_HFOpzU5|S/XKWR6K8eyJJ&WRDElX_%' );
define( 'SECURE_AUTH_KEY',  '^?9Vp+lt7h#US9r9?C<W4X.6 Aq1EWQs<f[R28H5EB.l<Ff)}M#15,({8oXXeclP' );
define( 'LOGGED_IN_KEY',    'j!+hf%)6OnCbJ>nSF ae:{haamRIPvZ)`OR22Fu>NED:8.w_1[ed;uike]:bkp8m' );
define( 'NONCE_KEY',        'pJ!bs9t?G9;wvW#tjd^Fcf{{ovr$*eX-TjEJA2f0jxB!mUWC2xd_e(aSu8a{/r%5' );
define( 'AUTH_SALT',        '}PLe=<}bI|JEW;I0G[tB|,5m$gRA,-^~_iHf+hwq>n*rynXRCfem+wDv]+:Qx##.' );
define( 'SECURE_AUTH_SALT', '.tA%@$VF-h`Zq@Ak+]*t1dMYk?a)K=NhCokNhY@N#euJYTaM8w5se0$.YTO55rdv' );
define( 'LOGGED_IN_SALT',   'K~R3K&yLqCq<LRXa1eNXr4I`w&-wG8Lw*;3CHq/N*Hd]V!~t2~]uXf!F)P@kS-qx' );
define( 'NONCE_SALT',       'L]I(68IDqXH+@_f}]U%Y^&f7qv0eoZ ;Oq}SwRHEU@s(2XpN?b.q~StVM0?Sh4c8' );

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
