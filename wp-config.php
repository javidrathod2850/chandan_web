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
define('DB_NAME', 'chandan_agate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+&z~AF[*$k;DV<B~X~zaj&1c Ze_<4,S;%GfU>J&dv>Y^AU `{MZ7Eymp]@++9*h');
define('SECURE_AUTH_KEY',  '#d#Cg0h@5ZUC<]$kURU=5Vo@_ GH0^UyHpNk}kD([KRKopd?G}iW/OEf`{s^Ioi:');
define('LOGGED_IN_KEY',    'WqR-Mxe%,EhUr-Ol$GZ$sCYR9bpD<H+AfgwO4Py[31(YOOZ^zmR4#|ocRg$x]4DB');
define('NONCE_KEY',        'zDpFUF}(h I)A&x+Q3{0B[2X$iE=oZFnK3}&Z+?14@qfZ@^tc9Q08*aES94Cx83}');
define('AUTH_SALT',        '4kwvx>^3Ihj[{jC`*0+1X;eoyr<;%DX]lS|v6~6OL!.H{=~ENbY(1!^+{7&K&]e%');
define('SECURE_AUTH_SALT', '7|FRWxOgwuJ4kSh(xJb<<u)7&:j6:<`R+rJ{ZxcMVNI)*=;x? mS`/QDT-5V5_A]');
define('LOGGED_IN_SALT',   'eO]P(X)`[]!AZjw /4rE*p5w+=G27Id;O4vl@)<9%p{<NfFWMnLdk(4k{1/%N+Ny');
define('NONCE_SALT',       'kMBg%r#ra&R+)D1C5|I/ruWw,o6.`hOHuAp=>T{D:#efZZZCoz[,_H3fW(FYrS l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ca_';

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
