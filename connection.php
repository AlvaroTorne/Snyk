<?php

$db_server ='localhost';
$db_user ='root';
$db_passwd= '';
$db_database= 'tracking_bus';

$db_con = mysqli_connect($db_server, $db_user, $db_passwd, $db_database);

if (mysqli_connect_errno()) {
		die('There was an error in connecting.' . mysqli_connect_error());
		}
?>
