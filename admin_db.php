<?php
require_once './connection.php';
session_start();
$user = $_POST["uname_admin"];
$passwd = $_POST["psw_admin"];

$query = "SELECT admin_password FROM admin WHERE admin_username = '$user';";

$result = mysqli_query($db_con, $query);

$r = mysqli_num_rows($result);
if($r==0){
    header("Location: index_loginfail.php");
}
if ($r != 1) {

    // possible SQL injection

}

if ($row = mysqli_fetch_assoc($result)) {
    if ($row['admin_password'] == $passwd) {
        //now proceed, user has been identified
        header("Location: Admin.php");
        $_SESSION['parent_user'] = $user;
    } else {
        header("Location: index_loginfail.php");
    }

}

mysqli_close($db_con);
