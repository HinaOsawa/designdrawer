<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designdrawer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4My8M,-J}CiF kEljqR]01a[HRkC RPy$;55{g,Y9<@15OoU(UEA(3/@n6Z9)&K>' );
define( 'SECURE_AUTH_KEY',  '2Vp[FRI>([v^sP1>=1<8=|=l(A}b=[Fb|<2d_[>mxtprMSw#50|ystsmoSw&x0h-' );
define( 'LOGGED_IN_KEY',    'ir8^a9~=`@|oAY+fEU*og1w2M]2s5Ku4]PVNga*Hf7__Hm./[W:wW)=QEjs]z7w<' );
define( 'NONCE_KEY',        ':$c/6.29fya)f_b:F4kB`P:%Iu22t]XuY7]^H;eL&AGl8/+k_Q9H:-wcPn1a_(4(' );
define( 'AUTH_SALT',        '~XN~R[sJDFn-FTb]g!)>ZY.@)w:s(QM5M9urn6ycU1UN[D^n))@v*sA+;_^yf<CX' );
define( 'SECURE_AUTH_SALT', 'zL[psoQO;euIk^$L=mg l60xA%B{j852N63(@jvODPjDH5WewWmWBvUOW=92>3~b' );
define( 'LOGGED_IN_SALT',   '{(,$an`WLU.a/rvI[L#X`6(:]0N5ErI&W:kdzr13n|x][KS{(&4qi+v1/?B~h$;3' );
define( 'NONCE_SALT',       '-*QEo%TUf*QsWF,(wVBbNu@JIO%Di%3~z$)~F*J-f5RiL`lLo7.]%:1U]Hx6.mQK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'AUTOMATIC_UPDATER_DISABLED', true );