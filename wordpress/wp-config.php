<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_28518848_w932' );

/** MySQL database username */
define( 'DB_USER', '28518848_3' );

/** MySQL database password */
define( 'DB_PASSWORD', '!SY7J6b3(p' );

/** MySQL hostname */
define( 'DB_HOST', 'sql203.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6wcexam1jgf9jja9blocntfjdwqyy9mda4dbp84e1ebhuso5cougmkzxwaeig0aa' );
define( 'SECURE_AUTH_KEY',  'mlev4fs22hb0btlncziwf0synwenzidha4rot89zdxotzn0uroyqbkjomvt4qptj' );
define( 'LOGGED_IN_KEY',    'b9d08mn9dql1pzndtevbobsgyyxkzh9fawoodzeoqehxfnrprgble0hs0nvsg2oa' );
define( 'NONCE_KEY',        'pwhmel6esycrvlacen5qewgblmizbsndxkko8e4evsjmuwyldbwo3ftormya3q8a' );
define( 'AUTH_SALT',        'lqude969vdvhks6c8svsouv8wx3nahwgpzwuijpupkbhwpjcbzmlunnojumonj9z' );
define( 'SECURE_AUTH_SALT', 'gdmmunjwgqjjaofozzsy51reuzxdxlooaulvjluelsgxhccryknoaoffnniuhirl' );
define( 'LOGGED_IN_SALT',   'xqywudhl4tqjmwjsjvh8qewxeqvewpldqii40aotr7tmbpl4xieesldmht4q36uy' );
define( 'NONCE_SALT',       'z5g9sjfiogoajc58fqlrsrfkagyzq6dhc6yy84pyrw8yp2bkeqn0wtldxdjoqfbs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpku_';

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
define( 'WP_DEBUG', true );
// 開啟除錯日誌功能並放在/wp-content/wp-errors.log
define( 'WP_DEBUG_LOG', true );
// WP_DEBUG_DISPLAY是WP_DEBUG的另一個輔助工具，它可以控制調試信息是否顯示在頁面的HTML中。默認值是'true'，但基於安全理由我們將會使用wp-errors.log去除錯。
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
 
// 使用核心CSS及JS的開發版本（只有當你修改這些核心文件時才需要）。
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
