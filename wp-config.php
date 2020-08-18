<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'etletbdr');

/** MySQL database username */
define('DB_USER', 'etletbdr');

/** MySQL database password */
define('DB_PASSWORD', '7CKwpO4pE4#]y9');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'j4J6&!5&0M4-cEEQ*GYqw-^W.7u(84?b');
define('SECURE_AUTH_KEY', 'A3W9[B.9@t7dM)^SR@yXrurL}Ys)al_H');
define('LOGGED_IN_KEY', 'hHnRq(N{!{uP+A_RF6fvpb?;94o9-QDQ');
define('NONCE_KEY', '[Fqu1gi9~.n#VJ9{u3?d5l8jB#q.4T{j');
define('AUTH_SALT', '?[{:bq`>`+5,=n{{hS`5okUsDZ wpt=~');
define('SECURE_AUTH_SALT', 'zPTRk#BunhW2T5Ro)(5)459}hZ@4/~_g');
define('LOGGED_IN_SALT', 'lZ]>ruGG&QN=?5yk?827?v13vPhga){M');
define('NONCE_SALT', '1#.s2s8dS6Ou[Fv!.@YY2.YQ*s1Tf8)[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
