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
define( 'DB_NAME', 'minimalstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '$q]J$JD4av1vLL_V%|mJl+_zd} a(ZPWN;FQih(I9DTc{#)k4N#!>1W7(>]mN:1i' );
define( 'SECURE_AUTH_KEY',  'Q7Tb-e~Yz~M=GKX5h=)vp}:,cPBJ,}u:.*5[zh-Aa(]leWBH).fOCf]OX@R:iBWC' );
define( 'LOGGED_IN_KEY',    'd|#G8&^DC8]=9Wj7GE#*tV,,{bpaDs n6lYQl]%z4r8sB31[QD7&5zvE}8W+RG.K' );
define( 'NONCE_KEY',        '7L-Yn`|LWqU,ojFvY7vTunvtXOUg/&I O2?OauS$a+OBK6hMb>X%yujRCUm8EhH(' );
define( 'AUTH_SALT',        '`C43UmY%g|=Gv}+kBnBZV]xYWMb-zVZI|MS2c2c4njSzDQDCv et;:sb:c$Cf_ E' );
define( 'SECURE_AUTH_SALT', '/Fg(f0Lfb;z736~1Tx&}%qQAX4>}d&||Ac]f@|e( nKy*#kA/tWqW*{S0HN8a?B=' );
define( 'LOGGED_IN_SALT',   '!y$On.j]0v=E(%aZBt&*%^7pmjx$V%slZhrMF1hP5a#RByDO$X}iLIhHMfYPd}RB' );
define( 'NONCE_SALT',       '1mUQp0/R1pJd8Jg3;jnS+vFePZLe`FuJcJD**?Y2j)W./tgDm3X8c{iWuJu[!8$;' );

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
