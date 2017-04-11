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
define('DB_NAME', 'lifestyle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$R+4}ct5`dwzc,Tq}C7M*<|Ik))zofcu_+=9Ct2k6V7}35t}RS=aF=+t}?=IZ;/:');
define('SECURE_AUTH_KEY',  'At!tMC &I>HW[FuBER3|0fRKa4a-nu.8OANn=n`^NuIp)Xjh-zlBJp4Wfn6RR.|f');
define('LOGGED_IN_KEY',    '{H:4j O/X|Q@)qJm}}L7TJ[}a^D}y_/0^?L?Al>SITt4=F|0T!^OW+lF4Sn+V8q:');
define('NONCE_KEY',        'NmSU0FD@BNRXt&.mg2E|3IdINU]iy.ldH;[)9Lp}R;/+$|}4F8hn83)/`N:hQx,/');
define('AUTH_SALT',        '}$mkL /TjFsJR]9X6 #7@yuP_9@vGjRRL3ib+8p [eF3+s,MYKO|y~>r>K<^AW[1');
define('SECURE_AUTH_SALT', 'A_Bz^MmTv1PV;J]EPV!gKVf2J_Bauyfng/),#w-?d|BNjh?0L+9Gm9`4xGR=ZdyV');
define('LOGGED_IN_SALT',   'S ~bA<%Y45`;[D9;yJ(p;[h_15UV8pcE0_*`h+i/h9e3h8uAjAn&G#eEvt}o?.QQ');
define('NONCE_SALT',       'osPEQ!TE5s``M?@{4[VLO+^/@85X>Io;<Wo:YP;D1cRQ:*#D;M%mzoKqJBtjYJ^+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
