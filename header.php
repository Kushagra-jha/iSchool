<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSchool</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">



    <!-- end navigation -->
    <style>
    .navbar {

        position: fixed;
        align-items: center;
        background-color: #225470;
        color: white;
        text-align: center;
    }

    .brand-title {
        font-size: 2rem;
        margin: .5rem;
        font-family: 'Russo One', sans-serif;
        color: white;

    }

    .iSch {
        color: white;
    }

    .iSch:hover {
        color: rgb(115, 224, 206);
        text-decoration: none;
    }

    .navbar-links {
        height: 100%;
    }

    .navbar-links ul {
        display: flex;
        margin: 0;
        padding: 0;
    }

    .navbar-links li {
        list-style: none;
    }

    .navbar-links li a {
        display: block;
        text-decoration: none;
        color: white;
        padding: 1rem;
        font-size: 2.5vh;
        font-family: 'Balsamiq Sans', cursive;
        text-align: center;
    }

    .navbar-links li:hover {
        background-color: #dc2545;
        border-radius: 10px;
    }

    .toggle-button {
        position: absolute;
        top: .75rem;
        right: 1rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
    }

    .toggle-button .bar {
        height: 3px;
        width: 100%;
        background-color: white;
        border-radius: 10px;
    }

    @media (max-width: 900px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
            position: fixed;
        }

        .toggle-button {
            display: flex;
        }

        .navbar-links {
            display: none;
            width: 20%;
        }

        .navbar-links ul {
            width: 100%;
            flex-direction: column;
        }

        .navbar-links ul li {
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .navbar-links ul li a {
            padding: .5rem 1rem;
            text-align: center;
        }

        .navbar-links.active {
            display: flex;
        }
    }




    .bar1,
    .bar2,
    .bar3 {

        transition: 0.4s;
    }

    .bar:hover {
        cursor: pointer;
    }


    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        /* -moz-transition: rotate(-45deg) translate(-9px, 6px);
        -ms-transition: rotate(-45deg) translate(-9px, 6px);
        -o-transition: rotate(-45deg) translate(-9px, 6px); */
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {
        opacity: 0;
    }

    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }
    </style>
    </head>

    <body>

        <!-- start navigation -->




        <!-- end navigation -->
        <nav class="navbar fixed-top mb-5">
            <div class="brand-title"><a href="index.php" class="iSch"><b>iSchool</b></a></div>


            <a class="toggle-button" onclick="myFunction(this)">
                <div class="bar1 bar"></div>
                <div class="bar2 bar open"></div>
                <div class="bar3 bar"></div>
            </a>
            <div class="navbar-links">

                <ul>
                    <li><a href="index.php" class="nav-link">Home</a></li>

                    <?php
                    if (isset($_SESSION['is_login'])) {
                        echo '<li><a href="logout.php" class="nav-link">Logout</a></li>
  
  <li><a href="student/studentProfile.php" class="nav-link">MyProfile</a></li>';
                    } else {
                        echo ' <li><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodal">Login</a></li>
  <li><a href="#" class="nav-link" data-toggle="modal" data-target="#registrationmodal">SignUp</a></li>';
                    }

                    ?>
                    <li><a href="about.php" class="nav-link">About</a></li>
                    <li><a href="allcourses.php" class="nav-link">Courses</a></li>

                </ul>
                <!-- <li><a href="paymentstatus.php">PaymentStatus</a></li> -->
            </div>
        </nav>

        <script src="js/custom.js"></script>