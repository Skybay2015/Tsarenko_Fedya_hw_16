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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'mvFwLbj6^)B~L4~N2i}9R5|?aVbnV-Jq1f? j#p.S5&#@L!VOTwk&crX]zcbje5Z');
define('SECURE_AUTH_KEY',  '~$;HS(_{%yuI#vJqa}NYS`fRli>R lL:f(.1c[0Bk{o!w^?bI[>VGg1Udf)sH~c;');
define('LOGGED_IN_KEY',    'FI-qne<duD/Ice*`KIs#Z0S|)<y8=v<IQFO;4%Q^ %sKr{Y)>S7p>xbFDQQwxV+q');
define('NONCE_KEY',        'T|1dOu2+ab@!l$37FYLVen8]nJ#{da-nZ+|SY4f/geAJ(4J@cM6MZ1R2_a`P_NU6');
define('AUTH_SALT',        '!H_x%@#E1|F)-/@&,Styv.%C7URME(5[&2Oqj,Uf[wSS{;wH4! ?ZbtPXz0Bj/Fq');
define('SECURE_AUTH_SALT', 'M:.dM-h5>0ft&Lw(KP=?9icWT6P}dn#o,49>5gUk]lW_]2(t0bvdxQN4c@[zF9q!');
define('LOGGED_IN_SALT',   'IRpQw`5-p:eGFyH%aP>6Pj*aAO!38)7[KEj1!3>CDBsfgO827ckH%Qvemc&<leEB');
define('NONCE_SALT',       'e:y8`v[o.jkeP,,3gt!*[Bf zy<u+PcFRS@K0^r&Z9?pqv>542cabKoQFGq8VE7H');

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
