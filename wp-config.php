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
define('DB_NAME', 'chrimxyv_wp405');

/** MySQL database username */
define('DB_USER', 'chrimxyv_wp405');

/** MySQL database password */
define('DB_PASSWORD', '!rp8)SM5K0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         's8oxjdx6wuvyaihehut9gg1cs7utoevzsoflcq42vv21breallxqdjie9vfzagyb');
define('SECURE_AUTH_KEY',  '0zrqz4fqoln1wd4wehxnh7wnfnu6sqj96m9yyqqzfdq4tlerjcve6ufuweuykvou');
define('LOGGED_IN_KEY',    'q3mrjid5y2djhfd2oqwzqapd98rz313xdgxaq8khjxgaif0z2pnzkz61zvbnisg5');
define('NONCE_KEY',        'r1boi2vl3coxtbwsnkzqzhupfm98dsmibwykbhti3nlhrbx1wnwgx4rfqkmxzs1v');
define('AUTH_SALT',        'ewivxsxfqjg31nnoba7xyuriccbzaepsq0c6fktxzpomicuthkqaupc37ligetma');
define('SECURE_AUTH_SALT', 'hkb9chdgkoe13s6j5qgheroia64hxpnrh43vjjdrzb84c0w8yf9kiqvvbnviblwf');
define('LOGGED_IN_SALT',   'kuzkumc4ddjwa9wr1150rlfolhd1bqvpmioa2hzzcu2n1csgzqfenpulzde3ksgr');
define('NONCE_SALT',       'b3enq70isirtu2gtod6qe1fyjp29v4xjs28rxv7av8x1pz7ydgac70peosmj5l7x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwe_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
