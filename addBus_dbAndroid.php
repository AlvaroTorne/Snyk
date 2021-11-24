<?php
require_once './connection.php';

$username = $_GET['driver_uname'];
$password = $_GET['driver_psw'];
$busno = $_GET['bus_number'];
$driverName = $_GET['driverName'];
$phone = $_GET['driver_phone'];
$travel = $_GET['bus_travel'];

if ($db_con) {
    $query = "INSERT INTO `bus`(`driver_uname`,`driver_psw`,`bus_number`,`driver_name`,`driver_phone`,`bus_travel`) 
    VALUES('$username','$password','$busno','$driverName','$phone','$travel')";
    if (mysqli_query($db_con, $query)) {
        echo mysqli_insert_id($db_con);
    } else {
        echo "Failed";
    }
} else {
    echo "Connection failed";
}
