<?php
require_once './connection.php';



if ($db_con) {
    $query1 = "SELECT * FROM parent WHERE parent_uname = 'abbas_127'";
    $result1 = mysqli_query($db_con, $query1);
    $r = mysqli_num_rows($result1);
    if($r==1){
        echo "username exist";
    }
    else{
        echo "username doesnt exist";
    }
    
   
} else {
    echo "Connection failed";
}
?>