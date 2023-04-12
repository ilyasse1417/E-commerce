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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H?U>s8di:6kN^C1*ibwxl^2Cm*~CGJ61S?:lVK<dTe>/bW`RmM3%wpsV1{`}M&Ks');
define('SECURE_AUTH_KEY',  'FMCEpLX^p[ji|;[({ijn{%T_)}uxs?H 0c&thSU)D(YQ#ogZ:]A;pmA*(+:Sq[aF');
define('LOGGED_IN_KEY',    'YIFP}Jnvfo? GPTRhT%0&CH8xNg>0%$/QJJNI!d>twD,ssO/Zl4{O>ye%7VX`/!g');
define('NONCE_KEY',        '1-!VA1r>|$5OG#R~pegp<jyI,A79xykr>cSP+fzW4tLzG~;px=Hsptr~yZR5Rzkg');
define('AUTH_SALT',        'M)1ZKe^IZda&c&4wCT}!EGVX-+D+1S-&nGa+D Ii z%.?fF-zPV*g$h+UhYVno%h');
define('SECURE_AUTH_SALT', 'K|0,^<qE+0!-NpTC4nF;E[qor/HA39/0RrowuJ=0~GA2nf_XK.ikzdI>H&&)3]@m');
define('LOGGED_IN_SALT',   '~*-jENyUG5(U- QZ,yLXwS/tdc)0RPMm#Gk-PXu(wQsW|G,9X7uh~9Qq6i0+8|/n');
define('NONCE_SALT',       '@6.X eyp L&q7aT:SaB,YFA8WNuE%y7zl.(mTAMaj uVb:<uaSwD;?XSP~w>.,[N');

/**#@-*/

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
