<?php

/**
 * The base MySQL settings of Osclass
 */
 
 if (file_exists(ABS_PATH . 'debug.php') ) require_once ABS_PATH . 'debug.php';
define('MULTISITE', 0);

/** MySQL database name for Osclass */
define('DB_NAME', 'u519801583_oc');

/** MySQL database username */
define('DB_USER', 'u519801583_oc');

/** MySQL database password */
define('DB_PASSWORD', 'DcvoVd2nj');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/**define('DB_HOST', 'mysql.hostinger.pl'); **/
/** Database Table prefix */
define('DB_TABLE_PREFIX', 'oc353_');
define('REL_WEB_URL', '/adv/');
define('WEB_PATH', 'http://prodaj.local/adv/');
?>