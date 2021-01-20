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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8CWtKAgn2A8zTlx9b5n582kCpmbutROpAwOuXHzNsJFt3n1YpOkuVA3BxxE2aKu4L//PAdlY9f8uWJxX+eOBpQ==');
define('SECURE_AUTH_KEY',  'ZSb18pzN3EsDQN3Hf3A6lyZonfoSt6UWBmHEJcgjKh1yKcBCdbxkNfu/lGuU3kC3MYnBf+9qpueXpJHlXWRgRw==');
define('LOGGED_IN_KEY',    '3FgHLvWZL14JVgOjv09Jdvq9My6voB89kND1731Npyd5Vk8RnzjZTEEuP10TD23tT1QF51IHOBZoiXC+isNdww==');
define('NONCE_KEY',        '+0ou0RMmNpz+fQEdE1vBeJG34ecC+hDFIa54YUGNP/AQcJLNJKH6/+XhbrJCwsFa5xlKYBcuKI9wntjZlqZ9JQ==');
define('AUTH_SALT',        'ku0NllyaEmbM0TkJhXsn64P8ircVLZJvOS6MLKwsokH25HhoC+l4Rb1lCc3p2iCmPO6NgID2zyTV5qRVyJ9Qyw==');
define('SECURE_AUTH_SALT', 'aVZqd1MgJt44xWI2wuk4/zVcVEcVxy3qoHkws3zuDnqA2xW8WTNEDYzbW2zhTvCmaQKMFrOOTuZ6LWrfvYDoMQ==');
define('LOGGED_IN_SALT',   'kicuozamAwSPMVo/sPXkTn3nn2NX3qc0ZwR/oyUeUp1hmZn/Nif9DV3S6F5FfSRT7lR7hNe2gkl3c5HiyMB7eQ==');
define('NONCE_SALT',       'QuzRjRHiQ2sLV/da89iznk3IYop6C94IXdPoPmZXmVrloCTYuUWbgoD549lzv9oqiQnm5jI7Rik3uxRlOHTuLg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
