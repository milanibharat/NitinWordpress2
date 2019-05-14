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
define( 'DB_NAME', 'wordpress_extra' );

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
define( 'AUTH_KEY',         '~a8X)SFg(5z$Yd[V8_jFqQy(bBD]>_r>gf(4AJO`%7@o22VH?w8N9`f~o2sf&Svd' );
define( 'SECURE_AUTH_KEY',  '=bl{z!bcY@cOsCR](CpZs$?[w^Doe@,Q/vZqDji@Ilrtv$h{JV#wua={|j#;Uu@=' );
define( 'LOGGED_IN_KEY',    '-sw9YBARD?XrRtpv_8e_xQlgo*=]Jby;8/L}u^lF%}.!u|n+npgtT4`:RFNE.vP%' );
define( 'NONCE_KEY',        '5ALv<K7nF(d4!Zln(;`)I@OgWj2g!@Ug.>Vx1v+:<KjZ;px{pJs[<#>P%$=0o`}G' );
define( 'AUTH_SALT',        'p5yLbA!PM95~,CVJnT3g9q1bX$ P&R}_zS 1!}R$v%a[,-SWeL>U+55(UMK.3G1.' );
define( 'SECURE_AUTH_SALT', 'SR#_HM9qmfiPE-`cLT7G*kE%~3,i?.+OYuFtVx^*llUD=J>+xA;2Hx]Mr2PQmF&v' );
define( 'LOGGED_IN_SALT',   '2VYFH%:5Oc3]?_)rF8GLrE}ODn2^KdXs(DKF=|,H4T.q<LR:*nad,ns9oOE8;2XW' );
define( 'NONCE_SALT',       'JCg{)G(TR!XGO.KVZp[MUbI1[{+[mQmAwMkQ;QTh#aX^!xOJbiyu48K1qLl&<{ E' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
