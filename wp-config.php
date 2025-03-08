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
define( 'DB_NAME', 'morrog_store' );

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
define( 'AUTH_KEY',         'zVds,)||pb*MGoTlMe%+>Ia? 6s.|v$,3RSsp?+T,lsLR.$$ey>d@?iLQj>8{yBR' );
define( 'SECURE_AUTH_KEY',  '@[vNe7@o[r.ZVa&id{TFOm=&jTe~jlq-u72jS 3L)*M@FMwB=2ne_FyeLIfnPV@{' );
define( 'LOGGED_IN_KEY',    '; CE!Dh~QC,J^Z6@hb_4uaSk@37zR}Wi|:N6{mZf$#V+&$wIv9JJI)/:hR?pn^UC' );
define( 'NONCE_KEY',        'FCC,QJnWCGVxPA&bIhT*-z:lW+Iuhh))UU)DDF|:j<(tv!=_s8#{MYVcmx;O/Ms0' );
define( 'AUTH_SALT',        'S4C`$`_53,E!e:^.074#[A8`2>d9m!X^r+m^Cu]>17jq+:(gJG[B&&z[<q{s hZF' );
define( 'SECURE_AUTH_SALT', 'gl}tL:1kw,O_&UM7x0$2IE$q`NctG+{>M5?&N{T{QhGvF7Pf!KVH<$g3o?qbbhn7' );
define( 'LOGGED_IN_SALT',   'lKGG Ft*1C<Y|7jjsem2;J]NwrBle-|0^TH0U9O(LhGp9xI_VH`u;9eiYS)^B*rE' );
define( 'NONCE_SALT',       '<xPvueLnomP)36ZH}]!=]LA77sW`AS.`Jf@AO,Ulsc4z}wi$a1SJv}`{ao8f((2c' );

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
