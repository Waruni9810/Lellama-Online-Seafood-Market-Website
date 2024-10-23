<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'lellama' );
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
define( 'AUTH_KEY',         ']SPsC@&S(j0lpQ6/>z]Sun8xHR3+)]zolaN71@XBt]&U,D5$q(zu6*|?8Ru&@=C6' );
define( 'SECURE_AUTH_KEY',  'sFaz=17@uPpWuy,w`6t@?~#B8%x+},0i,QDA;2-czm--Te8;+Wd)%N~!Xc Jw;Dn' );
define( 'LOGGED_IN_KEY',    '.xrb6C86_wgjSAjpdk(>B3HQK-RfDEQ~F xxK~qg}b&XF#gw}A/OCx[Fhd*]p{#E' );
define( 'NONCE_KEY',        'yCz>sNA61+V)SLy(U%xnkcb_4y:EF0?t]/?WWLKsgjX|W{&v8 4wpMn5t/i%Tc*8' );
define( 'AUTH_SALT',        ')iHeH8ZgrJoa7o7g+x*m&bZ<<pP<s+2$.up[OnxGZ-6-Z cmB0OYzyGNd7.yw3Yq' );
define( 'SECURE_AUTH_SALT', 'sRNXr$nfNqXitu[|_!Z}&lE] d~i]Uf%[&cV3)bmZ9;+~]&;udCiDmc_qEyOMI/,' );
define( 'LOGGED_IN_SALT',   '|RmFSqv~FLh;kVW%-PXVW |6a!{z^r[)-L>zSU1CepQ#{vdw#{Y75?u=T<Qz5HVy' );
define( 'NONCE_SALT',       'F[H2*;jg+#cDA7}8kk[,)7kcR=a=d0;; 0.{sAv/mrJy&GCyTZJ{0MuJz),3:87r' );
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