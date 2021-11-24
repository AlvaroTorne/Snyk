<?php
require_once './connection.php';

$query = "SELECT * FROM bus";
$result = mysqli_query($db_con, $query);
$return_array = array();
while($row = mysqli_fetch_assoc($result)){
    $row_array['bus_id'] = $row['bus_id'];
    $row_array['driver_uname'] = $row['driver_uname'];
    $row_array['driver_psw'] = $row['driver_psw'];
    $row_array['bus_number'] = $row['bus_number'];
    $row_array['driver_name'] = $row['driver_name'];
    $row_array['driver_phone'] = $row['driver_phone'];
    $row_array['bus_travel'] = $row['bus_travel'];
    array_push($return_array,$row_array);
}
echo json_encode($return_array);
?>

