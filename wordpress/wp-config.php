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
define( 'DB_NAME', 'd3concept' );

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
define( 'AUTH_KEY',         'wvcTO^Da|KJA6&hSb=Q6`:0i|]Cyb%L2 +wH-,[%Hu4>L&c::X{Cv=!rWqB,7Fxh' );
define( 'SECURE_AUTH_KEY',  '?:flXAln/T(x%f{hxO>}IC~F=a>Di{[]>J:X+A*wB=.Uu<m2N=diwaV2JLHI5ymE' );
define( 'LOGGED_IN_KEY',    '8ktBiG%[sVEn!=Z,EhFn>:7CyQle(Zeb;(gG1/8e`In_8#K+0Oue%Zkr2=P)qE*O' );
define( 'NONCE_KEY',        ';E7Zvhc{$z5T=t&&a.r=a}?PGGMa97@J$XepjuiXYxRh#~Zi>Gj*&?Dj{1j`HR3x' );
define( 'AUTH_SALT',        '~B>z^2h<YyCnQX_B[~Q@lw`K(sS5u1W.Z}_]%JS:L}<cb&h`#<lPO|eRJ|ghM-D<' );
define( 'SECURE_AUTH_SALT', 'a[Zk9u8s/(TN^@Qld)rVl I+|=%e@-D]` +D`nc]k?Q]Rx3^h&8Moo_b#@XB*@(f' );
define( 'LOGGED_IN_SALT',   '5zt(UWr4UX33BPK}ffk;M+qx}/ODNp4JcRp,e%=r^AF5],!5/}BZO8spEWK?$(tD' );
define( 'NONCE_SALT',       '+(SU4vTVsHU)>(usnMS8h63%#t(23!NbO5oo~G3U80<GI}4J/.OMs[IuZdtPIa4n' );

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
