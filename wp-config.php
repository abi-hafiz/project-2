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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'NlvURNlgI9tLUjp&WR7C?=W$$Hwao0Acp*dRkh38TY5!-GR*qm527/:>o:W)3m-P' );
define( 'SECURE_AUTH_KEY',  '~R=2<`/WnL`YM92?TGSFtpXln)7g.dhRzaGp^;3NFHL]]cu}.]]A($= h?(:VNz^' );
define( 'LOGGED_IN_KEY',    '2~|2SFOue$7?7[7Jn<F*rCuBeIZNG6Uf*YvXhtlP*>Blg_|FqmCs@K?nq_wvw<#`' );
define( 'NONCE_KEY',        '^}S089_Vyds0@}oeLwofzr+q2>WQS>e~2Gf[1F)QXbE#6S`tl-6j5-?=7bnR~oTu' );
define( 'AUTH_SALT',        '&.:<DJ~wq8-T[YG1N9fo/O!pdB`L*g~fi@^N=Fjxs(2%d^`6m|F#@7{I9Jf&nYq]' );
define( 'SECURE_AUTH_SALT', 'DB35mk-PaGeFWYM Wh_$sXtF5^5O-}0yh&Pv6_.J7Jx$%ScG;t%A9MMZlI5e|WF0' );
define( 'LOGGED_IN_SALT',   'd>1->ON8AYHahc7O@-#@%p6T&W4p$,7I*gP>_l%|bStH[d0)/+BqkRs+cy`R1H&u' );
define( 'NONCE_SALT',       '-!]{orz* _Qv^^lLS<Jz?QIs h&HwXE%QVg.AvLSGwy>=(smU09oF^@W9-{dK}(e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
