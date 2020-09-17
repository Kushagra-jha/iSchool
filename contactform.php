<?php
// The contact Us Form wont work with Local Host but it will work on Live Server
if (isset($_REQUEST['submit'])) {
    // Checking for Empty Fields
    if (($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")) {
        // msg displayed if required field missing

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];

        $mailTo = "kjjhakj@gmail.com";
        $headers = "From: " . $email;
        $txt = "You have received an email from " . $name . ".\n\n" . $message;
        mail($mailTo, $subject, $txt, $headers);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
    }
}
?>

<!-- contact Us form start!!!!  -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">



<div class="container mt-4" id="contact">
    <h2 class="text-center mb-4 common" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Contact Us</h2>


    <div class="row">
        <div class="col-md-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" name="message" placeholder="How can we help you?"
                    style="height:150px;"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
                <?php if (isset($msg)) {
                    echo $msg;
                } ?>
            </form>
        </div>
        <!-- offline contact -->
        <div class="col-md-4 stripe text-center text-white off" data-aos="fade-right" data-aos-duration="1000"
            data-aos-delay="0">
            <h4>iSchool</h4>
            <p>
                Bharat Nagar, Delhi<br>
                Ashok Vihar<br>
            </p>
        </div>
    </div>
</div>
<!-- contact form end!!!! -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxrequest.js"></script>