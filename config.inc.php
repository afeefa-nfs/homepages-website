<?php
define('DB_SYS','mysql');
define('DB_HOST','localhost');
define('DB_NAME','profile');
define('DB_USER','root');
define('DB_PASS','');
function redirect()
{
	header('Location: index.php',true,302);
	die();
}
?>