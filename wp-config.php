<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql_nhat_id_vn' );

/** Database username */
define( 'DB_USER', 'sql_nhat_id_vn' );

/** Database password */
define( 'DB_PASSWORD', 'f638d6048a723' );

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
define( 'AUTH_KEY',         'lofbnryeygepdbtovngkl7ipuex8msjk9er0p4e9lntokx4mnytlsihudxsgpl0u' );
define( 'SECURE_AUTH_KEY',  'ubau1xqnqbz4me0o2lsnebfrrwlpf71muad2m6knnrvptehcord4djrprbdef40i' );
define( 'LOGGED_IN_KEY',    's2n8gukvuageurl5xjzrxhrxebpmsc27sw4whjwwrj9vn2na6dl5cekvacj2silf' );
define( 'NONCE_KEY',        'sibjva4elgmu7safbn7d2uiofsnknsokylgjitaunpwgbo6bkwooyxmiohitho1k' );
define( 'AUTH_SALT',        '9vxnazc6vpev8y5tleflgzypel8v2egkcvl92fcippcpbywzjoeuqavqz3an6nuk' );
define( 'SECURE_AUTH_SALT', 'arfoapbskabz11cjmb0eow5bauo7t17ybnyjgsnoanatxo6n9sybodqf20dsbj5m' );
define( 'LOGGED_IN_SALT',   'nwv7bjgn6jzzh5nqmrrvardpuodib8bi2pino6l99ftroxxlcg1mxwfjwwmp8k97' );
define( 'NONCE_SALT',       'xmfu3htothrznrrqmaiuxhopqvxk4kvcrlehe9fyyno5kdcacta4ac3g0dhcpc6t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuw_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
