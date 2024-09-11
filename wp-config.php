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
define( 'DB_NAME', 'colegiobd' );

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
define( 'AUTH_KEY',         '49$dF`tW)<BySat]/Rmc4>3#f)n(UZllK]{[VCxf2e%Nw4*(+Sz6FR>IBxHD7;Ic' );
define( 'SECURE_AUTH_KEY',  'N<mvB}}T`HFT<Pd^=CBKY;jaY^&QD?wiQXn^~h8rjM{wN&u(X/TN#nc9k(|52V#?' );
define( 'LOGGED_IN_KEY',    '*kv86=3xv@Qe:^kLYg+sjT3IrU]&aO8^:i!=9EaKip;Nmc|$-QBSRyR<GeH%L[?h' );
define( 'NONCE_KEY',        '0qPrd}Rgd5L{}gQ(-W?2%O|J(t/MkOS6cvTF[n#d_5#d z0!X*{/pYLVD^*)R![x' );
define( 'AUTH_SALT',        '|srvEPO6rJ^r&7,2_c51e+>GHWXG/ci]7y;^~HUYTo(|-i0bTYwY]BH:o*$`EyOH' );
define( 'SECURE_AUTH_SALT', '~bet.nW tGe=Bu:O|k_Q&N)pd8hc#/93|5O{HJw8j<lZ*x~I%|+Cn(Q8rUm~bw>5' );
define( 'LOGGED_IN_SALT',   '|Sa$[aLQ^X!QYi[cDJ162+}fC!G#lM:#+zc(Utv(#6Unv<?yiQnFJHhU|t~&HLB*' );
define( 'NONCE_SALT',       'bZu?*Z<B6^coE*(KeOpO]`I5M&l+</E^`jdOAxH1`x|sJ?JkVtq_RIgE6f&Y7d=!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cola_';

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
