<?php
include('header.php');
include('./dbconnection.php');
?>
<!-- main content start-->

<!-- 1st deck -->
<div class="row">
    <img src="image/mainbook.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
</div>
</div>
</div>



<div class="container mt-5" style="padding-top: 3vh;">
    <h1 class="text-center common mt-5">All Courses</h1>
    <div class="row mt-4">

        <?php

    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $course_id = $row['course_id'];
        echo '<div class="col-sm-4 mb-4">
<a href="courseDetails.php?course_id=' . $course_id . '" class="btn" style="text-align: left; padding: 0px;">
<div class="card">
  <img src="' . $row['course_img'] . '" alt="" class="card-img-top" alt="Image Not Available." />
  <div class="card-body">
    <h5 class="card-title">' . $row['course_name'] . '</h5>
    <p class="card-text">' . $row['course_desc'] . '</p>
  </div>
  <div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small><span class="font-weight-bolder">&#8377 ' . $row['course_price'] . '</span></p>
<a href="courseDetails.php?course_id=' . $course_id . '" class="btn btn-primary text-white font-weight-bolder float-right">Enroll Now</a>
  </div>
</div>
</a>
</div>


';
      }
    }
    ?>






    </div>
</div>

<br>
<?php

include('contactform.php');


?>
<!-- main content end  -->
<?php
include('footer.php');
?>