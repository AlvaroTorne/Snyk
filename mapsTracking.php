<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
 $user = $_SESSION['user'];
 require_once './connection.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Your Child's Location</title>
    <style>
    body {
        font-family: 'TITILLIUM SANS AND DOSIS';
    }

    h1 {
        background-color: #466FB4;
        color: white;
        font-family: 'TITILLIUM SANS AND DOSIS';
        text-align: center;

    }

    a:link,
    a:visited {
        background-color: #466FB4;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-family: 'TITILLIUM SANS AND DOSIS';
    }

    a:hover,
    a:active {
        background-color: black;
    }
    </style>

</head>

<body>
    <?php 
            // here we are taking out the parents location
            $query = "SELECT * FROM parent WHERE parent_uname = '$user';";
            $result = mysqli_query($db_con, $query);
            $row = mysqli_fetch_assoc($result);
            $parent_location=$row['parent_location'];
            $student_busnumber=$row['bus_number'];
   
            // here we are taking out the drivers location
            $query2 = "SELECT * FROM android_dlocation WHERE bus_number = '$student_busnumber';";
            $result2 = mysqli_query($db_con, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $driver_latitude=$row2['latitude'];
            $driver_longitude=$row2['longitude']; 
                  
        ?>
    <p>
    <h1>Your child's location last 5 mins where here</h1>
    </p>

    <iframe width="100%" height="500"
        src="https://maps.google.com/maps?q=<?php echo $driver_latitude; ?>,<?php echo $driver_longitude; ?>&output=embed"></iframe>
    <p>
    <h1>Check your child's location relative to your home, with google maps</h1>
    </p>
    <center><a class="center"
        href="https://www.google.com/maps/dir/'<?php echo $driver_latitude; ?>,<?php echo $driver_longitude; ?>
    '/<?php echo $parent_location; ?>/@37.3879377,28.1392665,6z/data=!3m1!4b1!4m7!4m6!1m3!2m2!1d28.97953!2d41.015137!1m0!3e0?hl=en-US"
        class="w3-button w3-black">Google Maps</a></center>



</body>

</html>