<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Administrator</title>
    <style>
    body {
        background: url("Back/imageedit_3_8523749529.png");
        background-repeat: no-repeat;
        background-size: 1000px 700px;
        padding: 22% 0;
        background-position: bottom right;
    }

    .addParent {
        position: absolute;
        top: 150px;
        left: 180px;

    }

    .adddriver {
        position: absolute;
        top: 150px;
        left: 550px;
    }

    .generateReport {
        position: absolute;
        top: 150px;
        left: 900px;
    }

    .par {
        color:#466FB4;
        font-size: 30px;
        font-family: 'TITILLIUM SANS AND DOSIS';
    }
    </style>
</head>

<body>
    <div class="addParent">
        <a href="addparent.php">
            <img src="Icons/parents.png" alt="parent url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>Add Children's</b></p>
        </center>
    </div>
    <div class="adddriver">
        <a href="addBus.php">
            <img src="Icons/driver.png" alt="driver url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>Add Bus</b></p>
        </center>
    </div>


    <div class="generateReport">
        <a href="viewBusses.php">
            <img src="Icons/view.png" alt="report url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>View Busses</b></p>
        </center>
    </div>
</body>

</html>