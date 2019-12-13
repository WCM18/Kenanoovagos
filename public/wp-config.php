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
define( 'DB_NAME', 'kenonavagos' );

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
define( 'AUTH_KEY',         'hn&P!q;3390aqWvgM~&P(}qGrl1j(]k>#TRt>@dkg0#Zx+NSzY~(Ssm(D0tJ@S]w' );
define( 'SECURE_AUTH_KEY',  'J_^L8F8#udU<hC|J0t4 >B7UqQZ*Bjn-=!u&#[-ZMyJV<K7n?S.Ucz]zh%yl9-~o' );
define( 'LOGGED_IN_KEY',    'MXRI0q+hIHEl/KMVy.z)Y(9N361=vMyompej,z4Q07b12-+NRHC>Yz}v?a$&A%8T' );
define( 'NONCE_KEY',        'XS~oV@PdZgqaalJ6_@IIx kY`T+@v`}T.1SO?kG0MT`9gS3$qE(bdY`%GZ(5/v@[' );
define( 'AUTH_SALT',        ',Hg_:rmT?(@c=RRl&F*W?gQ7Xq%YKETte1|B:%s3X|,~0&oOdPAeI4vbM}U]g)1A' );
define( 'SECURE_AUTH_SALT', 'R3Nx.Nmd%F+0^ZGvz#Sw@6*LJZBd3v!g>!s/wN&t>1bj/~Ws)M:jo==38sxb/YQ8' );
define( 'LOGGED_IN_SALT',   'b_emP5T=zTQv|ht$il7]]nCJ{ul,-c5u)/XcO6[LDNXlr ry-x<~p jdBIJkqxP_' );
define( 'NONCE_SALT',       'a1+x1MTQnh:p.eX)*_m42=^d>Qj)zR1K|$p,i>+(y(9r[0_vU$9Ua8yX-8_lp:XJ' );

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
