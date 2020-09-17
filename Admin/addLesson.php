<?php
if(!isset($_SESSION)){
  session_start();
}
include('main include/header.php');
include('dbconnection.php');
?>
<?php
if(isset($_SESSION['is_admin_login'])){
$adminEmail = $_SESSION['adminLogEmail'];
}
else{
  echo "<script> location.href='../index.php';</script>";}

?>
<?php
if(isset($_REQUEST['lessonSubmitBtn'])){
    // checking empty feilds
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all Feilds</div>';
    }
    else{
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $link_folder = 'coming lectures/'. $lesson_link;
        move_uploaded_file($lesson_link_temp, $link_folder);
        
      $sql = "INSERT INTO lesson (course_name, course_id, 
      lesson_name, lesson_link, lesson_desc ) VALUES ('$course_name', '$course_id', '$lesson_name', '$link_folder', '$lesson_desc')";

      if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson  Added Successfully</div>';
      }
      else {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Add Lesson</div>';
      }

    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Lesson</h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="course_id">Course ID</label>
<input type="text" class="form-control" id="course_id" value="<?php if(isset($_SESSION['course_id'])){ echo $_SESSION['course_id']; } ?>" name="course_id" readonly>
</div>
<div class="form-group">
<label for="course_name">Course Name</label>
<input type="text" class="form-control" id="course_name" value="<?php if(isset($_SESSION['course_name'])){ echo $_SESSION['course_name']; } ?>" name="course_name" readonly>
</div>
<div class="form-group">
<label for="lesson_name">Lesson Name</label>
<input type="text" class="form-control" id="lesson_name" name="lesson_name" >
</div>
<div class="form-group">
<label for="lesson_desc">Lesson Description</label>
<textarea type="text" class="form-control" id="lesson_desc" name="lesson_desc" row=2></textarea>
</div>
<div class="form-group">
<label for="lesson_link">Lesson Video Link</label>
<input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
</div>

<div class="text-center">
<button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
<a href="lessons.php" class="btn btn-secondary">Close</a>
</div><br>
<?php
 
 if(isset($msg)){ echo $msg;}

 
 
 ?>
</form>

</div>
</div>
</div>

<?php
include('./main include/footer.php');
?>