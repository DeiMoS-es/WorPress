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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'de1ga2s' );

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
define( 'AUTH_KEY',         'z/4pR6q}EaR#|5.tKEMW$t_EhfGBGaORwOo4>=+#4me>q<N>o~x>_>A6 a6xDn)_' );
define( 'SECURE_AUTH_KEY',  'X@QqC`C(AxI$4U~l}RxWo$gI]a#3%wN10:)11.XGI*[1Pcj^O2`)6PfH9glLm+6l' );
define( 'LOGGED_IN_KEY',    'I&p&}J-|!_(bD`4u(+yK#i7l<M;BCkf)NPkTi/9HXtL+P{H;vwA+v`Q%bO  q+R>' );
define( 'NONCE_KEY',        '?sJdg[H}pth!SXXtX=G6;nrL(S:Q(6<i 4T#dO8LTx6n_-pKb6<>U3kRs/ab||q[' );
define( 'AUTH_SALT',        'Eq9CRQ!x>o.$:y,Wo=&s,cM=}wMA&S2[e;Gq9=FO<v]ak;_d~+TGijAvaTO!?zvy' );
define( 'SECURE_AUTH_SALT', '[OJ>`R^PO2$iA#F1ispe]|!}1@!7jC/]A)72O<G,!Zv+L]+@#F>/}/U+PL-I17^g' );
define( 'LOGGED_IN_SALT',   '>QL=.y*U`dR-5F:`]HjHH)ym3k+W<?n<>^cVMA{`=Vw0I47}LLz?bII9;0OGEBRU' );
define( 'NONCE_SALT',       'eMp-koQflzV/=?M~uUY}n*&2A9 OC)hbxrElU3;#tM7c}wxtz_nC}IU0s#TI6PaI' );

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
$table_prefix = 'wp_mi_sitio_';

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
