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
define( 'DB_NAME', 'news' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>(bCSf+2bXE&D_c4&/T`[wP/Ee]k!#^]1T#Z2DHy}l%pK^)4.Uh#7!^ `!-J9!wV' );
define( 'SECURE_AUTH_KEY',  'VSPE%[J=s~xO97*zX#JF%pcg}Qfk<yHu,Y^A;0!3xu}A2,{9 q*Lic G0W*&*y$ ' );
define( 'LOGGED_IN_KEY',    'q/P<{gyIHbGE_I!|ZP([=z}h1ls}HKVvA47{TvoqHf/]te,h&*/8HR^eTs|pV~fQ' );
define( 'NONCE_KEY',        'kAMOH{U/b[6;I6$`K]#~i2hf~9RZ0,#,.]QQ6y,LG[,S8M35S~(hh.Kg?!!b]1E7' );
define( 'AUTH_SALT',        ',!nY6[k10r=$2qE`8V|R;KXVn:7)Xzj!n)[KXyG#bQW3Ti&{W_/UphC]qS2k34NF' );
define( 'SECURE_AUTH_SALT', 'AX>Z!W&vESB1,F`Z]bDyswlnMo]VF3,St2EU&rFDhJP#3,L2}*-+U@tR9J#iHw:r' );
define( 'LOGGED_IN_SALT',   'o4rJ2$gGqN2[M IR#-C[/_}nBjHjx0>X1-2 cO#{|@RkB%xk SeK)Ju$-<HI?[h1' );
define( 'NONCE_SALT',       'eCUY NIAYSJpQ`0R7TvI.#UawJc~o2Ai#gAa0ogb+F1d=~d$Pu^75bk?~K$$h#.c' );

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
