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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_literasi' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'pujasera_08' );

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
define( 'AUTH_KEY',         'e|pY]TP$H&oH3f/H[*tUZ$IEOO*mYWherf/Bzz14t5^x82S]6H:q,@KX(#Wv?fCm' );
define( 'SECURE_AUTH_KEY',  '}RFw)9%CnSJn`2qEuj#[Uuo9=Z33+OvjMxG)WX6NS52m<h@R{WW}Pq~{7n` Us)*' );
define( 'LOGGED_IN_KEY',    '2J.dH[j-h}qp/c+hZ]z9q}601}$EX!/%P<~-O,zQBw4_y+`Xgor/&ZIkAL)n]0wE' );
define( 'NONCE_KEY',        'C?^Iau5_rrQNQ  _@|_z6KU>}Hc/3CF5HqL@Z=UJ=F#t[eOf#=j}|KB$?]wjq3Z4' );
define( 'AUTH_SALT',        '$b1bqp.C1<Mf{-m~ZLx0#lIE7Q[2lEVScwyP4{FP=g#GS?GPT}iKT7Bj8OSFzBMu' );
define( 'SECURE_AUTH_SALT', 'lzAA$49)Gb_A-]}ND+McHRIY=0M8VQ0(>0]%WpBBp+Rdo1w`oysZMDtZL:]0i{h ' );
define( 'LOGGED_IN_SALT',   'L3?2k#3HWG9@wFgY8>Gxm4=By2|~2=/Ud)B.r!$=0KStsdX/JbWBa/>E8RP5o;d1' );
define( 'NONCE_SALT',       'tGGd;ffWKWJ:iUTXKdZ^=JwRN%B> tP<Y4mHI)*}[oqkUj]pyQz9>Hz@8~ n=MUP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
