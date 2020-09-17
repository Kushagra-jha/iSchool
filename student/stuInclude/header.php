<?php

include_once('../dbconnection.php');

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href='../index.php'</script>";
}

if (isset($stuLogEmail)) {
    $sql = "SELECT stu_img FROM student where stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Area</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
</head>
<style>
.mynavbrand {
    font-size: 4.5vh;
    font-weight: bold;
    font-family: 'Russo One';
}
</style>

<body>
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="studentProfile.php" class="navbar-brand pl-5 mynavbrand">iSchool | Student Area
        </a>

    </nav>

    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">

                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $stu_img; ?>" alt="Pls Upload Image"
                                class="img-thumbnail rounded-circle">
                        </li>
                        <li class="nav-item">
                            <a href="studentProfile.php" class="nav-link">
                                <i class="fas fa-user"></i>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../comingsoon.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                My Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="stufeedback.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentChangePass.php" class="nav-link">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="fas fa-backward"></i>
                                Back to Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>


</body>

</html>