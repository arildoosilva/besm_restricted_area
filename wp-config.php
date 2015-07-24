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
define('DB_NAME', 'area_restrita');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'zcas00');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#K=KL%C>R{yzpb},K}oY-l:}be,zW8{5L4oad2y<? Jp@y0&v2C{ wzC)H){ujiw');
define('SECURE_AUTH_KEY',  't-AA]BGIgjW[TLt8!nZTZ3B6)X{Y9d=Hh`XoZeFdhHd?&5B/5=kc xZfnUzhJ?<O');
define('LOGGED_IN_KEY',    '1Q&`S@-GHT:z|[KZ?3WxP5=O8S9&p~W^e.)9jPT>PZNfh_DZLW^P-gKqi_<-tI)l');
define('NONCE_KEY',        '|o_eq_!FZ>uIuv>jt-:C[-LRCO!!H`YBFk5yC+pT+<REx$lNuO)C|[t$Zuai#I`)');
define('AUTH_SALT',        '$0?=)l6zc|gP|<*DM%u>ZoGOK&%&G`/lu^0QKsx6^/mdX 4?9~i%#nb5-S6v:L>H');
define('SECURE_AUTH_SALT', 'T~-d4i%ltMd4XhZr0@-FHPq9kcP9EaUt+F>.1jX8A[*cY_#qc2ptW-Y&khn)P5|L');
define('LOGGED_IN_SALT',   '+i*m|0,rn]s+@ei{n,NxofSq+8Ly?ywg_y|8RW|tjML}g@xGMN,S,R|lFfjvJmt~');
define('NONCE_SALT',       'sMfA3/8|DE@5C)&Tty2P83vG_(iL+<tnHth>XP&J72TY)y|58t+k+ncG.~>XQY_~');

/**#@-*/

/*
 * SendGrid config.
 * define('SENDGRID_USERNAME', 'sendgrid_username');
 * define('SENDGRID_PASSWORD', 'sendgrid_password');
 *
 * define('SENDGRID_SEND_METHOD', 'api');
 * define('SENDGRID_FROM_NAME', 'Example Name');
 * define('SENDGRID_FROM_EMAIL', 'from_email@example.com');
 * define('SENDGRID_REPLY_TO', 'reply_to@example.com');
 * define('SENDGRID_CATEGORIES', 'category_1,category_2');
 */

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
