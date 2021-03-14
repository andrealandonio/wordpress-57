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

// Database settings
define('DB_NAME', 'wordpress_57');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+X45f L}GJf@(c9/ sKnbD`MnhWdv9qP^eukM|n@;hyf|&zMTZ802Mg.)OwffTY;' );
define( 'SECURE_AUTH_KEY',  'oLjKX9kxKt([0V<M$yTivz_1~PPbV4g;*>(^D%&pa~3NG$ T`J41;M:#mIR<`gx7' );
define( 'LOGGED_IN_KEY',    '[[iPA^2@Z6/W+|KMeO=4LOLq@OHh=bgsWTAlRl>H1(+mO:;SqhzYM~r2>`(iD4}x' );
define( 'NONCE_KEY',        '1!FI+c9op1~t95XOBL1=F#Er/(]`u%ZR_+H?yr||/11dOcQh?L.)l%n&3q9k_zbg' );
define( 'AUTH_SALT',        '1:1L5}l-D lHdiD 9hf71L/_I_19GzKW?Me`tI)cA$tR-!_6?w`}R$7I7<+YRQ!@' );
define( 'SECURE_AUTH_SALT', 'ww:M}BfKj5MNU]h`d.?:K$~in1uf&@H o ,`i%BVR2au|Rn,n;lG(#0lUIHB+_>_' );
define( 'LOGGED_IN_SALT',   'C7>vE*l@lzO=(=`HBB19DJazWZT2h&Xy%#d]GRWHPe75E_U![;!9f@S+2Tq!H,AD' );
define( 'NONCE_SALT',       'sbr+Q!C) &H)KdsakAqnE+DteAdiEF22yD5HL/LI7fkJC,(ZM/-Qg1~O3C<{cQsy' );

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

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
