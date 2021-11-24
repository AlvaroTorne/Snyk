<?php
require_once './connection.php';

$username = $_POST['driver_uname'];
$password = $_POST['driver_psw'];
$busno = $_POST['Busno'];
$driverName = $_POST['driverName'];
$phone = $_POST['phone'];
$travel = 'NO';

if ($db_con) {
    $query1 = "SELECT * FROM bus WHERE driver_uname = '$username'";
    $result1 = mysqli_query($db_con, $query1);
    $r = mysqli_num_rows($result1);
    if($r ==1){
        header('Location: addBusFailed.php');
    }
    else{
        $query = "INSERT INTO `bus`(`driver_uname`,`driver_psw`,`bus_number`,`driver_name`,`driver_phone`,`bus_travel`)
    VALUES('$username','$password','$busno','$driverName','$phone','$travel')";
        if (mysqli_query($db_con, $query)) {
            header('refresh:0;url=addBus.php');
        } else {
            echo "Failed";
        }
    }
} 
else {
    echo "Connection failed";
}