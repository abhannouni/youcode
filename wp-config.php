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
define( 'DB_NAME', 'youcode' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'wn!bfI:M,}dgd([Q7=z4SY<1r#j*0XqiK/0{a*P{rZMhAg51[_{|i^J^0baJ]$;$' );
define( 'SECURE_AUTH_KEY',  'gz9{O9|LY5*3m2/IWxYLg,DaT5@}0NpBa(@L_&z^x_pqjcXOli i_ K1]tkjXV-*' );
define( 'LOGGED_IN_KEY',    'c)e7]7i1v3CkhGr4`;[>!Zk@_%P6>Dy!M3qxmk;:E!=&=4y#3KJ*%4G<a]3VP!Oj' );
define( 'NONCE_KEY',        '~NU*euJo(<fVSNTcmr,mV+*lU%(YMhGEGQ@ #&U,u*M^(i=o0Yw$|Di?ZP.zV_hB' );
define( 'AUTH_SALT',        '3Gm-Rm4q`5D)Ne8CTchTDUR[P`Fc3A1(6E(y7AOf%!tz$,0iAp5g)O+|N=2&LfCi' );
define( 'SECURE_AUTH_SALT', 'OeS(UE@Brd)+`Br9 ^+>X|3/@aYTyxh|?cs#2$eC.^`tJE<N=iGVlY_l73--ujo:' );
define( 'LOGGED_IN_SALT',   '+TE7dA%q(h]3sR:;xZd?n3.*007^dwt`Oi*fu;//cTJhL<4>Hv`KrYVsJa>tmb(_' );
define( 'NONCE_SALT',       '}HW+]^[3!#$fdknZ]WNUT=.hj=fiVo0{)c@vp<+PS,8UB(%RF,HBYXK &^+ENVzC' );

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
