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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qC,-K3? M<lbP xiyR,N(~C9; ln(EfRU-;LiE@AP4MgSz&>/=>e=n,s_96AZN~Y' );
define( 'SECURE_AUTH_KEY',  'pf#;,gDLH_!23^m,w 0ZQ,uS~J9VFc<G*F]CtO 0.ivL4Y7W@8qQ]hysBx}<Nq+,' );
define( 'LOGGED_IN_KEY',    'P5SNmm5IPx{~K,ErQZ{d_/ad7DTBW@7C|cK3<8x;HA2#Ufwv#${K`QbZfPND&@nK' );
define( 'NONCE_KEY',        'v]r[.k|T^Mg_<j+e8)o5kN3VC.;BEWn-c745EY-lJcESyN4g8duAlpYm6*$rv;<-' );
define( 'AUTH_SALT',        'Dkw!f|a@nd-y@j2gj1IP$=RJ0WCQ+j(o;cCD#uscT_dvn0~A+]JNa_s GxYKb$S ' );
define( 'SECURE_AUTH_SALT', '~aW|.R2U-KMEX`Cm28(D//))|W-E@QnAuWWe:{cp7Hy<[ihKgq&Tn6+%oO/K&3&L' );
define( 'LOGGED_IN_SALT',   '}xtx4{zE2yow_4bK8,9w? #L4;qR5/YhRvpO&8v|CY8$f]x(dlX)$:3#y~AdIsaH' );
define( 'NONCE_SALT',       'SOJ1/@AySS$#,l.(}7QIK{<*%YHa?%Pt+_C1fkDAf,3jj$WY|t.a+d#~Bf!2lj&h' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
