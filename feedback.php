<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
 $user = $_SESSION['user'];
 require_once './connection.php';
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: 'TITILLIUM SANS AND DOSIS'
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #466FB4;
        padding: 20px;
    }
    </style>
</head>

<body>

    <h3 style="color:#466FB4;">Your feedback means to us! </h3>


    <div class="container">
        <form action="feedbackmail.php" method="post">


            <label for="subject">Feedback</label>
            <textarea id="subject" name="texts" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Send Feedback"
                style="background: linear-gradient(to right, #E74C3C 0%, #EC7063 100%);">
        </form>
    </div>

</body>

</html>