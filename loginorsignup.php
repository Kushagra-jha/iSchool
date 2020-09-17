<?php 
include('dbconnection.php');
include('header.php');
?>
<div class="container-fluid">
<div class="row">
<img src="image/mainbook.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"></div></div>
</div>
</div>
<div class="container">
<center><h5 class="text-center mt-3 font-weight-bolder">Already Regsitered! Please Login</h5><a href="#" class="btn btn-danger btn-secondary mt-1" data-toggle="modal" data-target="#loginmodal">Login</a><br><br>
<h5 class="text-center mt-3 font-weight-bolder">New User! Please Register</h5><a href="#" class="btn btn-danger btn-primary mt-1" data-toggle="modal" data-target="#registrationmodal">Register</a>
</center></div>
<br><br>

<?php 
include('contactform.php');
?>
<?php 
include('footer.php');
?>