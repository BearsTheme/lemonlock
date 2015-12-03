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
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress/lemonlock');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress/lemonlock');

/** The name of the database for WordPress */
define('DB_NAME', 'bears_lemonlock');

/** MySQL database username */
define('DB_USER', 'bears_lemonlock');

/** MySQL database password */
define('DB_PASSWORD', 'Developer20');

/** MySQL hostname */
define('DB_HOST', '188.166.245.6');

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
define('AUTH_KEY',         'nxI^i Iw08pL ]mn:[{|XjLjq%?Jxx7;-o8YyHIR,rrx@aM5vRH#;{{LO?N=->zw');
define('SECURE_AUTH_KEY',  'w2o0]EHqd]k75Slx:r#G1v/E?J[7EJZ%Crrk1;:[`,eUeAE*-?W|?E4c$!D(;A<#');
define('LOGGED_IN_KEY',    '8;I4G}>%(96nmJq~ai1^f]&Ls0L_D:M%PWXP#q)F>&f.Mz,q4+wK#H@A]/YcN^0$');
define('NONCE_KEY',        'ZO -^UH-]Pb!O-s@SRm%zgWY_MAx8w_]AAj$h-<rxO5.Q7/4R{|PZq!Hd(Y+2xVa');
define('AUTH_SALT',        'QG/h.$:9 N|%@5LzUV5pT-+QY& -7~sf]OtupD{hm+&J| Kd?VCnp/E~%o#NMSp/');
define('SECURE_AUTH_SALT', 'C8rEd22^+NF-ofzy.O2V>E|7nWm1(m7-1--OrdzIL]=`?7q*:.z6N%^Uz-3Nz*m~');
define('LOGGED_IN_SALT',   'S1Hh{aQ,=_U7FLXC2iPJPH/oXyp%B0COTy/G+4A^C&b*+Im6h%>SxV};KSj!{K?:');
define('NONCE_SALT',       '<=$/n?mt[/n >~rZ !V7XoqUyURfFW0Ji0y;D_tEb>N/*c_.e^yER^SXD~6*0w)*');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
