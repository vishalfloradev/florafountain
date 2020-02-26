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
define( 'DB_NAME', 'florastaging' );

/** MySQL database username */
define( 'DB_USER', 'ff_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '36q!++UYR(}6' );

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
define( 'AUTH_KEY',         '(g/-=+0i09yD(,#rx!Ar9e{H{wxr_<7f m#bnec{n!dO1$vd}WV+MoRT,IC} m{8' );
define( 'SECURE_AUTH_KEY',  'qn+.PntQvb3n_/0?oE-OyO1;YuZPs#w,3I1=.x:fy>hverH{ Wrp_a<6q7IO>LKy' );
define( 'LOGGED_IN_KEY',    'wU.=D-@(}1Pdj5SPeKK]@i]&vd2y8={^-IELb+u(Lhz4$s$&GP U{l82/*-9b{v,' );
define( 'NONCE_KEY',        '1<Zk$u%-|JPqA}<*2-.ehpjc,d=pL92LL3u<<m$FrIcs$ ktP/v~Fqw4ywz)utl0' );
define( 'AUTH_SALT',        'p)8DHh[/`3==78<dP%#^]^sQAT<p)tV{7.pwc.ctRu39K}|7e;d%->Q*@Ro1A:3D' );
define( 'SECURE_AUTH_SALT', 'P.;H{.zGh0;$pl44+MZ.VFL2E2^B=%zZzO%69HHhBZpNR*K(1I[dCFpxa9h.jTLR' );
define( 'LOGGED_IN_SALT',   'hiiaqTT35Qz8P$ylV3=&(P%Us!=qGZ]%ZmHt9$Tcd<3bz?BgdYv)7%el70V^o%_E' );
define( 'NONCE_SALT',       '~~t obu$p=(djowJQFHs:FE[gV`BWj<+7H3>14g:WX`A2`q)N-*75bxI7FJK:ERl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ff_';

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
define( 'WP_POST_REVISIONS', 5 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
