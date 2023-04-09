<?php
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
define( 'DB_NAME', 'vapobar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+NZs>w6nP@k;_H`e)o$BLZFer]!G{MHJf^)&!Eb6UJ3qGk )bbP2uZcFLu@FGr0#' );
define( 'SECURE_AUTH_KEY',  'xQim([.yqD.pP.b=*mn,yYh*DFEN3ni8cTdas~XE5soq=ov M^&AM@| Q.3GglD*' );
define( 'LOGGED_IN_KEY',    'btxV!=EjQHSPZNeEQR$uSZ~OrjkT}})Eg[s=Z%[1g%DSkAc7hB8N&S:]bWF=#{WB' );
define( 'NONCE_KEY',        ']3rTUDdh0!^N:w6uH+@v!V/+8,6xk(=iz_RBAanaGKTX7RHMXtdajAQTv*Ii?9XV' );
define( 'AUTH_SALT',        '~F!:]I5aNN!2Uu,dVfuKvSFTLc8e{1^Q<Mu}:IrxM4TkeJ4moh$W2zSVF+lzx/80' );
define( 'SECURE_AUTH_SALT', '^XVy[O&8oXjZ6b-@CYb-Z[4AUh/Ewq-,b}G H!6L#$O`NfXi@_mBWm .g,F!#w8B' );
define( 'LOGGED_IN_SALT',   'm1kq#z!f7C_[f0Psh,Siusk`dM^^|Q*)hq2o7R2,I-qfa$URq|u YE(U$U=&~.ly' );
define( 'NONCE_SALT',       'w>c 2qy/]BxwL(>5vRSPtS,_6+D{ Rd~EFCgL8$>a5XZR[11bJ$9QK !CuF`+}z~' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
