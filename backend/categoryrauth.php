<?php
include "db.php";



if(isset($_POST['addCategory'])){

  $categoryname = mysqli_real_escape_string($conn,  $_POST['categoryname']);
  $categorydesc= mysqli_real_escape_string($conn,  $_POST['categorydesc']);
 
  $add = "INSERT INTO category SET
  categoryName = '$categoryname',
  categoryDesc = '$categorydesc'";
  
  
  mysqli_query($conn, $add);
  header("location: ../src/user?added");
}




?>