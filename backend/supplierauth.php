<?php
include "db.php";



if(isset($_POST['addSupplier'])){

  $supplierName = mysqli_real_escape_string($conn,  $_POST['supplierName']);
  $supplierDesc = mysqli_real_escape_string($conn,  $_POST['supplierDesc']);
  $supplierLoc = mysqli_real_escape_string($conn,  $_POST['supplierLoc']);
  $supplierStatus = mysqli_real_escape_string($conn,  $_POST['supplierStatus']);


  $add = "INSERT INTO supplier SET
supplierName = '$supplierName',
supplierDesc = '$supplierDesc',
supplierLoc = '$supplierLoc',
supplierStatus = '$supplierStatus'";

mysqli_query($conn, $add);
header("location: ../src/user?added");


  
    }
    

    



?>