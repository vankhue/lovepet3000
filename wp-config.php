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
define( 'DB_NAME', 'love' );

/** Database username */
define( 'DB_USER', 'khuele' );

/** Database password */
define( 'DB_PASSWORD', 'Vankhue@2501966' );

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
define( 'AUTH_KEY',         '?k@@l+&]Y=dimz)Ml;l/p85^]m7dQMuC*4&[BT)Go~-FWUB?htLGC#()J2K[Qo#U' );
define( 'SECURE_AUTH_KEY',  'NnF>W!`<uiQL4788~5OX)Zeo1qtJ59Tq33{O/#j{1VDg$`^?W{5:?M3vn`N9>%no' );
define( 'LOGGED_IN_KEY',    'XRurvl-ZOzRWPdT2Q90E~IvU.o~YG;= QdCUBmo)zvCq(%^xP|wu=y^veIO&LqpS' );
define( 'NONCE_KEY',        '(H@7Nol_Tm/}<=7QQr:(jzgY?Mi.cCy@i+Fhg8n .C/-?&8[_LQ-$?59k6g|j+s;' );
define( 'AUTH_SALT',        'k[F+LLADD|_ov/R[=SU-)adXSV0L&T*!O5w8yoS5/al+C;%d;mQ?^[&g_;.y:5=e' );
define( 'SECURE_AUTH_SALT', '^BpgE*`8D YWZrOLrd9P%eP, 4N:>(mDma*l`gVh5nnln#meTpU4gTQvd$DP1 wg' );
define( 'LOGGED_IN_SALT',   '_6YT<zl/2-0zi{w{-NI*(&aEiY+1`>Hg3efcRlxRiy*PG8{2Tl_iIBiV%,7gU ua' );
define( 'NONCE_SALT',       '; JX-9LYEvei%y7aoHe)Hms93sUYfwV[4$ZXmaAL0dQ4Ud(dmTO8bFKYyHVdx6(_' );

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
