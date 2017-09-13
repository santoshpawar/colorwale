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
define('DB_NAME', 'colorwale');

/** MySQL database username */
define('DB_USER', 'santya');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'MYtg?wWie>~YkF0 F$zUXm}=*s{Tj4hYQI ,7D>nC!}F0|}lI@7@#d-WXvbo#w_}');
define('SECURE_AUTH_KEY',  'm;5ksVVyx(/wrxx@q5b=i@=}ws!&Kj>Nja0Qk|j-pH@x?04q0|TMcq;Kmn-vF,SA');
define('LOGGED_IN_KEY',    '7t%Gk-4_U:h1=uIQ5=Ou5iM_0P(XYf<E2#l oAfuZz3uf) Aw29h2NM!g~(6Bo0L');
define('NONCE_KEY',        '(jDL{pJQ!NN=$jdA~!:B]lzESD+{BO68824 2#@K9_%q4b`5C1W=}`ji9?}w~vsn');
define('AUTH_SALT',        'Ka%%J@iuyIv@|)`w@Dtb2iisFJ6,.:2Y2fq~~gptHj<~u,zxjOj3.-cw]o5O&]rq');
define('SECURE_AUTH_SALT', 'etg.F?7,:qM.>*2S=ZGb $O%@KE]h<e$#;PWKGpzIoYGF~R?Dh)t%_sC,xEsN*&r');
define('LOGGED_IN_SALT',   'Lw FqXV:7O 4FEQj^{1!C/LC.*D{-NY*Wv:e2Du7$<>^.U%Ev9+=TG(Na_N%W|px');
define('NONCE_SALT',       'OS@j2|**9ZP3@7J^vj_%u}_P`/$ifZa*Hbt+V4C+J@W%tQXS8lFWNL:SUs5(`MQH');

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
