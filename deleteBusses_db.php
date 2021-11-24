<?php

ob_start();
require_once './connection.php';

$id=$_GET['id'];

$query="DELETE FROM bus WHERE bus_id = $id";
$result=mysqli_query($db_con,$query);
if(!$result)
{
     die("Could not delete the bus ");
}
else
{
    header('refresh:0;url=viewBusses.php');
}