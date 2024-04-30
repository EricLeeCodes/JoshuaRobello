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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4O5v]>LN],i*,nVClKp=#AIfPr!&XpX]d2%S;|*$8NO^%~iaBF]2g.Z_WR7uPzc5' );
define( 'SECURE_AUTH_KEY',   'U9HOEF4`ZefF(JqtEU~dRoP?qEeq*BJl8ke4|7UUIA;umFU7]WM(81qFfK~%WQ_2' );
define( 'LOGGED_IN_KEY',     'r-*Q/}(WtgI_m/8%rFh[r^]*r^l9~q<JEUgY9`_+_hV1^~DW>s?jX<TvORAk6k%0' );
define( 'NONCE_KEY',         'ar:w/N1!6eU7 +N49%RC:5|*WJpd Xw5r{?Es-odhY*C{]SB^ctaF_u9>TPj39sc' );
define( 'AUTH_SALT',         'S;MrZG&0?P]49 {82*w)@DjSJbaLPG]DB0!r51?<D-^=zK*;@WJzhSvk|i:f;brx' );
define( 'SECURE_AUTH_SALT',  'Wtm%Jgn#lNW`aBH$[VQ/Qpe2eK*[bk.@WDo*tQqITM~T8}3&g+9$n%IxJWs(Ff+A' );
define( 'LOGGED_IN_SALT',    'p )9iJ.*Nk[df/F<b1}AdI(jF6HufLGD[2BHSvw6]@^TR`CJ0jQq=+[e]_&NzA-j' );
define( 'NONCE_SALT',        'c-,9C(D/<VI!wf^b=an|k*}9ft o?`CuWu;F{H8DU8V|,CfvV<Q0_~Vq5nq2N[fP' );
define( 'WP_CACHE_KEY_SALT', 'MZ.Mf^@jtr~-D31X_Ifj/Rra3QHSg:Z!cHCwWAabeUgkIrCk#|Ag.siRQKjv(&I8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
