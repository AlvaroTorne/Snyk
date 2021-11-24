<?php
require_once './connection.php';
session_start();

$user = $_POST["uname_parent"];
$passwd = $_POST["psw_parent"];

$query = "SELECT parent_password FROM parent WHERE parent_uname = '$user';";

$result = mysqli_query($db_con, $query);

$r = mysqli_num_rows($result);

if ($r != 1) {
    // possible SQL injection

}

if ($row = mysqli_fetch_assoc($result)) {
    if ($row['parent_password'] == $passwd) {
        //now proceed, user has been identified
        header("Location: trackChildren.php");
        $_SESSION['user'] = $user;
    } else {
        header("Location: index_loginfail.php");
    }

}

mysqli_close($db_con);