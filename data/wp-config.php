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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'wp_pass');

/** MySQL hostname */
define('DB_HOST', 'db-instance');

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
define('AUTH_KEY',         'V>~2{y$_~|IZ=o+7RV2&:!STiZj`Xy,NDDa~wh1o+~tg6]hL Eju|3|$+JwByqE+');
define('SECURE_AUTH_KEY',  '+^uxZ=-n[c]I9IMA>|LEV&-+%X/H_|Us)*5MUi/&rqG|}MCzAf|bf$S8.{AMsy;C');
define('LOGGED_IN_KEY',    'jq2/pk9``51a{B +b]Fh4K}D7pGxJ?3-]G{L(n`YTUhM(J7a:,4IL}Fdq4&=ty8?');
define('NONCE_KEY',        '/v0gT5aJ-lW5MWk{ONjrxIRS{.;ez kULV)<+TN;=F9m&-5[*#?.?(P%+fQe^=S ');
define('AUTH_SALT',        '~gMEvP@Zmry*(9mW7Ut8Bd7$`UI:[HhD1_3RF^a]<xNZjXQnKUNKHyskilw]qOr~');
define('SECURE_AUTH_SALT', 'OkjSvVUtIScMHKf1P?b8-$S]hQIdaTHf#r(y=vjIbS-<WD=<M1K*[)h])@HC@}Kk');
define('LOGGED_IN_SALT',   '<VRC_#L|.Q3Q7 E+4+4Q08~lp>hH|5GVD1#[hn]0aPMZe:9.s7V -?}v&H{HvdL&');
define('NONCE_SALT',       '|Y*d<mE)>+e_`Nh/oV:)a~@l{v/fG2!6w@/FiTJJU4$@WwI&rY[7+~@]guO$WQ5*');

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
