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
define('DB_NAME', 'tousgrosdemain');

/** MySQL database username */
define('DB_USER', 'tousgrosdemain');

/** MySQL database password */
define('DB_PASSWORD', 'tousgrosd3main');

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
define('AUTH_KEY',         'k0U?4fxscu^YT`#x!D@GU[ziaz(3/-9W5^rN)bH:c8MxVjp#bga+7aDw.DQ1xK:Q');
define('SECURE_AUTH_KEY',  'S|$[r0D}*y&Yns<Y=^|`Y,AgLuMo>x?GFC^Do&`~`or<Sf Up(Akk7WF)=++M_2y');
define('LOGGED_IN_KEY',    'MDa?OtjQ@ya-Q-[XhYWBkYuNO+7a4._#F(>bv`H}i?Q.;}d?e ;I$6K85.>.QxZh');
define('NONCE_KEY',        'FJ7r0J+/;:R=,4IXXwV:myuE[RG{<ogLS+9A8P5YP<n1$}JgU4JX>V.S]ake+wJA');
define('AUTH_SALT',        'T|k1=@M*@Kz=i||s8OG22 N+=E}:h7qPy/o )--68q<B:n)^5M{c,_@X[my_Lea0');
define('SECURE_AUTH_SALT', 'C6k[xBit22~TW5dY3u+^VkRjI1SCkue$v4rWNp@>-G9(9x}owLJ4:Nhm{Ds-M:GS');
define('LOGGED_IN_SALT',   't.7z<[X&+$+{?wJ-EY:)leV-|o!_MnuJ,={?BgS:N@~TDvLzk]l235.,<rm((H}j');
define('NONCE_SALT',       '(v2zn#k)S[#TO[<]x=MMj-Cp}|H#$boUPzEF1k$+)G}Pb9.wWzX901 [V&!4~ZE-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
