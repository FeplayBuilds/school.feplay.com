<?php
define('DBSERVER', 'localhost')
define('DBUSERNAME', 'a5eleebv_school')
define('DBPASSWORD', 'Ayush1315')
define('DBNAME', 'a5eleebv_schoolfeplayregister')

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false){
	die("Error: connection error. " . mysqli_connect_error());
}
?>
