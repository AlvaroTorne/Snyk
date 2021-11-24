<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Welcome to TrackBus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/all.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
    html {
        scroll-behavior: smooth;
    }

    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 700;
    }

    body {
        font-family: 'TITILLIUM SANS AND DOSIS';
    }

    .navbar {
        padding-top: 2rem;
        /* background-color: #C0392B; */
        background: linear-gradient(to right, #305289 0%, #466FB4 100%);
    }

    .navbar .nav-item {
        margin: 0 .75rem 0;
    }

    .navbar-brand a {
        box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
    }

    .nav-dropdown {
        border-radius: 10px;
        border: 0;
        padding: 0 1.2rem;
        background: linear-gradient(to right, #E74C3C 0%, #EC7063 100%);
        box-shadow: 0px 25px 10px -10px rgba(0, 0, 0, 0.08);
    }

    .nav-dropdown a.dropdown-link {
        color: #f5f5f5 !important;
    }

    .btn-primary {
        color: #fff;
        background: linear-gradient(to right, #305289 0%, #466FB4 100%) !important;
        border-color: #466FB4 !important;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: white !important;
        border-color: #305289 !important;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(111, 66, 194, .5) !important;
    }

    .jumbotron {
        padding: 20% 0;
        background: url("Back/Delivery_tracking@2x.jpg");
        background-repeat: no-repeat;
        background-size: 1000px 700px;
        background-position: bottom right;
    }

    .jumbotron-title {
        font-size: 3rem;
        text-transform: capitalize;
    }

    section {
        padding: 3rem 0 6rem;
    }

    .section-title {
        margin-bottom: 6rem;
    }

    section img {
        margin-bottom: 2rem;
    }

    .feature-section {
        background: url("Icons/loc.png");
        background-position: 0% 100%;
        background-size: 450px;
        background-repeat: no-repeat;
    }

    .feature-section .card {
        border-radius: 10px;
        box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
        transition: .4s;
    }

    .feature-section .card:hover {
        transform: scale(1.1);
        box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
    }

    .footer {
        width: 100%;
        height: auto;
        color: white;
        bottom: 0px;
        left: 0px;
        padding: 45px 0 40px;
        background-color: #305289;
    }

    .footer a {
        color: white;
    }

    .footer a:hover {
        color: #C0392B;
        text-decoration: none;
    }

    .footer ul li {
        margin: .8rem 0;
    }

    .upper-footer {
        border-bottom: black;
        width: 100%;
    }

    .bottom-footer {
        margin-top: 10px;
    }

    .footer ul {
        list-style-type: none;
    }

    .footer ul li {
        margin-left: -40px;
    }

    .footer-link {
        text-align: right;
    }

    .bottom-footer-link {
        margin: 0 5px;
    }

    .top-button {
        position: absolute;
        right: 30px;
    }

    .top-scroll {
        padding: 10px 16px;
        background-color: #C0392B;
        border-radius: 5px;
        font-size: 20px;
        transition: .3s;
    }

    .top-scroll:hover {
        background-color: #dfdddd;
    }

    img.banner {
        width: 380px !important;
        height: 450px !important;
    }

    /* top button */
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #ffffff;
        opacity: .4;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }



    /*
FOR ANIMATION
*/

    .slideanim {
        visibility: hidden;
    }

    .slide {
        /* The name of the animation */
        animation-name: slide;
        -webkit-animation-name: slide;
        /* The duration of the animation */
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        /* Make the element visible */
        visibility: visible;
    }

    /* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
    @keyframes slide {
        0% {
            opacity: 0;
            transform: translateY(70%);
        }

        100% {
            opacity: 1;
            transform: translateY(0%);
        }
    }

    @-webkit-keyframes slide {
        0% {
            opacity: 0;
            -webkit-transform: translateY(70%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0%);
        }
    }

    /* admin login format style */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for buttons */
    .loginbtn,
    .cancelbtn {
        color: #fff;
        background: linear-gradient(to right, #305289 0%, #466FB4 100%) !important;
        border-color: #6F42C2 !important;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
    }

    .loginbtn:hover {
        opacity: 0.8;
    }

    .cancelbtn:hover {
        opacity: 0.8;
    }


    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
        border: 5px solid #305289;
    }

    .container_2 {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 40%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

    .mb-3 {
        color: #305289;
    }

    .paragraph {
        color: #305289;
    }

    .card-title {
        color: #305289;
    }

    .card-text {
        color: #305289;
    }

    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">Track <b>BUS</b></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="#about">Why TrackBus?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="#feature">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white" href="Support.php">Support</a>
                        </li>
                        <li class="nav-item dropdown nav-dropdown">
                            <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" style="color:#C0392B" <button type="button"
                                    onclick="document.getElementById('id02').style.display='block'"
                                    class="btn btn-primary">Parent</button></a>
                                <a class="dropdown-item" style="color:#C0392B" <button type="button"
                                    onclick="document.getElementById('id01').style.display='block'"
                                    class="btn btn-primary">Adminstrator</button></a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- alert invalid username or passowrd -->

        <div class="alert">
            <span class="closeebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Sorry !</strong> Invalid username or password.
        </div>

        <div class="jumbotron jumbotron-fluid back">
            <div class="container">
                <h2 class="jumbotron-title" style="color:#E74C3C; "><i>“Your Children's Safety</i></h2>
                <h2 class="jumbotron-title " style="color:#E74C3C; "><i>is our priority”</i></h2>

            </div>
        </div>

        <section class="about-section text-center" id="about">
            <h2 class="section-title" style="color:#305289;">Why TrackBus?</h2>
            <div class="container">
                <div class="row slideanim">
                    <div class="col-6 col-md-4">
                        <div class="image">
                            <img src="Icons/Bus_.png" alt="" title="">
                        </div>
                        <div class="desc">
                            <h4 class="mb-3">Compatible With Any School Bus Fleet</h4>
                            <p class="paragraph">
                                TrackBus platform works with any school transportation system since our devices are
                                portable from bus to bus or by a conductor.
                                It is so convenient and adaptable that the transport team can easily switch devices or
                                conductors at any time before the trip start.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="image">
                            <img src="Icons/mobile.png" alt="" title="">
                        </div>
                        <div class="desc">
                            <h4 class="mb-3">One App And One Login To Track All Students</h4>
                            <p class="paragraph">
                                When multiple students from the same house have to be tracked from the same bus or
                                different buses or even from different school buses,
                                TrackBus helps parents to toggle between their children’s visibility effortlessly on the
                                same screen.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="image">
                            <img src="Icons/bell.png" alt="" title="">
                        </div>
                        <div class="desc">
                            <h4 class="mb-3">Emergency Management</h4>
                            <p class="paragraph">
                                Bus attendants or drivers can notify the school transport team in case of an emergency,
                                with just a touch on their device.
                                The response time and the action taken by the transport team to handle the emergency are
                                instantly captured by TrackBus for future audits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-section text-center" id="feature">
            <h2 class="section-title" style="color: #305289;">Features</h2>
            <div class="container">
                <div class="row slideanim">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://img.icons8.com/color/96/000000/admin-settings-male.png" />
                                <h5 class="card-title">Administrator</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <button type="button" onclick="document.getElementById('id01').style.display='block'"
                                    class="btn btn-primary">Adminstrator</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://img.icons8.com/color/96/000000/defend-family--v2.png" />
                                <h5 class="card-title">Parent</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <!-- <a href="" class="btn btn-primary">Parent</a> -->
                                <button type="button" onclick="document.getElementById('id02').style.display='block'"
                                    class="btn btn-primary">Adminstrator</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://img.icons8.com/officel/96/000000/driver.png" />
                                <h5 class="card-title">Driver</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a href="" class="btn btn-primary">Driver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center" id="testimonial">
            <h2 class="section-title" style="color: #305289;">Our Team</h2>
            <div id="carouselContent" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center" role="listbox">
                    <div class="carousel-item active">
                        <div class="avatar"><img <img src="https://img.icons8.com/officel/80/000000/manager.png" />
                        </div>

                        <div class="quote">
                            <p style="color: #305289;"><strong>- Abbas Kassen Zein</strong><br>CEO & Co-founder.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="avatar"><img <img
                                src="https://img.icons8.com/plasticine/80/000000/technical-support.png" /> </div>

                        <div class="quote">
                            <p style="color: #305289;"><strong>- Daniel Serhan</strong><br>Techincal Team Leader.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="patient">
            <div class="container">
                <div class="row slideanim">
                    <div class="col-5 img-banner">
                        <img src="Back/iPhone-TrackBuses.png" alt="" width="250px">
                    </div>
                    <div class="col-7">
                        <h1 style="color: #305289;">Download the TrackBUS app</h1>
                        <p style="color: #305289;">TO keep track your children travelling in the school bus;<br>Since
                            GPS location of the school
                            bus is tracked, so driver will not attempt to re-route the school anywhere else.</p>
                        <img src="Back/google-play.png" alt="Play Button" width="180px">
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Admin login format -->
    <div id="id01" class="modal">

        <form class="modal-content animate" action="admin_db.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="Icons/adminicon.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container_2">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname_admin" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw_admin" required>

                <button class="loginbtn" id="login" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container_2" style="background-color:#f1f1f1">
                <button id="cancel" type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="Support.php">password?</a></span>
            </div>
        </form>
    </div>

    <!-- Parent login format -->
    <div id="id02" class="modal">

        <form class="modal-content animate" action="parent_db.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="Icons/parentsicon.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container_2">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname_parent" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw_parent" required>

                <button class="loginbtn" id="login" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container_2" style="background-color:#f1f1f1">
                <button id="cancel" type="button" onclick="document.getElementById('id02').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="Support.php">password?</a></span>
            </div>
        </form>
    </div>

    <footer class="footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a class="navbar-brand" href="#">Track BUS</a>
                    </div>
                    <div class="col-3">
                        <h5>Product</h4>
                            <ul>
                                <li class=""><a href="Support.php">About</a></li>
                                <li class=""><a href="Support.php">Features</a></li>
                                <li class=""><a href="Support.php">Career</a></li>
                                <li class=""><a href="Support.php">Help Center</a></li>
                            </ul>
                    </div>
                    <div class="col-3">
                        <h5>Support</h5>
                        <ul>
                            <li class=""><a href="Support.php">Help Center</a></li>
                            <li class=""><a href="Support.php">FAQ</a></li>
                            <li class=""><a href="Support.php">Security</a></li>
                            <li class=""><a href="Support.php">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <a class="mr-3" href="https://www.facebook.com"><i class="fa fa-facebook-f"></i></a>
                        <a class="mr-3" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a class="mr-3" href="https://www.google.com"><i class="fa fa-google"></i></a>
                        <ul>
                            <li class=""><a href="#">info@trackbus.com.lb</a></li>
                            <li class=""><a href="#">+961 1 115522</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p>&copy;
                            <script type="text/javascript">
                            document.write(new Date().getFullYear());
                            </script> Track BUS Sdn Bhd
                        </p>
                    </div>
                    <div class="col-6 footer-link">
                        <a class="bottom-footer-link" href="Support.php">Privacy</a>&middot;
                        <a class="bottom-footer-link" href="Support.php">Accessibility</a>&middot;
                        <a class="bottom-footer-link" href="Support.php">Terms</a>
                    </div>

                    <button onclick="topFunction()" id="myBtn" title="Go to top"><a href="#top" class="top-scroll"><i
                                class="fa fa-angle-up"></i></a></button>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    $(window).scroll(function() {
        $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
    </script>
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>

    <!-- Script for admin login format -->
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    var modal1 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal1) {
            modal.style.display = "none";
        }
    }
    </script>

    <!-- Script for parent login format -->
    <script>
    // Get the modal
    var modal = document.getElementById('id02');
    var modal1 = document.getElementById('id01')

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal1) {
            modal.style.display = "none";
            modal1.style.display = "none";
        }
    }
    </script>
</body>

</html>
