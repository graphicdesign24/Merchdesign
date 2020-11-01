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
define( 'DB_NAME', 'merchd_db' );

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
define( 'AUTH_KEY',         'zCAY1r@E^npZ(uK+`xvdg3 Q6[,}O??vDU--xUD0.il?*-*TmP#}p**>xK6!o[K]' );
define( 'SECURE_AUTH_KEY',  'XH^o8/eIZaM`7ukQ&Ei]3CPO,nPBBtr`4xs1yHq_m)fFz1CF_g5;Sj3CGI~f32PV' );
define( 'LOGGED_IN_KEY',    'xMb?+X2?h|PF<q%fChro_,SKHYLE/:$+qNj^s/j^+JB;~ZnmB*2qEQEM?,{r9C[N' );
define( 'NONCE_KEY',        'kJTwI&i7jpx<[ZE6@C}w$p2t;,_S}wHeFA)`:HW}Vw~OkisuZXO({*].q^u*9y B' );
define( 'AUTH_SALT',        'k`.7%^fP^}Ku#aX+PS.iDe-m09aXatIa8[Th$|HX,(o]yZf8IL>n,>7qL$B/DZ+g' );
define( 'SECURE_AUTH_SALT', 'J#%R,CAB+U>*d<C#DSSC/% ]1P8;ge)onbL]|:,;K[2V`P?LZ=_0=K8MHPYmjyc^' );
define( 'LOGGED_IN_SALT',   'tg|;FOo3`M~tsgf0p~$F >>b6G^MLr!f_1ym{0#W8 TZrYcA{w/F<OFl{8E/lhvH' );
define( 'NONCE_SALT',       'JO?}>0*eR%D.zt#NFd(Bsd,O/)1HV%983p!No1xR,]*K%@og?xXK)%9i;>:6+pS&' );

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
