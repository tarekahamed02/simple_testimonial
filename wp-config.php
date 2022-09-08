<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testimonial');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '123456');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'jQx/oos SH:~ u[C>jQ1Vv h?*LU|x!t.N~CXMMohVx>P+&Q=<aK^GDAS?NCY7))');
define('SECURE_AUTH_KEY',  'q+6~jyHcQEk%r<8v9JPQ*/liZS}nqxjpbO_tVk{%3yjck{?zT09.y5%NT[DAYph*');
define('LOGGED_IN_KEY',    'f1)f0is^^scj<%Xqg1k1T!-T2|f5B+oU7{W1d+b[7HyjLHiYz>`JQov;QMf;yJ4t');
define('NONCE_KEY',        '!Nv?Y?:+,B>W%~#k:j%XZ+vcjrbiS8;Lnf7c~$D@hH-b/?9!4+|$.E<&.FW:.pco');
define('AUTH_SALT',        'a~y#4-dv+.Q!^Xk5#6d}EX42jmtnt>7JN;$(IMw.Bp<L%p_|)a[-Zg,rN%9]if)9');
define('SECURE_AUTH_SALT', '8tN(2oyrCcq=I>]v2?.{%N{MP0Ln#th)Sdco8%srSZq:,FaH%JvjQ?ouz{dtm9RG');
define('LOGGED_IN_SALT',   'wXjQPu~AstN*I)|7RZg<_58n5=[qSa8d lJ{{>pdH&a/{kHd$b<l5k-Ypep3p@J,');
define('NONCE_SALT',       '4eEjP$iTLczR~r044`Qgzu%z:XmvY ]#b,}&27q`H$U!cfB~|Q;(9IOau9GHo8V ');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'testimonial_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('FS_METHOD', 'direct');
