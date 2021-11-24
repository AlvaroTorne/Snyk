<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Support</title>
    <style>
    body {
        background-repeat: no-repeat;
        background-size: 1000px 700px;
        padding: 3% 0;
        background-position: center;
        font-family: 'TITILLIUM SANS AND DOSIS';
    }

    * {
        box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=password],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
    </style>
</head>

<body>
    <div class="main" id="section2">
        <section>
            <div class="CUcontainer">
                <div style="text-align:center">
                    <h2>Contact Us</h2>
                    <p>Swing by for a cup of coffee in our <a
                            href="https://www.google.com/maps/place/Beirut+Digital+District/@33.891082,35.5032862,16.74z/data=!4m8!1m2!2m1!1sBDD!3m4!1s0x0:0x84af4efc0f005b6!8m2!3d33.8915464!4d35.5054495">Office</a>,
                        or leave us a message:</p>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="Back/ContactUS.jpg" style="width:100%">
                    </div>
                    <div class="column">
                        <form action="SupportMail.php" method="post">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            <label for="lname">Your Email</label>
                            <input type="text" id="lname" name="email" placeholder="Example@gmail.com">
                            <label for="You are">You are a?</label>

                            <select id="Youare" name="Youare">
                                <option value="school">School</option>
                                <option value="parent">Parent</option>

                            </select>
                            </br>
                            <label for="subject">Subject</label>
                            </br>
                            <textarea id="subject" name="subject" placeholder="Write something.."
                                style="height:170px"></textarea>
                            <input type="submit" value="Submit" style="background: linear-gradient(to right, #305289 0%, #466FB4 100%) !important;">
                        </form>
                        <!-- alert support failed -->
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Sorry!</strong> Your message was not sent successfully, check internet connection.
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>