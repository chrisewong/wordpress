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

// ** MySQL settings ** //

if (file_exists(dirname(__FILE__ . '/local.php'))) {

	//Local Databse settings
	/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
} else{
	//Live Database settings

	/** The name of the database for WordPress */
define( 'DB_NAME', 'chris829_chrisdata' );

/** MySQL database username */
define( 'DB_USER', 'chris829_wp975' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chris123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

}


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
define('AUTH_KEY',         'ZIhf5e3H0f5jj/tEyTIQ7FeUerdUbh8jrAtf3rfgzxSu3unSzwPeAvU3KxjGZrdqj7qekAg0tWFbQbC9p4Qn0g==');
define('SECURE_AUTH_KEY',  'JnnWD0j33TDxpMo/irzAI69fx0BDluOmjLdyO9vRgHGLpL0S4IJnGveTqB2zn8i+TREwPYhpTcOy3YtM3rlj3w==');
define('LOGGED_IN_KEY',    's4mBrm3MCSkprJ+H52iTEi9KHIutP9Sf8CrqwUXEiO0+VuwqjLOQbGrh+FyIk3gEItYGXCB/PuBioESQ76gQpg==');
define('NONCE_KEY',        'cRdHkkatnVbyRtTpcriUoYLBzCY5d3X9Twb2oiqghS0L27RPLmRfLGfcm+ADH/EAgf0N2Mp9Q4k5jKqF5gxc/g==');
define('AUTH_SALT',        'eWEPpik7lb/nOmnsa+PC1QKa9P6CZ0+bUTtOUOojNSqqNBSJPu3maYLakkUgiPBwQp9BFUKe6Kvf3MGCFP0jgw==');
define('SECURE_AUTH_SALT', 'K9YATZC41/zdyc6AJE+mZMUH1+CrOVmHtmMGvQq1rIOHH02r7FMVjRbAuXJpIv2Xr7Gf0FMkQI97CQ1JAlSH3Q==');
define('LOGGED_IN_SALT',   'l5r1StBQzEi6/gRKBXBSf759dtJwiwZFTKVmDqc/tySDJS8k1RJyKJieiEOjmxbRv2ufXFktGwwC+c7MlnSomw==');
define('NONCE_SALT',       'lQwGatbs67xAUeDMkCvXeEZDaqM86tWA4vxzibiI97KaaMopwQDTsvVvUY5WEEm2bbuDYa2jHgDldIh8zDKTpQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
