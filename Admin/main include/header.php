<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
</head>
<link rel="stylesheet" href="admin css/bootstrap.min.css">
<link rel="stylesheet" href="admin css/all.min.css">
<link rel="stylesheet" href="admin css/adminstyle.css">
<link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<meta charset="UTF-8">

<body>

    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470;">
        <a href="admindashboard.php" class="navbar-brand pl-5">iSchool
            <small class="text-white pl-4">Admin Area</small>
        </a>
    </nav>


    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-4 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="admindashboard.php" class="nav-link"><i class="fas fa-tachometer-alt"></i>
                                Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="courses.php" class="nav-link"><i class="fab fa-accessible-icon"></i> Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="lessons.php" class="nav-link"><i class="fab fa-accessible-icon"></i> Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a href="students.php" class="nav-link"><i class="fas fa-users"></i> Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-table"></i> Sell Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-table"></i> Payment Status</a>
                        </li>
                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link"><i class="fab fa-accessible-icon"></i> FeedBack</a>
                        </li>
                        <li class="nav-item">
                            <a href="adminchangepass.php" class="nav-link"><i class="fas fa-key"></i> Change
                                Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>