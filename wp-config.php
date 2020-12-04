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
define( 'DB_NAME', 'paginajardin' );

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
define( 'AUTH_KEY',         'YFzhP9wN4m6D?YgDpN%%N;<?gNqx[mqQan0HSm[4a?-R=W4|wKiopjv6K^^?=}-M' );
define( 'SECURE_AUTH_KEY',  'mnKc.ws+d<9 f!JkM:S~oLnnXg$^{_m)DV+}W?D#T(:Pa6b!O [v_T&3t,5V[eR_' );
define( 'LOGGED_IN_KEY',    'tFUndxIaBZl5`@C;$bwcP6uFs<jLd8:p=vZ?o_3{m1L4!;LKaZ7.n.L%/(j?Ozou' );
define( 'NONCE_KEY',        '7x`.(z(nDj9c|%B:6fw#bo(~_)2q9!G:{qvq:xgg6Ql;kxvKmQXf<9lwfsGgE+SI' );
define( 'AUTH_SALT',        'qq}+Zqk&:.a(j,[3G^hPY#&<LejV^X$T]+V]e-Ce<a2O]-$r)08 `k8Wx}%riHZ;' );
define( 'SECURE_AUTH_SALT', 'PnAxbNrhg[cD^VFUn_09_i7af)UcokuQI.JGD=+`+-)~L1::(|?Z>~x`EO9nMAEP' );
define( 'LOGGED_IN_SALT',   'VbgTz?PO67{w^3X 0ojT@49G4#hK6B]9tWdb>u;N|D+uF|o,-6j!BjSB1erYg[<R' );
define( 'NONCE_SALT',       ',3oPAFr/czob9 N(ZICOM@$gKfWepI)@1IEf>T,8_>B%x|O;RB&+Ypci%nRXC)QW' );

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
