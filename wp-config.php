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
define( 'DB_NAME', 'POS' );

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
define( 'AUTH_KEY',         'gH>UB4^cG)NU/7:s<3X%RvDH2y58<k_n-vvA,mioV.4#BRFLK5Jney-H[^L{(x+4' );
define( 'SECURE_AUTH_KEY',  '?%~&$84%EN@z!g=f`tPrQ<u>;$wF=gdBi*qe5F`k1oJGGt4S+^WJ+#9<Q151lm_X' );
define( 'LOGGED_IN_KEY',    'e&-!:C]5eAl @PHdkU)J7nNPIa}V0xj- l%IfPc,Vq`5$vi^Y$ibO&y^Uy9EJ4iL' );
define( 'NONCE_KEY',        '%I?QOdo)9HI?woL~K8OzzaGlOa#=rE=4R+/:OSuxGz%V Pb{ r,uX}f05@nBAj1b' );
define( 'AUTH_SALT',        'f2C74(>|aGEAze51NyTNeJ,0*wd8x`/X]Z2vGg)(Jn1[1OJ9[Z8Jgx)<YlbH,<~;' );
define( 'SECURE_AUTH_SALT', '@?5IA&NPRe/eNhdJHmr*R<9CUH~DP|5b^R$dB`{ff`T|J;wu~(C6lx2zKNa> Wri' );
define( 'LOGGED_IN_SALT',   '}f~_*cC5{<|l7doyl5V9eZux|+4taVmx[zG2*6ZSqR0S*-;@D,?Y*!tr^-)_)7Y!' );
define( 'NONCE_SALT',       'i%}I)d%VXEMkV=vnRa_Qrlv0N=O J8RDZJtLWZCL2jVXC:y$DIY0!FDJ~&MembL9' );

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
