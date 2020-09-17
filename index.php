<?php

session_start();
include("./dbconnection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSchool™</title>
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
            width: 50%;
        }

        .navbar-links ul {
            width: 100%;
            flex-direction: column;
        }

        .navbar-links ul li {
            text-align: center;
        }

        .navbar-links ul li a {
            padding: .5rem 1rem;
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

    .bar {
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
        <nav class="navbar fixed-top">
            <div class="brand-title"><a href="index.php" class="iSch"><b>iSchool™</b></a></div>


            <a class="toggle-button" onclick="myFunction(this)">
                <div class="bar1 bar"></div>
                <div class="bar2 bar"></div>
                <div class="bar3 bar"></div>
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="#home">Home</a></li>

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
                    <li><a href="allcourses.php">Courses</a></li>
                    <li><a href="#feedback">FeedBack</a></li>
                    <li><a href="#contact">Contact</a></li>

                    <!-- <li><a href="paymentstatus.php">PaymentStatus</a></li> -->

                </ul>
            </div>
        </nav>

        <script src="js/custom.js"></script>

        <!-- start video background   -->
        <div class="container-fluid remove-vid-marg mt-5" id="home">
            <div class="vid-parent">
                <video playsinline autoplay muted loop>
                    <source src="video/banvid.vid">
                </video>
                <div class="overlay"></div>
            </div>
            <div class="vid-content">
                <h1 class="my-content tt" data-aos="fade-up" data-aos-duration="900" data-aos-delay="0">Welcome to
                    iSchool</h1>
                <small class="my-content vv" data-aos="fade-up" data-aos-duration="900" data-aos-delay="0">Learn and
                    Implement</small>
                <br><br>
                <?php

                if (!isset($_SESSION['is_login'])) {
                    echo '  <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" href="#" class="btn btn-danger getstart" data-toggle="modal" data-target="#registrationmodal">Get Started</a>';
                    echo '<style>
                    @media screen and (min-width:0px) and (max-width:420px) {
        
                        .getstart{
                            display: none;
                        }
        
                    }
                    </style>';
                } else {
                    echo '<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" href="student/studentProfile.php" class="btn btn-primary">MyProfile</a>';
                }
                ?>
            </div>
            <style>
            @media screen and (min-width:0px) and (max-width:420px) {

                .getstart,
                .vv {
                    display: none;
                }

            }


            /* @media screen and (min-width:0px) and (max-width:) {
                    .vid-content {
                        top: 0;
                        left: 22%;
                    }
                } */
            </style>



        </div>
        </div>
        <!-- end video background -->


        <!-- start text-banner -->

        <div class="container-fluid bg-danger txt-banner" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="0">
            <div class="row bottom-banner">
                <div class="col-sm">
                    <h5 class="res"><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
                </div>
                <div class="col-sm">
                    <h5 class="res"><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
                </div>
                <div class="col-sm">
                    <h5 class="res"><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
                </div>
                <div class="col-sm">
                    <h5 class="res"><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
                </div>
            </div>
        </div>




        <!-- end text-banner -->

        <!-- start most popular course -->
        <!-- 1st deck -->
        <div class="container mt-5" id="courses">
            <h1 class="text-center common" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Our Popular
                Courses</h1>
            <div class="card-deck mt-4">

                <?php

                $sql = "SELECT * FROM course LIMIT 3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $course_id = $row['course_id'];
                        echo '  <a href="courseDetails.php?course_id=' . $course_id . '" class="btn" style="text-align: left; padding:0px; margin:0px;"> 
  <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
    <img src="' . $row['course_img'] . '" class="card-img-top" alt="No Image Available" />
    <div class="card-body">
      <h5 class="card-title">' . $row['course_name'] . '</h5>
      <p class="card-text">' . $row['course_desc'] . '</p>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small> <span class="font-weight-bolder">&#8377 ' . $row['course_price'] . ' </span></p>  <a href="courseDetails.php?course_id=' . $course_id . '" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
    </div>
  </div>
  </a>';
                    }
                }
                ?>


            </div>
        </div>
        <!-- 1st deck end  -->

        <!-- 2nd deck end  -->
        <!-- all course btn  -->
        <div class="text-center m-2">
            <a data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0" href="allcourses.php"
                class="btn btn-danger btn-sm">View All Courses</a>
        </div>
        </div>

        <!-- end most popular course -->

        <!-- contact Us form start!!!!  -->
        <?php
        include('contactform.php')
        ?>
        <!-- contact form end!!!! -->


        <!-- start testimonials  -->


        <style>
        .mycsscar {
            background-color: #225470;
            min-height: 65vh;
        }
        </style>


        <style>
        .myheading {

            text-align: center;
            font-weight: bold;
            position: relative;
            margin: 30px 0 60px;
        }

        .myheading::after {
            content: "";
            width: 140px;
            position: absolute;
            margin: 0 auto;
            height: 3px;
            background: #db584e;
            left: 0;
            right: 0;
            bottom: -10px;
            opacity: .8;
        }

        .col-center {
            margin: 0 auto;
            float: none !important;
        }

        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel-item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 290px;
        }

        .carousel .item .img-box {
            width: 135px;
            height: 135px;
            margin: 0 auto;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 30px 0 10px;
            color: white;
            font-weight: bold;
            font-size: 3vh;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: white;
            font-size: 1.5vh;
        }

        .carousel .carousel-control {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            top: 50%;
            background: none;
        }

        .carousel-control i {
            font-size: 68px;
            line-height: 42px;
            position: absolute;
            display: inline-block;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
        }

        .carousel .carousel-indicators {
            bottom: -40px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 1px 3px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #999;
            border-color: transparent;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        .carousel-indicators li.active {
            background: #555;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        .testicss {
            background-color: #225470;
            min-height: 50vh;
            opacity: 4;

        }
        </style>


        <div class="container" id="feedback">
            <div class="row">
                <div class="col-md-8 col-center m-auto">
                    <h2 class="common  myheading" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="0">
                        Student's FeedBack</h2>
                    <div id="myCarousel" class="carousel slide testicss mb-5 mt-3" data-ride="carousel"
                        data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">
                        <!-- Carousel -->

                        <div class="carousel-inner">


                            <div class="item carousel-item active">
                                <div class="img-box mt-5"><img src="image/avatar5.jpeg"></div>
                                <p class="testimonial">Very Good Teachers</p>
                                <p class="overview"><b>John Doe</p>
                            </div>

                            <?php
                            $sql = "SELECT s.stu_name, s.stu_img, s.stu_img, f.f_content FROM student
  AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $s_img = $row['stu_img'];
                                    $n_img = str_replace('..', '.', $s_img);

                            ?>

                            <div class="item carousel-item">
                                <div class="img-box mt-5"><img src="student/<?php echo $n_img ?>"
                                        alt="Image Not Availabe"></div>
                                <p class="testimonial"><?php echo $row['f_content'] ?></p>
                                <p class="overview"><b><?php echo $row['stu_name'] ?></b></p>
                            </div>
                            <?php   }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>

        </div>
        </div>

        <!-- end testimonials-->


        <!-- student registration -->
        <?php
        include('studentReg.php');
        ?>
        <!-- end student registration -->
        <!-- start student login form -->
        <?php

        include('studentLog.php');
        ?>
        <!-- end student login form -->




        <!-- admin login start -->
        <?php

        include('adminLog.php');

        ?>


        <!-- admin login form modal END -->


        <!-- start including php footer -->

        <?php
        include('footer.php');

        ?>

        <!-- end including php footer -->