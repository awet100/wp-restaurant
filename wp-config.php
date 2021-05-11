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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-restaurant' );

/** MySQL database username */
define( 'DB_USER', 'awet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql100%' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** set fs methode to direct */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=qj*Z|Q9RfFh0H:|FVL?5-g&Es@^}|kZ?8E%IuMCUFFQ|*(J65_jPlD4 +WWy092' );
define( 'SECURE_AUTH_KEY',  '`1{[aG|{!=<FO UN3bE?7PJb53#{QH1hMG<2;<rjJ1]0{!3wEKc,_9eM}byEfM4O' );
define( 'LOGGED_IN_KEY',    '2hAhGit-r54jqfdZvZ)`<$OL?w=ya{I?Y~jV30PxUv:UYmBkI;Zw?*4J+U&;Hqqu' );
define( 'NONCE_KEY',        'Xbf5%CpEa{xP?-c5|x0.tHI^Iz]+hA_R63]p`F1h!tly`SSBp9U@eIb$r88:O-({' );
define( 'AUTH_SALT',        'dl^IGap)(Ku+X2:D93=OuBv2.3.ss/?o7fJq@LYI t;,V$w,9o-4~tn7c|&N6b1U' );
define( 'SECURE_AUTH_SALT', ';EKSVkKL1Rm_0`Ej3o$UaoJNYk{#ZaT cAx*455j>&-{!ZUHNq4()zNNB*-gYVra' );
define( 'LOGGED_IN_SALT',   '<-+T`^H E;HV.wgf*pwo.@azwK!(NB)Sk<h:KL0VA*u%c`+[qTGQWuDaG.Sp ELt' );
define( 'NONCE_SALT',       'g5z{|Wt*cmcG[QU(YoDH#$/ Er{^Z&I<0!7oS72{FWKU`S,!B fI$8PEo[8@!:?Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
