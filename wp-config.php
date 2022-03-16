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
define( 'DB_NAME', 'construct' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*5yl#8sjSB|WSfcy$POSxA{`[$?h^p!F;nk}cD{.=|n}sD#V[QiwUE7>;c*n3P,k' );
define( 'SECURE_AUTH_KEY',  'cuS~cO]KWh(!0N [ks+:_Z&hRxQ}ph$r|AQTd99EB/u,LE>M$):TrWWZ?8mG=XS@' );
define( 'LOGGED_IN_KEY',    '/Vsz|Z*IAmI./,kv5|)PRSJ*g;q-U#TW1hAb]Mu^Rktg(A]S8IVm}3^@VrvC&eoG' );
define( 'NONCE_KEY',        '}4n=sGK,53lPalYYlOVR^Zo15oRiC(=5Iz*q{6.`{Z]W->,]NOJb1aPZs&KFqC6x' );
define( 'AUTH_SALT',        '=7F,kn!,%qhlAL=PqF1bw>:{=I^XI_ChZN3.8R|SqADMzDxcCdU&&1&>(u:w0Oi/' );
define( 'SECURE_AUTH_SALT', '-Fs#Wj+~@VpaJA]q!%Xhi h:$vh}=1V$djI;~SQCRA`y/:hWzwt=}wTg7@F~YTWd' );
define( 'LOGGED_IN_SALT',   't}y9p^sjIe_$g@K_d8]IY3~HJ&Z !]gA`-#b:wBt!pw1-.4;yq|0-ls0bPW-~8!#' );
define( 'NONCE_SALT',       '_uLe9Ha-jS44PXceQ&s nf*[KeB=xbOR1(vAlVu0}A5Bdx(S.zYYn/QzELEk1H9>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
