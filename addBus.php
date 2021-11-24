<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Add Driver</title>
    <style>
    body {
        background: url("Back/imageedit_3_8523749529.png");
        background-repeat: no-repeat;
        background-size: 1000px 700px;
        padding: 3% 0;
        background-position: center;
        font-family: 'TITILLIUM SANS AND DOSIS';
    }

    h1 {
        color: #466FB4;
    }

    td {
        color: #466FB4;

    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #466FB4;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        border-radius: 5px;
    }

    input[type=password],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #466FB4;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        border-radius: 5px;
    }

    input[type=submit],
    input[type=reset] {
        background-color: #466FB4;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    input[type=submit]:hover {
        background-color: black;
    }

    input[type=reset]:hover {
        background-color: black;
    }
    </style>
</head>

<body>
    <h1>Add Bus</h1>
    <form action="addBus_db.php" method="post">
        <table>
            <tr>
                <td>
                    <b>Driver Username :</b>
                </td>
                <td>
                    <input type="text" name="driver_uname" size="70" maxlength="20" placeholder="Username" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Driver Password :</b>
                </td>
                <td>
                    <input type="password" name="driver_psw" size="70" maxlength="20" placeholder="Password" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Bus No. :</b>
                </td>
                <td>
                    <input type="text" name="Busno" size="70" maxlength="20" placeholder="Bus Number" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Driver Name :</b>
                </td>
                <td>
                    <input type="text" name="driverName" size="70" maxlength="20" placeholder="Driver Name" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Phone Number :</b>
                </td>
                <td>
                    <input type="text" name="phone" size="70" maxlength="20" placeholder="70000000" required />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="reset" name="Clear" />
                </td>
                <td>
                    <input type="submit" name="Next" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>