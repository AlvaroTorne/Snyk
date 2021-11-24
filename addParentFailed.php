<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Add Parents</title>
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

    .alert {
        padding: 20px;
        background-color: orange;
        color: white;
    }

    .closeebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closeebtn:hover {
        color: black;
    }
    </style>
</head>

<body>
    <!-- alert username exist -->
    <div class="alert">
        <span class="closeebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Sorry !</strong> Username exists.
    </div>
    <!-- alert end -->
    <h1>Add Children's</h1>
    <form action="addParent_db.php" method="post">
        <table>
            <tr>
                <td>
                    <b>Parent Name :</b>
                </td>
                <td>
                    <input type="text" name="parentName" size="70" maxlength="20" placeholder="John" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Parent Family :</b>
                </td>
                <td>
                    <input type="text" name="parentFamily" size="70" maxlength="20" placeholder="Smith" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Student Name :</b>
                </td>
                <td>
                    <input type="text" name="studentName" size="70" maxlength="20" placeholder="Name of your student"
                        required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Username :</b>
                </td>
                <td>
                    <input type="text" name="parent_uname" size="70" maxlength="20" placeholder="Username" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Password :</b>
                </td>
                <td>
                    <input type="password" name="parent_psw" size="70" maxlength="20" placeholder="Password" required />
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <b>Bus No. :</b>
                </td>
                <td>
                    <select name="Busno" required>
                        <option value="Select a bus number" selected>Select a bus number</option>
                    </select>
                </td>
            </tr> -->
            <tr>
                <td>
                    <b>Parent Email :</b>
                </td>
                <td>
                    <input type="text" name="email" size="70" maxlength="30" placeholder="Example@email.com" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Bus number :</b>
                </td>
                <td>
                    <input type="text" name="busnumber" size="70" maxlength="30"
                        placeholder="Enter your lchild's bus number" required />
                </td>
            </tr>
            <tr>
                <td>
                    <b>Location :</b>
                </td>
                <td>
                    <input type="text" name="plocation" size="70" maxlength="30" placeholder="Enter your location"
                        required />
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