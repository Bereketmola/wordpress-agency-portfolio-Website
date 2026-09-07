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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agency_portfolio' );

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
define( 'AUTH_KEY',         '-!L-D&xiS$2h(id%???70evPt7Y$y!Hi5(hBX9s^=;UZF36mzgB@uFt6FRl8tD=3' );
define( 'SECURE_AUTH_KEY',  '~Z%p^K 7grkDc}0JOt:|[^{Z>P!*}u-i5Md@OS_rzLDI2?[7o~-KT&-WI-$@AW#f' );
define( 'LOGGED_IN_KEY',    'AdfFp5jhC1;Ak7h2TnQn%K:;R69M3hv9]._P[RHF]LPeW8/ sV>*l)O$V_|P~u e' );
define( 'NONCE_KEY',        'T2Q};hx32|o<<PA)w1*|mC_m}b<b%:0g$P!<~Js?>a5z9NvVHp&42lR8wU#:9^ -' );
define( 'AUTH_SALT',        '*Rj-_Enac^s<_Cgho h@Inf/jq (-og,^EIU%:yath8[H$7Dr}&h(8fFI>3k_29a' );
define( 'SECURE_AUTH_SALT', '-Bnc=[x%v):|!7O~;Wp,+g,0Sla9lMw^T(ucYzg|ReOz!01c4dfTk*${/]tz%c:K' );
define( 'LOGGED_IN_SALT',   '7{87>,!,U|pE8>5R?h2MW=6y48O*`$-dWo.yWI>4O,fsvL8-&`fU{Hpj@f#sm{gY' );
define( 'NONCE_SALT',       'f^7xV3eB/eTPvw!Hx(gILLa8ct<D_HE^3J:<<+!mFSoz{cAked3j9`oGBc4!|<<~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
