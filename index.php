<?php
 include "backend/db.php";
 session_start();

if(isset($_SESSION['user_id'])){
  header('location: ./src/home');
}


 ?>

<!DOCTYPE 
<html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
  <link rel="stylesheet" href="login.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</head>

<body>
<?

if(isset($_GET['notfound'])) {
  echo '<script>
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "No data found in database!",
  });
  </script>';
} 

?>
 
 <div class="container">
        <div class="angular-shape bottom-left"></div>
        <div class="angular-shape top-right"></div>
        <div class="logo-container">
            <img src="https://www.talavera.gov.ph/wp-content/uploads/talavera-11.jpg" alt="Logo"> <!-- Replace "logo_image.jpg" with your actual image path -->
            <div class="logo-text">TALAVERA RURAL HEALTH UNIT I</div>
        </div>
        <div style="height: 70%; border-left: 4px solid #ddd; margin: 0 0 0 2in;"></div>
        
              <form action="backend/loginauth.php" method="POST"  class="login-form">
             
            <h2>WELCOME</h2>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
              </svg>
            <p>Login to continue</p>
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <p style="font-size: smaller; margin-left: 50px; margin-top: 2px;">Forgot password?</p>
            <button class="btn-grad"  type="submit" name="loginauth" value="loginauth">Login</button>
         
              </div>
              </form>
            
       
      
     
  <script src="./src/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="./src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="./src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./src/assets/js/off-canvas.js"></script>
  <script src="./src/assets/js/hoverable-collapse.js"></script>
  <script src="./src/assets/js/template.js"></script>
  <script src="./src/assets/js/settings.js"></script>
  <script src="./src/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>