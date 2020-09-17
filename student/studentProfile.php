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


$sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
    $stuName = $row["stu_name"];
    $stuOcc = $row["stu_occ"];
    $stuImg = $row["stu_img"];
}

if(isset($_REQUEST['updateStuBtn'])){
   if(($_REQUEST['stuName'] == "") || ($_REQUEST['stuOcc'] == "")){
       $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Feilds</div>';
   }
   else{
       $stuName = $_REQUEST["stuName"];
       $stuOcc = $_REQUEST["stuOcc"];
       $stu_img = $_FILES['stuImg']['name'];
       $stu_image_temp = $_FILES['stuImg']['tmp_name'];
       $img_folder = 'coming student images/' . $stu_img;
       move_uploaded_file($stu_image_temp, $img_folder);

       $sql = "UPDATE student SET stu_name = '$stuName', stu_occ = '$stuOcc', stu_img = '$img_folder' WHERE stu_email = '$stuEmail'";
       if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content="0; URL=?deleted " />';
       } else{
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Save Changes!</div>';
       }

   }
}



?>



<div class="col-sm-6 mt-5">

<form action="" class="mx-5" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="stuId">Student ID </label>
<input type="text" class="form-control" id="stuId" name="stuId" value="<?php  if(isset($stuId)) { echo $stuId; } ?>" readonly>
</div>

<div class="form-group">
<label for="stuEmail">Email</label>
<input type="email" class="form-control" id="stuEmail" name="stuId" value="<?php  echo $stuEmail; ?>" readonly>
</div>

<div class="form-group">
<label for="stuName">Name </label>
<input type="text" class="form-control" id="stuName" name="stuName" value="<?php  if(isset($stuName)) { echo $stuName; } ?>" >
</div>

<div class="form-group">
<label for="stuOcc">Occupation </label>
<input type="text" class="form-control" id="stuOcc" name="stuOcc" value="<?php  if(isset($stuOcc)) { echo $stuOcc; } ?>" >
</div>

<div class="form-group">
<label for="stuImg">Upload Image</label>
<input type="file" class="form-control-file" id="stuImg" name="stuImg">
</div>

<button type="submit" class="btn btn-primary" name="updateStuBtn">
Save Changes
</button>
<?php
if(isset($passmsg)){
    echo $passmsg;
}
?>
</form>

</div>



<?php

include('stuInclude/footer.php')

?>