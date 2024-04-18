
<?php 
	include './Backend/connection.php';

$message = '';

	if(isset($_POST['login'])) {
    $userName = $_POST['user_name'];
    $password = $_POST['password'];

    $encryptedPassword = md5($password);

    $query = "select `id`, `display_name`, `user_name`, 
`profile_picture` from `users` 
where `user_name` = '$userName' and 
`password` = '$password'";

try {
  $stmtLogin = $con->prepare($query);
  $stmtLogin->execute();

  $count = $stmtLogin->rowCount();
  if($count == 1) {
    $row = $stmtLogin->fetch(PDO::FETCH_ASSOC);

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['display_name'] = $row['display_name'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['profile_picture'] = $row['profile_picture'];

    header("location:home.php");
    exit;

  } else {
    $message = 'Incorrect username or password.';
  }
}  catch(PDOException $ex) {
      echo $ex->getTraceAsString();
      echo $ex->getMessage();
      exit;
    }
  

		
	}
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
<head>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
     <link rel="stylesheet" href="css/login_styles.css">
</head>

<body>
    <div class="container">
        <div class="angular-shape bottom-left"></div>
        <div class="angular-shape top-right"></div>
        <div class="logo-container">
            <img src="https://www.talavera.gov.ph/wp-content/uploads/talavera-11.jpg" alt="Logo"> <!-- Replace "logo_image.jpg" with your actual image path -->
            <div class="logo-text">TALAVERA RURAL HEALTH UNIT I</div>
        </div>
        <div style="height: 70%; border-left: 4px solid #ddd; margin: 0 0 0 2in;"></div>
    
    
       
           
            <form method="POST" class="login-form">
           
            <h2>WELCOME</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
              </svg>
            <p>Login to continue</p>
            <input id="user_name" type="text" placeholder="Username" name='user_name'>
            <input name="password" id="password" type="password" placeholder="Password">
            <p style="font-size: smaller; margin-left: 50px; margin-top: 2px;">Forgot password?</p>
            <button  class="btn-grad" name="login" >Login</button>
        
        
        <div class="row">
          <div class="col-md-12">
            <p class="text-danger">
              <?php 
              if($message != '') {
                echo $message;
              }
              ?>
            </p>
        </div>

          </div>
      
      </form>

    </div>
</body>

</html>
