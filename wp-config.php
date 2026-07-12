<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dimasagilsw' );

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
define( 'AUTH_KEY',         'wbGF$?0jITOLYsc_G.R&~**r=?+-m2>R9 Vy;[a8I;G)j2lBU~QfM=4*Xb,]x^Ox' );
define( 'SECURE_AUTH_KEY',  'Lv#kQbZZ(,Pxc:Sh%Ec4l4Dj1jU6P!H Bw.2{U$]:]|~E,6RJ4#2a3mxaEmt7%wY' );
define( 'LOGGED_IN_KEY',    'B=&iZ`L:}-:A){VX9]@[>w/x6[[Od[!t^H?cJ.TQ=*PJA$ SHWWb=U[/|@z.*UEj' );
define( 'NONCE_KEY',        'i (2s9v2+0v){Mt $1c[fqf~:Agg=D=Jt4D|H_3{;O=Y=;@,a0gowU7y/1se/i0B' );
define( 'AUTH_SALT',        '0QQx2aWzIzI#b+=4CZ)VkIrjz.1IW*XU:(>l*K|N*iy]=syf#^(s3u1%<TNV-9Sl' );
define( 'SECURE_AUTH_SALT', '{,%Euu^ j<SoqJ!,]+_hpP2u2~qq9eU9iU{~ncn9+FkKWNO/[6Mm]d)mMpWee GC' );
define( 'LOGGED_IN_SALT',   'i?V:pb@p2UjI%/B34hW+BRNKhs410Nb}IIU4f7{(B%/aO<P_yg6_(7*7>w+:GnS[' );
define( 'NONCE_SALT',       '+rvSz>N.!$ub91%~GO%yUFPGz6@ega9OpUsFS/ACg#xlMK -]DZ;GvCM!0Z<t*4o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
