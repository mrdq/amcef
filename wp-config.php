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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wnn9yc15hbg1' );

/** Database username */
define( 'DB_USER', 'wnn9yc15hbg1' );

/** Database password */
define( 'DB_PASSWORD', '4e1pc66gj0xh' );

/** Database hostname */
define( 'DB_HOST', 'mariadb103.r1.websupport.sk:3313' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Z]X28v8}>GeX?9w6A/f:r$f;1g9sFY^fI=:P}.rIm`C}zh.mOPn9VTrA{!^E&/mB' );
define( 'SECURE_AUTH_KEY',   '8cAip]sg+[qe Gd,-!BnTU=]u-x!p{/}i%9vaI-&s8eAF[xtO8~XYO^IiM`hP[0R' );
define( 'LOGGED_IN_KEY',     'sJRzXm?.TiEUBJh,/g]iR34aco9=qi~.G!T@G3Db s4=aOt{98i|&Fsyp:X4FI#f' );
define( 'NONCE_KEY',         'Qghgh6|0Pi>< U5@q%dHk@?!/#GWEK|464.M^Kg&.kGF|nYWAuuJdz_{= y]OMQ-' );
define( 'AUTH_SALT',         'R4:F);<Y(K~xEDXrs%M CY,>nKuhru[7-GU){h;YZar=ITDL!x+k~k1#{q)-h@.$' );
define( 'SECURE_AUTH_SALT',  'qyWy%eI!^137s5H5:oVAd:oBrytAx,G=YNR,hvEg8x#ARaYFW@g(ni:8_V#7K9}S' );
define( 'LOGGED_IN_SALT',    '&QrQIqu0go%&TRfmx+#8>>2Ci_FI_@uEpj`Q!nuzNf>*x+E;wrm,ppfP%^iT?93p' );
define( 'NONCE_SALT',        '1T$]aFj/OH;Kvtgj94~,:8l}<^2::FLYxeivac8n@eDhN%E<3(q_.ho8oJDP)cVm' );
define( 'WP_CACHE_KEY_SALT', 'x QrJ_5%cNJV>Y/;vDpk*4hkU)v_F_6T;6X^WIB?bAXTQ`#Od^m>g=W.*kYYMS$n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kbelvf_';

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

define('WP_SITEURL','https://' . (isset($_SERVER['HTTP_X_WP_TEMPORARY']) ? $_SERVER['HTTP_X_WP_TEMPORARY'] : 'luenra.amcef.sk'));
define('WP_HOME','https://' . (isset($_SERVER['HTTP_X_WP_TEMPORARY']) ? $_SERVER['HTTP_X_WP_TEMPORARY'] : 'luenra.amcef.sk'));
define('WP_MEMORY_LIMIT', '256M');
define('WPLANG', 'sk_SK');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
