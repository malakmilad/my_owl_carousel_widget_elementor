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
define( 'DB_NAME', 'elementor_pro' );

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
define( 'AUTH_KEY',         ' ?O.5$dbhM0oH8,(fN~R&/#OIr79N hw]teVb.Oq#]Q:#l})vTA=P=:=6igyY,wc' );
define( 'SECURE_AUTH_KEY',  'XKC=2}0jV<BrF{*MQHM^qN1)s>WM(_4YkXDX7d6_uj;I-%@sdsO$LN>8 #A*(%U@' );
define( 'LOGGED_IN_KEY',    'XmH#YkJO0,gyl6~w$ENzcJ2K(V?1j521L$lj#}2Qe>6!,Ll&#qDWx}cvQF9oDXDE' );
define( 'NONCE_KEY',        '|%yJ1A|R2so8yV6p|*qy]:o,>YKFt~Wlk.DC9KPjN5?Qbp.uz^7#|U(kIj#O/HZ}' );
define( 'AUTH_SALT',        'Q?fc0uWS3d?PVbHzQbHV&Kd89pW4|_ w&1+)?aF<^8Y:[jmlJne52A6;4,xMKlLT' );
define( 'SECURE_AUTH_SALT', '}bS6BanYqNT KR(]jR8`L7ESF?}>lb1 ia/_iz6nQSX{.#]#%4F1OD_g^b{6qU` ' );
define( 'LOGGED_IN_SALT',   '9 PEcQA5JndPs=2A+W2tjnCf)X~KAhGArf:=b4s>[yT$%G5yVQ~qZ!6.,kQR{yCL' );
define( 'NONCE_SALT',       '#j_dvuIL_*ZF2Vo5m[NOQ>bQ6BM+{//Un[fT(Qtrcgm@Z$.?|O? )|z0iQKhS2/h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('ALLOW_UNFILTERED_UPLOADS', true);
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
