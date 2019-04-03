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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_theme_creative' );

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
define( 'AUTH_KEY',         'GKz+eoXcZyac]BeIM)6Rq!p$8<I8KJD>1,#%e&lqR[Zpu+O1.oz}z[Hkfqc3qW^C' );
define( 'SECURE_AUTH_KEY',  '-~QEc~1,n@C^heb?9=n16[t+G:>*SbX*Fj5[:#`M6](:*!J1QE1tW:}jS&=~Q%Y@' );
define( 'LOGGED_IN_KEY',    '!jL=@.fvGC?NU@S-VSgs:M3-(2PIM7SXc2a#66GxC.(.k%P(fdp#/SO;Rn ?mZr=' );
define( 'NONCE_KEY',        'TGUH]WcyU0cugfqHOD-*bpBgve~+68HmC ~_R|mW>.w$@jq6p<v+68%f&.S>L(<i' );
define( 'AUTH_SALT',        'naSzdVm[1$S@I+$bu l~JD(GALND0xBus)WSvQqOb#[r;El7Pc+ua++yHUUtcRR^' );
define( 'SECURE_AUTH_SALT', 'NkZ?oRR9P4pbBsFOPhiResLlt6K( Y=&_o[2b|lIclDZ+2XCcG@HKJfKlmU c1)x' );
define( 'LOGGED_IN_SALT',   'C6$d}t*~TosenZ|:.cCUc}rN7>SQ_ScU[jta$z!Unh~<OZCz.eBAVq%yV_vC5(dM' );
define( 'NONCE_SALT',       'rXF7j/^eGcGPyv9j^dt2UL-dvi2.}xl.O9? P<UG`B.RQlKD}i4+^bY%Xvl=P&K ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
