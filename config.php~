<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
define('PACKAGE_NAME', 'MDD');
define('PACKAGE_VERSION', '1.2.8');

// directories
define('PACKAGE_ROOT', '/var/www/html/12junbkup1/');
define('INCLUDES_DIR', '/var/www/html/12junbkup1/includes/');
define('SMARTY_DIR', '/var/www/html/12junbkup1/libs/Smarty/');
define('SMARTY_TEMPLATE_DIR', '/var/www/html/12junbkup1/templates/');
define('SMARTY_COMPILE_DIR', '/var/www/html/12junbkup1/templates_c/');
define('SMARTY_CACHE_DIR', '/var/www/html/12junbkup1/cache/');
define('TEMP_DIR', '/var/www/html/12junbkup1/temp/');
define('GRIDS_DIR', '/var/www/html/12junbkup1/grids/');
define('PEAR_DIR', '/var/www/html/12junbkup1/libs/Pear/');

// database connection parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root123');
define('DB_NAME', 'mdd_db');

// table prefix applied to each table
define('DB_PREFIX', 'mp_');

// url root
define('DOC_ROOT', '/12junbkup1/');

// mail settings
define('MAIL_TYPE', 'mail');
define('SMTP_HOST', '');
define('SMTP_PORT', '25');
define('SMTP_AUTH', '');
define('SMTP_USER', '');
define('SMTP_PASS', '');
define('SM_PATH', '/usr/sbin/sendmail');

// default language (the language templates are written in)
define('DEFAULT_LANGUAGE', 'en');

// cookie names
define('SESSION_COOKIE_NAME', 'mp_session');
define('LANGUAGE_COOKIE_NAME', 'mp_language');

// various limits
define('CELL_SIZE', 10);
define('GRID_SIZE_MAX', 10000);

// lighten factor for grayscale image (0.0 <= factor < 1.0)
define('GRAYSCALE_LIGHTEN', 0.25);

// region status constants
define('REGION_FREE', 0);
define('REGION_ACTIVE', 1);
define('REGION_PENDING', 2);
define('REGION_SUSPENDED', 3);
define('REGION_RESERVED', 4);
define('REGION_EXPIRED', 5);
define('REGION_PENDING_BG', '888888');
define('REGION_PENDING_FG', 'FFFFFF');
define('REGION_PENDING_LETTER', 'P');
define('REGION_SUSPENDED_BG', '444444');
define('REGION_SUSPENDED_FG', 'FFFFFF');
define('REGION_SUSPENDED_LETTER', 'S');
define('REGION_RESERVED_BG', '000000');
define('REGION_RESERVED_FG', 'FFFFFF');
define('REGION_RESERVED_LETTER', 'R');
define('REGION_EXPIRED_BG', '666666');
define('REGION_EXPIRED_FG', 'FFFFFF');
define('REGION_EXPIRED_LETTER', 'E');

// use PHP_SELF for script name?
define('USE_PHP_SELF', 0);

// memory limit to use during grid publishing
define('PUBLISH_MEMORY_LIMIT', '32M');

// this is set when the installer completes
define('INSTALL_COMPLETED', true);

// check for installation complete
if (@INSTALL_COMPLETED !== true) {
  if (file_exists('install.php')) {
    header('Location: install.php');
    exit;
  }
  die("This application must be installed first. See the README.txt file included with the application.");
}

// set the include path

ini_set('include_path', implode(PATH_SEPARATOR, array(
  '.',
  PACKAGE_ROOT,
  INCLUDES_DIR,
  PEAR_DIR,
  SMARTY_DIR,
)));
 
require('init.inc.php');

?>
