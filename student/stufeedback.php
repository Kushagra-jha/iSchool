<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('../dbconnection.php');
include('stuInclude/header.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];

} 
else{
    echo "<script> location.href = '../index.php'; </script>";
}

$sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row['stu_id'];

}

if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content'] == "")){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Feilds</div>';
    } else{
        $fcontent = $_REQUEST['f_content'];
        $sql = "INSERT INTO feedback (f_content, stu_id) VALUES 
        ('$fcontent', '$stuId')";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">FeedBack Given Successfully</div>';
        }
        else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Give Feedback.</div>';
        }
    }
}

?>


<div class="col-sm-6 mt-5">

<form action="" method="POST" enctype="multipart/form-data" class="mx-5">

<div class="form-group">
<label for="stuId">Student ID</label>
<input type="text" class="form-control" id="stuId" name="stuId" 
value="<?php
if(isset($stuId)){
    echo $stuId;
}
?>" readonly>
</div>
<div class="form-group">

<label for="f_content">Write FeedBack..</label>
<textarea name="f_content" id="f_content" row="2" class="form-control"></textarea>
</div>

<button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit</button>
<?php   if(isset($passmsg)){
    echo $passmsg;
} ?>
</form>

</div>





<?php

include('stuInclude/footer.php')

?>