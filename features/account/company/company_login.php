<?php 
include('company_loginValidation.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
//after successful login will be redirect to following page
if (isset($_SESSION['email'])) {
   $_SESSION["company_name"] = $company_name;
  header("location: ../loginsuccess.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Company</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../assets/images/company.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="../assets/images/logo.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action ="company_loginValidation.php" method="post" id="login-form">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>

                                  <span class="captcha">
                                              

    <?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#%';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}   

$captcha= generate_string($permitted_chars, 5);
echo $captcha;   

 
   session_regenerate_id();
   $_SESSION['captcha']=$captcha;
  
?>         


              </span>
         


              <div class="form-group mb-4">
                    <label for="captcha" class="sr-only">Captcha</label>
                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="***********">
                  </div>   
                                      

                  
                  <input name="signin" id="signin" class="btn btn-block login-btn mb-4" type="submit" value="Log in"/>
                </form>
             <span>
            <?php
 


                  if(isset($_GET['error']))
                   echo $_GET['error'];
   
 
                 ?>

              </span>

                <a href="../forgot.php" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
                <p class="login-card-footer-text">Login to Job-seeker <a href="../jobseeker/jobseeker_login.php" class="text-reset">Profile</a></p>
                <nav class="login-card-footer-nav">
                 
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
