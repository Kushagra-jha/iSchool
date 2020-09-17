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



if(isset($_REQUEST['studentPassUpdateBtn'])){
    if(($_REQUEST['stuPass'] == "")){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Feilds</div>';
    }else{
        $sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $stuPass = $_REQUEST['stuPass'];
            $sql = "UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2 ">Password Updated Successfully...</div>';
            }
            else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">OOPS! Unable To Reset Password(ERROR:SERVER SIDE)</div>';

            }
        }
    }
}
?>

<div class="col-sm-9 mt-5">
<div class="row">
<div class="col-sm-6">
<form action="" class="mt-5 mx-5">
<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" value="<?php echo $stuEmail ?>" readonly> 
</div>
<div class="form-group">
<label for="inputnewpassword">New Password</label>
<input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="stuPass"> 
</div>
<button type="submit" class="btn btn-info mr-4 mt-4" name="studentPassUpdateBtn">Save Changes</button>

<?php if(isset($passmsg)){echo $passmsg; } ?>
</form>
</div>
</div>
</div>



<?php

include('stuInclude/footer.php')

?>