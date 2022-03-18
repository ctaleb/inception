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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_name_here' );

/** Database username */
define( 'DB_USER', 'db_user_here' );

/** Database password */
define( 'DB_PASSWORD', 'db_pass_here' );

/** Database hostname */
define( 'DB_HOST', 'db_host_here' );

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
define( 'AUTH_KEY',         'W~W\`&?qVYR^&)K>3;Oi?CLO~SU6W\$B:|A08#J|}U4[(yp,vr9Irjz7\`<z\$s/WSNQ' );
define( 'SECURE_AUTH_KEY',  ':0*]rSv!e6dk<Kh\$?\$/\$9NTb1<!ca^]]}{eI-2,fzz>[8~~%I&h95RFApBGYs{K5' );
define( 'LOGGED_IN_KEY',    'm@f(0kwM=0r3,KBe^N\$?|y/z,x:D6Dh{k)9-0*{,+W-H{zO/YfK^dX <Z_wl/Qzt' );
define( 'NONCE_KEY',        '; :i=f]7E}[W<_B&bXc#jR;,e7|-^\#r~\$F^GGJ[.@h2*Lm/m/tmi2Li(lP5n%t[E' );
define( 'AUTH_SALT',        '\#_PF+G+2]KWw3)h}~GSZ5+C2NyV2GzqIY9^9R%q#Lo6Xw:\$50Rhc87V<d0P/un7J' );
define( 'SECURE_AUTH_SALT', 'opZgN|SENw\`\$\#8XUUbG568?vR=vqj*VUyM!FB~ACWU5zQ!Tz6c@NnP9g;L>5aZEH' );
define( 'LOGGED_IN_SALT',   '~;%\$|yFsG3U:wt2so[)eyX;<0/HkAb=X5&]0(v:uV_*+jV|R<QVC)f,,R\`|Kmbvp' );
define( 'NONCE_SALT',       'nRw#fh?qL,ERf\`KC[i@AVn1^u)z,lvLztv_#g_eU <fp0y6!HQb=Smh[@YG_TG/C' );

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
