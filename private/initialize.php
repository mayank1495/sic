
<?php


define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

$public_len = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$root = substr($_SERVER['SCRIPT_NAME'],0,$public_len);
define("WWW_ROOT", $root);

require_once('functions.php');

?>