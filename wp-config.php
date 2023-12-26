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
define( 'DB_NAME', 'wocommer' );

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
define( 'AUTH_KEY',         '|x_]z HR]N@12y=#c/h503,*:=+~Ie#{)Jc3#b+E{R`!j(R0G]T|~,QK^N8^4Wrb' );
define( 'SECURE_AUTH_KEY',  '.nqAw5CCmOcPRaN}4t0KjCCru=a4ELP#]E|C</[-, J9=%}t*37Q*[Y%0X(1TSPk' );
define( 'LOGGED_IN_KEY',    ':O@%Gc>v?fd,g!zy0+@_=+3M[Ecb>u~Kg@6cN[lV 485dSRE)zxKzu9Yk#|./3OI' );
define( 'NONCE_KEY',        ']-&e+9o:(!UVF2@(anZ!?0,-D>};iqa8>U,kgyL=q5+;bk$#8b|MPyOkPhzn/RoG' );
define( 'AUTH_SALT',        'R^>#w,Ah20j](<9i6stcqUi{g?m+1E]~^-S9obi]Rf}&akC%Hru,=oy7*0p=QFM|' );
define( 'SECURE_AUTH_SALT', '|7cTy,V^1?Wm+dx+t!#Bm-piZS(IPs(X`Er,gf&4gu8o})Be?cJ%M>tCI}A(LNkL' );
define( 'LOGGED_IN_SALT',   'x8C.;wsg82jYWmYC&>It(r^nBiL6EZ5k]ZDuWS+F<l+fofg6vi $LvsFPm>)w%a)' );
define( 'NONCE_SALT',       'z<6+M9oaT~?GXIKp?Yh9NiR1og1~Fw>,M`u,_1U]Sx_`U^^NqZWd@UYX2%suD8b4' );

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
