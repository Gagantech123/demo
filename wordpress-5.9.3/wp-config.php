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
define( 'DB_NAME', 'asva' );

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
define( 'AUTH_KEY',         'Dn0lAb&Vy]o/+<$38ym_7eQu&#3}QsV9m5VqrNGP=%2X.{SaIBg&)W^F=: hCZw]' );
define( 'SECURE_AUTH_KEY',  'PC[MCftra@WNnpTJE/[]z1U:PnTj:M71*o^sU~0gW~5xHsK2.y/Kh1[:hZ.[=hwD' );
define( 'LOGGED_IN_KEY',    'X:9.O0GpNGe?Yi|Ttp:ptWHJ^sc&OXcBf/lH@qpmPb(zV@e[z[NVP%LQJ%N0rRNT' );
define( 'NONCE_KEY',        'O$36Jk`)-p8~3)E&9;s15`174hMiAv:<{a(hxf_}))a/{$sdK^(f{Z5&2aXq8$BO' );
define( 'AUTH_SALT',        '(p:@{Ti-*W}GyKKh>U.9+jo:1XV:1CHtF0EP6k>>h!F|!<t}J%(Y;ib:)?F(Qvy*' );
define( 'SECURE_AUTH_SALT', ')kE3-RHU$#F41^w!kYpa=F_Fe!p&rjcL7-ZY3lf?6:1mZck?4C9gUh3Ec&-?;zmD' );
define( 'LOGGED_IN_SALT',   '~C::->^=lWf1o;Ivo>/D-{@yfbk YOSEQ-C&C1YJ)Cw>s7z6/$eB3U-kZfO;;t,d' );
define( 'NONCE_SALT',       '.u~5n9k:sSIKZX10N=Lj=P2VLs?KN@@keVV.0O%@AJh8hcqE>%MqXC[oOWnf`B{/' );

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
