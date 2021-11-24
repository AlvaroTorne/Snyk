<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>View Busses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'TITILLIUM SANS AND DOSIS';
            background: url("Back/imageedit_3_8523749529.png");
            background-repeat: no-repeat;
            background-size: 1000px 700px;
            padding: 16% 0;
            background-position: center;
        }

        h1 {
            color: #466FB4;
        }

        thead {
            background-color:#466FB4;
        }

        th {
            color: white;
        }

        td {
            color: black;
        }
    </style>
</head>

<body>
    <?php

    require_once './connection.php';
    $query = "SELECT * FROM bus";
    $result = mysqli_query($db_con, $query);
    $nbrows = mysqli_num_rows($result);

    ?>
    <div class="container">
        <br>
        <h1>Registred Busses</h1>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Bus ID</th>
                    <th>Driver Name</th>
                    <th>Phone Number</th>
                    <th>Bus Number</th>
                    <th>Travel</th>
                    <th>Action</th>
                    <th>Report</th>
                </tr>
            </thead>
            <?php
                for ($i = 0; $i < $nbrows; $i++) {
                    $row = mysqli_fetch_assoc($result); //get one complete row and put it inside an associate array called $row[]
                    $id = $row['bus_id'];
                    $id2=$row['bus_number'];
                    echo "<tr>";
                    echo "<td>" . $row['bus_id'] . "</td>";
                    echo "<td>" . $row['driver_uname'] . "</td>";
                    echo "<td>" . $row['driver_phone'] . "</td>";
                    echo "<td>" . $row['bus_number'] . "</td>";
                    echo "<td>" . $row['bus_travel'] . "</td>";
                    echo "<td><a href='deleteBusses_db.php?id=$id'>Delete</a></td>";
                    echo "<td><a href='report.php?id2=$id2'>View</a></td>";
                    echo "</tr>";
                }
            ?>

        </table>
    </div>
</body>

</html>