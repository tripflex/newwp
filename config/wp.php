<?php
/**
 * @title Wordpress Configuration
 *
 * @author     Myles McNamara (get@smyl.es)
 * @copyright  Copyright (c) Myles McNamara 2013-2014
 * @Date:   2014-03-19 21:40:57
 * @Last Modified by:   Myles McNamara
 * @Last Modified time: 2014-03-19 22:19:46
 */

define('APP_ROOT', dirname(__DIR__));

$devConfig = APP_ROOT . '/config/env/dev.php';
$liveConfig = APP_ROOT . '/config/env/live.php';


if (file_exists($devConfig)) {
	require $devConfig;
} elseif{
	require $liveConfig;
}

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>