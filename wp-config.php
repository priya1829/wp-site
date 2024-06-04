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
define( 'DB_NAME', 'BST_database' );

/** Database username */
define( 'DB_USER', 'BST' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mysql.youngstorage.in:3306' );

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
define( 'AUTH_KEY',         '/3(T;/-nlN|EF+%E>OD[5q7VuVhK/cNs4RC9))DSd*t=GzQ;>@Yr5Xv//92|>p(.' );
define( 'SECURE_AUTH_KEY',  '[0MIAB?7MR4oQrWTuoVp7zJc]O_|2Xp]M:BMUwG9L*za|~2JZ;z6c:4X5<N% d&)' );
define( 'LOGGED_IN_KEY',    'W_ybWV2^SG9G3$[;EC0Q3Yu.4;c?DF|dlmNs=>$;2K!Z87X/E)nc4s4]7##Z##Ez' );
define( 'NONCE_KEY',        'n]o-`]wetq]b/H&a.O:KxgJ7W4tPY65PbB+o+%3EQ5hy;zrK710yTP_=_T2LhA;(' );
define( 'AUTH_SALT',        '>%:(K_/{cp?ZHB.To?[vR !tG*j{ZiLV%I7:7FQf5^A.w+=hXp?w()=2rh3j]?IM' );
define( 'SECURE_AUTH_SALT', 'm W}SoC>vTh]/iC5u5~,f)K>egOMR:cg0q>gx-?/KKf$hdRF6k`2stSkMzd8Ip(R' );
define( 'LOGGED_IN_SALT',   '&K.9m;rPQ3-d9AP,.CEveYFA6|:@$sEvwxWak4S8oAnEu6[[wN^%&faC-tk/zAmp' );
define( 'NONCE_SALT',       '#J6@~[-?l`oUiozs@xsK@E pw$:h~c5N#v18!;Fa?AK7>ZG*Fg&T39I&1ZSXph[4' );

/**#@-*/
define('FS_METHOD', 'direct');
define( 'WP_MEMORY_LIMIT', '256M' );


/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
$_SERVER['HTTPS']='on';

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
