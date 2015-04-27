<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'groupetroistemps_chengse');

/** MySQL database username */
define('DB_USER', 'gro15_fei');

/** MySQL database password */
define('DB_PASSWORD', 'gtt_fei');

/** MySQL hostname */
define('DB_HOST', 'groupetroistemps.alwaysdata.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ';k^^,u=R9=>M/xCywtsA-x|cGgI6v.*%:V_4r1p}]oBUr9bc}5CtC|_0P`ezQ-}-');
define('SECURE_AUTH_KEY',  'P<UG)B+kxw$Snc~f_D^v02&J{#qYD}azXCPS;@Rh%52F$3s<#-No6b>K<N#>SP!@');
define('LOGGED_IN_KEY',    'C|ioe]=-<m!gIQw(A#q=slc?Aqu#c3Jsvh]7vd0g-#5DKFG*=dp(5-}LpI|i2+%K');
define('NONCE_KEY',        '`uBb_l2wo~2W3Aa4YW9QN`7-W`b}h:F|;RH-1i>Fn~+WI>?O[{J.QJ5vU`Gq_ueF');
define('AUTH_SALT',        'V.wuuVVO0LDYCnkUHG$JMGm`H2c?-T0Q<5J8Dj&s>n32*l+xR}SO0deI@D!jQBB;');
define('SECURE_AUTH_SALT', '0bsfoNTN+pQc|;0w~+YHe5pz-~^!MGHVw|-fk[:L`<K[yL~<v~tRq2 +3W((Iw>;');
define('LOGGED_IN_SALT',   'we]`)~mL]{uXmb)hebS@hbK^IxIYel2|&2!y%l4NT&/](q) T/exRd|s06409=_B');
define('NONCE_SALT',       'Ct<1(/nC |c?$,qT]3[j!_$*qS z:A{}J`JDibfS|/ZxScDC5Jm]j7i /1:sf+,e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'se_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
