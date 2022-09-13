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
define( 'DB_NAME', 'caspio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'local.caspio' );

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
define( 'AUTH_KEY',         '@1k)Op0[h_t(IF4AuUL3t3^uPN}EVK~IwJS:bdbMlu<Fa`_V;O#L8g*X(C;,EQkP' );
define( 'SECURE_AUTH_KEY',  'M!,x}gT6:Cu=Gyb2gPd:3=!fMpq<y>FHpKW(!6$UWR4a2nzd9}^Lzqv^T*h9e,+H' );
define( 'LOGGED_IN_KEY',    'v%790!ku?KXPl2paK@!F[t)ErzHyzGP1cLRwUP<yJEw{>4t|M![>X9Wq 3M/ h~S' );
define( 'NONCE_KEY',        'qVT;t Hqjq>#He kXGSdjiKjwGu1%>y,/M$3B.QQ^Of{3hjIlO7;m,6wMU`L}82x' );
define( 'AUTH_SALT',        'rmxD`~b6yD:~e,)I~ndGMwI>px#d_.!w]U5m^^EkE (1p%*/Hd L&F##w6]h(b0W' );
define( 'SECURE_AUTH_SALT', 'P_XrWs]>lK,C,YJl=EiCC|_LQTF1&BUh6%nM~vM}>i60yu2?zAcLG|g%NLc/8EeQ' );
define( 'LOGGED_IN_SALT',   'vfjvPrh @C6:?aj92Vc=(AN=99S0-w@Im7+cq(2JB-iG &4DSt)c|r0[U1@Yc1>j' );
define( 'NONCE_SALT',       'biyoP]SKbo:I=+(_hGmo%[omX)lJRH>~im%v +C;f82O4&o&lr[Le1iLfY8ed5q/' );

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
