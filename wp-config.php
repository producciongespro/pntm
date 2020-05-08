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
define( 'DB_NAME', 'recursos_pntm' );

/** MySQL database username */
define( 'DB_USER', 'recursos_gespro' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hola123Gespro' );

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
define( 'AUTH_KEY',         '^kf0D0y,dLO7RM~s|Ox9MieG0RzCQvOHs9G+`K(`nGnXWcG}y(~@p6mOU|ooBmtW' );
define( 'SECURE_AUTH_KEY',  'mu{:V7+~|IEf]2,=`~Spicm[vv [<WCyw5]~[[)<vu})>|j*.b0}_tu/8l!u3*fG' );
define( 'LOGGED_IN_KEY',    'RF>y0?F}#P,FK%>0:&o@A9uVLr,VKO9x!uy.rA0-LcS*ck;.]L-xM+H#D)A[4#uj' );
define( 'NONCE_KEY',        'p<~5^RF0$P#y*{6qy[l[QJ[01/JI-AZP;!]>P%P(S+~_Tb~v@36AkG#nbQC4P?7!' );
define( 'AUTH_SALT',        'kKe$E$McexCW[Hh9^tyBi5aHZdRu)AN@r#2e;CQzH$<~cl25kYV)jH:V!J^?PmaI' );
define( 'SECURE_AUTH_SALT', ' 6EN;1O=%c((!8|}n{:u.4i8krcwLcI1f3ko_*Y|7md=quEX{ `_6H~I?jh@]0lH' );
define( 'LOGGED_IN_SALT',   'x{t3hN|^vD_gq=Rv: tOo|I`w6 HS4.(r7iT<ufAM9@#fHhcyF{(I%nYk0@$0VrO' );
define( 'NONCE_SALT',       'kV_#w6B:Sb >.c;`Jj1VKW&#Gl{1}xz(~47LJ,L.2QxE(!+TYJ#smvvh6!MIu;_)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pntm_';

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
