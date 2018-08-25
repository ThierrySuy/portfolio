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
define('DB_NAME', 'thierrysiq772');

/** MySQL database username */
define('DB_USER', 'thierrysiq772');

/** MySQL database password */
define('DB_PASSWORD', 'BZDE9EYJZecc');

/** MySQL hostname */
define('DB_HOST', 'mysql505.sql004:3306');

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
define('AUTH_KEY',         'CwKxpdD051pl9/nQelf5Z/GboU0obaj3lyvYAEU8fNGBeZHHHme72+egdRgG');
define('SECURE_AUTH_KEY',  'ZXiNYB2VWcYq6RFPkbvDOVJ/yQsLcXA19uvpTF9J3Yte78WxJawEz2A4YkUR');
define('LOGGED_IN_KEY',    'CMRiPC2jBPeQr0OjswPH8ijTQExzVGQtWS2RWXERmaq0D1QDPmmYqkhkUDxH');
define('NONCE_KEY',        'pOhs/DIu4yUcTxKnj+p1t+5oobDvlcUx4du9ugpIIOOmW21qQMbHlLJGwAn/');
define('AUTH_SALT',        '25vc/Nv8I+DgpkYiaIrLB6dFokAPeSdCkKaQ19BUi0/TQ1fvBni6kpiO3swZ');
define('SECURE_AUTH_SALT', '14yhvHFIYxtm+DKsoShkGEeeqciunvHqx4xewQ5PPaXd1Pwo+uxZC7KFHtvN');
define('LOGGED_IN_SALT',   'tE/KQCzik4XYg28eQG22l49W7vMJJ+tE0kkVo2bG0BTtXK0NWPKH3R7RHFER');
define('NONCE_SALT',       'R0EjYjuxD/edsKsdKKxJsgn5AMwOD/dL1ttC1LecrUc+WSj+uj8pnHMBlI2y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod769_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
