<?php
include('./dbconnection.php');
session_start();
if (!isset($_SESSION['stuLogEmail'])) {
    echo "<script> location.href='loginorsignup.php';</script>";
} else {
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
    $stuEmail = $_SESSION['stuLogEmail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 jumbotron">
                <h5 class="mb-5 font-weight-bolder">Welcome to iSchool Payment Page.</h5>
                <form method="post" action="PaytmKit/pgRedirect.php">
                    <div class="form-group row">
                        <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                        <div class="col-sm-8">
                            <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
                                name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                        <div class="col-sm-8">
                            <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12"
                                name="CUST_ID" autocomplete="off"
                                value="<?php if (isset($stuEmail)) {
                                                                                                                                                            echo $stuEmail;
                                                                                                                                                        } ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                        <div class="col-sm-8" readonly>
                            <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT"
                                value="<?php if (isset($_POST['id'])) {
                                                                                                                                        echo $_POST['id'];
                                                                                                                                    } ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label> -->
                        <div class="col-sm-8">
                            <input id="INDUSTRY_TYPE_ID" type="hidden" tabindex="4" maxlength="12" size="12"
                                name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <!-- <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label> -->
                        <div class="col-sm-8">
                            <input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                                autocomplete="off" value="WEB">
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Checkout" class="btn btn-primary" onclick="">
                        <a href="allcourses.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </form><br>
                <small class="form-text text-muted"><b>Note: Complete Payment Clicking Checkout Button. <br />
                        Note: Payment Is real Kindly Confirm. <br />
                        Note: Pls Note down your ORDER ID because it will be asked
                        afterwards..</b></small>

            </div>
        </div>
    </div>



</body>

</html>





<?php
}
?>