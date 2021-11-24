<?php
require_once './connection.php';
$user = $_GET["driver_uname"];
$passwd = $_GET["driver_psw"];

$query = "SELECT driver_psw FROM bus WHERE driver_uname = '$user';";

$result = mysqli_query($db_con, $query);

$r = mysqli_num_rows($result);
if($r==0){
    echo "Failed";
}
if ($r != 1) {

    // possible SQL injection

}

if ($row = mysqli_fetch_assoc($result)) {
    if ($row['driver_psw'] == $passwd) {
        //now proceed, user has been identified
        echo "success";
    } else {
        echo "failed";
    }

}

mysqli_close($db_con);
