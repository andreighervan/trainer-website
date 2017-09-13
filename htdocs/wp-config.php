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
define('DB_NAME', 'b13_18948997_brendonand');

/** MySQL database username */
define('DB_USER', 'b13_18948997');

/** MySQL database password */
define('DB_PASSWORD', '123QQmilan');

/** MySQL hostname */
define('DB_HOST', 'sql201.byethost13.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9xbp-VlL^zCx@^=!L.VzTZvofDUe=s!K1Ao<)^bU`?[EZ?4}nxRWrY$jp*8;;|i?');
define('SECURE_AUTH_KEY',  'X&v:k2_x.48p5z2GWVl#/^BIT/=WhW y{f#pfnq>|F#05MTC;1kY$ZB^7y. 26ZH');
define('LOGGED_IN_KEY',    '7&}NRF~B}OutJQeo0Yt*ZpH; g8H~(|-RY`~Y@XA%E2t!1Dnc}$.I/^i>26F@nZp');
define('NONCE_KEY',        'f$>k)]>zmK,W<t6i8>PHoV6uy]1Gt.l+FuO&/c<$]WqAaX:;AUSyw,vg97!=]f]B');
define('AUTH_SALT',        'UP<5L^!~/j)V8<)LS^S5J#>ff`Coho+L {c)#tg^W+WM4Q*Bbpdx; n[fJTYtq{c');
define('SECURE_AUTH_SALT', '$?%Uf=5)ORlZ0GX8C>LQ?~G3pqrG>>xVUAlp2nf6Q%?,KW2UhBp.=)H[j6cc.kTC');
define('LOGGED_IN_SALT',   '.}<jq?6mzTmy1{ilfhpvM+`JUA>f&b|_&trI)g>#CH-sSe-]|W$qT[wy=xcK[vU^');
define('NONCE_SALT',       '^4/Sf&zAZq:nTQbe!JNLx6FNEbyS]6Z:=^wrj=6@(0<@;B<eH4q<hw]NkN5 MHXE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
