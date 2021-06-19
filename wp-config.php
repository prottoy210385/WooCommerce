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
define( 'DB_NAME', 'copysite' );

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
define( 'AUTH_KEY',         'm :%_ae4`hSd+d:A0wm6o%Vb*dUw|.r5=7&`!iq]-P#J8Il|un>n<-S6:GI=<o^Y' );
define( 'SECURE_AUTH_KEY',  '9?S6 O)B(~4Q}LIUm,R=KIY226MOs|t+C[,E3~#w^[GK6)GA[)U FTNuiY}HzVL*' );
define( 'LOGGED_IN_KEY',    '+I1#;LJ;BA.[ft;Y0h~<os}AMufKJ6@e[^>@Yd:`nZlP)(QN)w<z]TJ6J3yyZD>2' );
define( 'NONCE_KEY',        'DsV9S(Egr.@A&BF+R#5Mi+o>b/S]E :^+JR#/&QBf8S!W>i/&6U%IFMiK>WO>?*t' );
define( 'AUTH_SALT',        'Uae;#]GlyjW]{8LKQVRtJ%2RMQtE{,dM-~0LS`=t#a)DMZUp*,[RH7lq+W#aI5@#' );
define( 'SECURE_AUTH_SALT', 'R{q5-t9sk%Kr(K+zM?XSmg)e>I(0QI?Em/JX3BA(=23R_Zk81(74~KK*[-4=5MoY' );
define( 'LOGGED_IN_SALT',   'b5OZOkA e%;2_]s=RbB, 7uTt8!<)f:Ckr4M2@.;j1m.*%-;:KD5h8PO_jW,YM4(' );
define( 'NONCE_SALT',       'mXwJ9LTXI&%:F:%UQBc0iJPAoMg:zN-g|t -MUZ|rf/dsb4qID.H~/tXOvdZXYK,' );

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
