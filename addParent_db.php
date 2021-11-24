<?php
require_once './connection.php';

$parentName = $_POST['parentName'];
$parentFamily = $_POST['parentFamily'];
$studentName = $_POST['studentName'];
$username = $_POST['parent_uname'];
$password = $_POST['parent_psw'];
$email = $_POST['email'];
$busnumber=$_POST['busnumber'];
$location=$_POST['plocation'];

if ($db_con) {
    $query1 = "SELECT * FROM parent WHERE parent_uname = '$username'";
    $result1 = mysqli_query($db_con, $query1);
    $r = mysqli_num_rows($result1);
    if($r==1){
        header("Location: addParentFailed.php");
    }
    else{
    $query = "INSERT INTO `parent`(`parent_uname`,`parent_password`,`parent_name`,`parent_family`,`student_name`,`parent_email`,`bus_number`,`parent_location`)
    VALUES('$username','$password','$parentName','$parentFamily','$studentName','$email','$busnumber','$location')";
    $message="Dear Mr/Mrs. $parentName $parentFamily , \n \n \n Your username is: $username \n Your password is: $password \n Your Registered location is: $location" ;
    $subject="Your school TrackBUS username and password";
    mail($email,$subject,$message);}
    if (mysqli_query($db_con, $query)) {
        header('refresh:0;url=addParent.php');
    } else {
        echo "Failed";
    }
} else {
    echo "Connection failed";
}