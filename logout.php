<?php 
  include './connection/connection.php';
  
  session_destroy();
  
  header("Location:index.php");
?>