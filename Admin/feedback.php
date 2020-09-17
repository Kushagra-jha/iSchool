<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('../dbconnection.php');
include('main include/header.php')

?>

<div class="col-sm-9">

<p class="bg-dark text-white p-2 mt-5">List Of FeedBacks</p>
<?php

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo '<table class="table">
    <thead>
    <tr>
    <th scope="col">FeedBack ID</th>
    <th scope="col">Content</th>
    <th scope="col">Student ID</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<th scope="row">'.$row["f_id"].'</th>';
        echo '<td>'.$row["f_content"].'</td>';
        echo '<td>'.$row["stu_id"].'</td>';
        echo '<td> <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='.$row["f_id"] .'>
        <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td></tr>';

    }

    echo '</tbody>
    </table>';
}
else{
    echo '<div class="container text-center alert alert-warning">OOPS ! No FeedBack Given Yet</div>';
}

if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
      if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content="0; URL=?deleted " />';
          
      }
      else {
        echo '<div class="container text-center alert alert-danger">OOPS ! Unable to Delete</div>';
      }
    }

?>


</div>

<?php

include('main include/footer.php');

?>