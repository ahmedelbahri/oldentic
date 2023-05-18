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
define( 'DB_NAME', 'oldentic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

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
define( 'AUTH_KEY',         'MUZz{ZLfd;,{n)BIjjl~,=fbhV7mtB2>gf$Vjuf`?{Z;^v=wk4?B]:)[e,LugRw6' );
define( 'SECURE_AUTH_KEY',  'b!tJmUo%/<XiLHBlECK=5{w~ReF;BRS{K0(S[VBz&W@]am$CJf=_y[jp)V48L8xp' );
define( 'LOGGED_IN_KEY',    'I=DwJd>,/n$KvMCNS}z!q#Eu4f+)inho;@-P}GME@K(sFMR(!(DF6fZ$C{E8OHrB' );
define( 'NONCE_KEY',        '}KFKWY?>efNTt(VzJsEcdVm.qHH:aE ;_!OMP2W$,C2>q*GwSfJej4=W*];.[WKO' );
define( 'AUTH_SALT',        '3vqi9P+-cP#a#=&8_YL3$!c;^UL-Z*G+GQA^!G*P~{l.=O)7D|3khzrP?Tgz+SeX' );
define( 'SECURE_AUTH_SALT', 'CApjVZ[}Y;PTVM7zb:^Xd?HEb3La&K-qPnf#6`-9gT!>[U$QTU+#G-9qzs*}@9WV' );
define( 'LOGGED_IN_SALT',   '`<* nqc*#LKjMn>s*U?3kv~>q%M=:M_D& *iHsVRh%jS#HBOe0sT@INvL3]D2i:]' );
define( 'NONCE_SALT',       ')YnsLfaDoF8 JF9 -Gw~!__M(1.LLiCk~LY;rVhnv~d5YTdCQiYWN@S-L!fFcASH' );

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
