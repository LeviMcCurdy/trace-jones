<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jones_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Sp8zZ6[+z&lrhQ?s.aZ0+w^5UXqxyQB*hJ$D+g)&>~-A l0nz1wD|rBOm|UDNoL+');
define('SECURE_AUTH_KEY',  'Tm${/zgYE<%r&:42/Z/bU[-7mqug&U}ACIJ9Kcz+M>%bZhn=Lz2CqVScOGVft;zC');
define('LOGGED_IN_KEY',    'Zb=oJ:bx|81W`C3?Z|*g82Y}j D<7rZBl%B:Gkp1JJmqpV3IU(=UOlNq+,0d3t.%');
define('NONCE_KEY',        'I;grGu{&[=64Eh %^R.Goa*r%7u+|Sy4Gu/3 d3{>`FG^z)Rzh3,q!IV2]`d#+^I');
define('AUTH_SALT',        '6s!jdfT$YbCK}8Z5%#NNT!etPhL_|E/] _`s[0$@/~9a[Ee+3#$#U+WXKmQ (L)C');
define('SECURE_AUTH_SALT', '<>Xy??wI}X74[Mn.O.ncv^9vju0+o* +{K&i7;Dn4BxIEBCA7d2.L=v-k~7j2)KV');
define('LOGGED_IN_SALT',   '$[p*>_eby?F6&v/[4pV(v^1=KB}h~t2~|9_dkVi`5dJQVf` 2{X GIPRwYv#qz[A');
define('NONCE_SALT',       '-Byue+~PS:3+^OVZDkyFwI?-Hqst,p5<.FG^<|WuDg-oi(ih9mHNj$|d4QTuuc77');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
