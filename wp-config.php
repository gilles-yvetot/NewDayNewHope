<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'ANewDayNewHope');

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
define('AUTH_KEY',         '`!Z0B:caq;x.0K_ewU#;&ef{JA7:2og!L{tgWt3tv|a=OyLAy#&KAR#,w&-to;pE');
define('SECURE_AUTH_KEY',  '|8thV-S~C_ ^_%0|Xti+a|In!l:+<kQap[~,cDc(*0|H;e!)YHhA -v9[F3b |FJ');
define('LOGGED_IN_KEY',    'q.%~-@p$F+fu%}SDT!UMkP5:.(w.x%pXGTIdB*zCiZ-Ke-OJvF%#-n>,$4fNoTM4');
define('NONCE_KEY',        'G}rC]TS$Y7K2W``R$-~IU!I1yCe(An_`R/GYt6[0W+>n{G]CJ>8& *}@?#dFyC=A');
define('AUTH_SALT',        'WrjSo2Ko[bQK&3?P]B7x&iQ0UZi/@YxjCI?+rO$NJ*mFL2>oO!KuzU4>>*^vd{eU');
define('SECURE_AUTH_SALT', '[7FXc48E:2K+2Xpwg|3A5h[SUKD3_q1vPW5a3t]{~JB`aT^edrw[2vbla+I9Dx-O');
define('LOGGED_IN_SALT',   'jC%|;*$dfZbY9T$_Q.*k`k+%IG;dVj/1u|s4&xf2*1[A:c0|#F ~->#v}1yEGWxC');
define('NONCE_SALT',       '6^Su2;bW+W^P-qb!5:+q]~J>1F7Wf{Z+ex|A5g.E{>}W2Np}2$B[Q+9C$_&|U%+Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
