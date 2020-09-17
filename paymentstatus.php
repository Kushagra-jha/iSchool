<?php

include('header.php');


?>
<!-- main content start-->

<div class="container-fluid">
    <div class="row">
        <img src="image/mainbook.jpg" alt="courses"
            style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
</div>
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <a href="comingsoon.php" class="btn btn-info mx-5">View</a>
            </div>
        </div>
    </form>
</div>




<br>
<?php

include('contactform.php');


?>
<!-- main content end  -->
<?php
include('footer.php');
?>