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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_learning' );

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
define( 'AUTH_KEY',         'Q0U[HKh+gezg{#9GEcae(AE!_CxM5zLt];]y`GsBm>, ;}_jtp`6R= 6r7,,;8;6' );
define( 'SECURE_AUTH_KEY',  'D});J~,C~(=Oa}l<vxhl=x]EpA0)E8,(}y^4@^J2xNAD^L$v@_{(qA|q4;B}^@RU' );
define( 'LOGGED_IN_KEY',    'B^kl2*CKs~|>`k+:M]ePMkif:D$^^LMoi[`{ 0{R,Mx{B;,F<}3[EQgLK;E-3[8g' );
define( 'NONCE_KEY',        'Tw,#HSc1O[ga|T@l~aLL`h&_$lcx31 1CeMgqQnB$XGTL>/s2!od9.3:9ECm9KyB' );
define( 'AUTH_SALT',        'f2h: *P4dZhL(-=k+VWqG!3HeCEA|f!>:d(b4}3&6TGl1jh%<-GkxHg73vP/MsZ<' );
define( 'SECURE_AUTH_SALT', 'nL/CL_3s&L]zwuUTe-SH*-eH>@%<X=>}h|+E}UB`6gjDHRGODJuyet}>@Rz>NSP.' );
define( 'LOGGED_IN_SALT',   '=8>/{Up$=w7MKGAe;3V23d=FkI $VxzU;0U2=;{3XXib1zc.hV6s%uyPK3O@[[+;' );
define( 'NONCE_SALT',       'f>,cy90, G+a;fTWdz5(=9]q6K? VG~_5?t?`X<WPH~ojX+[d`_N7BJ/|og:s(oQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrs_';

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
