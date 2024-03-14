<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.1500267756966620');
define('WP_SITEURL','https://diy-pwa.com/scope:0.1500267756966620');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY','Hj]=EUcfIecPcGIomr<A7RQTcH0K1-1>msH&%?KY');
define( 'SECURE_AUTH_KEY',',cN=Tyi/b>d+W2N4$=ZINX(PuinTovWc@qw2lPn[');
define( 'LOGGED_IN_KEY','gP95t+M.$WvP^w>byqNh3pyRlRKSj7hoJ[_8Z/Qy');
define( 'NONCE_KEY','vO^5vozvauf8M!iaHI$8<LyCM0vTinXZQOxQrnd)');
define( 'AUTH_SALT','nC1jJ!lNIkeiH@n7j-=O^-[hJ&mW6HW$E-Ke%=7O');
define( 'SECURE_AUTH_SALT','yCkbq__%uJDiKyBRL3N4HXXYJL<Ec@ggwB75H+k6');
define( 'LOGGED_IN_SALT','_XA3e)GjkJV?YehgyxJtr(Gm/3a?5K-.4^mUF24O');
define( 'NONCE_SALT','/cdfM/&*t<wa7KLbJFLg%aEn0U!G_J*N@5P(PsLk');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
