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
define( 'DB_NAME', 'assessment7' );

/** Database username */
define( 'DB_USER', 'admin10' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '6kw5#B)v*?QtDv[w:..lD`4iedL<atM{}o F??#fKGV^LVp-!WO]Lt/JX*bUe^gv' );
define( 'SECURE_AUTH_KEY',  'pf8~{^Pm/#JZX5c2IG,|mWPN8pYxY%#$IFcJD$`tNB:8s0Ow_AeRgbKtRgCt_Fxn' );
define( 'LOGGED_IN_KEY',    ' 5ETO}#:rUFU~T 99ynG>CnWoR8s^0W|4m,P`|O&NGUVCSi=!%2+fp<0kn0PJ,ur' );
define( 'NONCE_KEY',        '[v:oWP;V.|PTk@CBr!#3hyH;XG|yXBS$7z(BcG=h->m<D !oh,7ePmc?4)k$o:&%' );
define( 'AUTH_SALT',        ')/8 VNEx&eS+?`vN .e}}qI_u3y3rWV45YainN$/J{!5lUkK@],zj++<XiGUvNml' );
define( 'SECURE_AUTH_SALT', '#%(8{tIF%q1*;RRglSod7jk>6N)/>g=z/8J]S^K@)UO3&{~r+_YMNqep}RYwa[aF' );
define( 'LOGGED_IN_SALT',   'VY;.vWpD$Bw.ju,fZTwC2]9HI64eET%b:t-i=mNnH!,+0FD!/s]SH[06]{|hCz&l' );
define( 'NONCE_SALT',       'Vs1HA,$J_G5h?[F ]>u3n^},;TshHMtt@OnBkEtv%GZG+y[@OrY@uKPD~MH8TS9A' );

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
