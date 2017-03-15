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
define('DB_NAME', 'webest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Root!@12');

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
define('AUTH_KEY',         'uESW*7{*CR?77P:Z]OPR9nV%U/C+s?3@%wJNJ0wo%Bm6h;C31Rx_FinH36&m2=@%');
define('SECURE_AUTH_KEY',  'gx>IJ}+5]d!=:e`0_i ]LaBKR|*oN?G&,tWp#aGRiLe:WhAGK%1?:zl(Ons&:3L5');
define('LOGGED_IN_KEY',    'C<g=R~H:sM(|M0|C/:H0-90Ma$._Oj)jLP#Fedctx^/mtR`y|u^2Uba&_}kE!%AV');
define('NONCE_KEY',        '&;)aY! O`cPkI:Id*gK)zWf3/jtF&t>Y.egDMA*?;gOA9$;R}H)(+=l 1RysUVct');
define('AUTH_SALT',        'gsPSBu^F~K+&cZ _k L5;^u|^~8v}0H/|NA>*HYjP{*,KqSXGPAt9hN(564duie*');
define('SECURE_AUTH_SALT', 'M?#HR*bv{ipX)^Jk7uf%y>*Mv(tvG)JDNCacUUiJ]Vk64@R{NBG+yM+jed8Bfw]8');
define('LOGGED_IN_SALT',   '8$,!#{gJ2FSP]|h5fYjiTq7,/sQk2.=H7CF[g5!+5+kQ7YiyVw]0K6Ty8 CmaE7+');
define('NONCE_SALT',       '^.Zuj^kBALNB4]/KCMk:ZbXqH$|aOdkBPI=Em8VsaqWK|hxVK&rQg&w7FMF>0i^=');

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

