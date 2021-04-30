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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\master-php\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         'NAnhDSimld{XG}3C9CW4wb2n,_*=wv%a9DH9f%ECx- b>Nt*uhi3M[k5^?C)p-{>' );
define( 'SECURE_AUTH_KEY',  'J/tq6Af8z[=2E1!t(.;,F(Mwd!`s.vZRew<oSBT|kE7$9>ZDV#;IC(JbM!pVT[.B' );
define( 'LOGGED_IN_KEY',    'c$M>JJ$X|hAfJ5|GX!8rsv#+*.e%B9*h{@K>{-#vTkoih~@%7n?-=mqmdD5TgiI[' );
define( 'NONCE_KEY',        '*}:c[z5B`-,_5lej>gx;f#-IhD~1esc?a;X&$o@-O~g`RZ=rD`xaNUA:jqPvrO8I' );
define( 'AUTH_SALT',        'F6F:opf%[n]?F#z8wAJ7_Z_?P/k$)WC8J!p;N@MB83SlfKx_[[[=htDIdbPgr_{_' );
define( 'SECURE_AUTH_SALT', 'bk)[A-+z{76i$;Je?`1vs&Tht6|74cM+;bf]@*/1ME)0INSS]%,>oKC*2]a:!gQr' );
define( 'LOGGED_IN_SALT',   'g4K@snf0zs7h9?C]KgMBz(P ZfP+jM8?vgIp4[Op1xJ1N~ny33u184Hlv?L|%aNa' );
define( 'NONCE_SALT',       'pYJCaB*TqtxI(R_r&]3^S1?=>)*Otp&lB-ZAf~5)+E63.0QwP3s.M{g46jRab[).' );

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
