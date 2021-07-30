<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Account as a Job seeker</title>


      <link rel="stylesheet" type="text/css" href="../css/reg.css">
      

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
    <script src="https://kit.fontawesome.com/5bd5cf3f78.js" crossorigin="anonymous"></script>

</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title p-0 mb-2">Sign up</h2>
                        <small id="emailHelp" class="form-text text-muted mb-5">We'll never share your email with anyone else.</small>

                        <form method="post" name="regform"  class="register-form" id="register-form" action="createacc_jobseeker.php">
  <div class="form-group">
  
   
      

    
       <div class="form-row">

    <div class="col-md-6 mb-3 ">
      <label for="validationCustom01" ><i class="fa fa-user" aria-hidden="true"></i>  First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="first_name"  required>
     
    </div>
    <div class="col-md-6  mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Last name"  required>
      
    </div>
</div>
     
    
    
    
 

    <label for="exampleInputEmail1"><i class="fa fa-envelope" aria-hidden="true"></i></i>  Email address</label>
    <input type="email" class="form-control mb-3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a valid email" required>
    
   

   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">+880</span>
  </div>
  <input type="number" min=0 class="form-control" name="profile_description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contact_number" required>
</div>
  
    

    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="others" >
          <label class="form-check-label" for="gridRadios3">
            Others
          </label>
        </div>
    </div>
</div>

    
    
        <div class="form-row mb-3">
        <div class="col-sm-6">
            <label for="exampleInputEmail1"><i class="fa fa-key" aria-hidden="true"></i>  Password</label>
            <input type="password" class="form-control" name="password"
                data-bv-identical="true"
                data-bv-identical-field="confirmPassword"
                data-bv-identical-message="The password and its confirm are not the same"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                 required/>
        </div>
    

    
        
        <div class="col-sm-6 ">
            <label for="exampleInputEmail1">Retype password</label>
            <input type="password" class="form-control" name="confirm_password"
                data-bv-identical="true"
                data-bv-identical-field="password"
                data-bv-identical-message="The password and its confirm are not the same" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required/>
        </div>
    </div>

    
   
  
   
    <div class="form-check p-0">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label p-0" for="invalidCheck">
        <small id="emailHelp" class="form-text text-muted ">
        Agree to terms and conditions
    </small>
      </label>
      <div class="invalid-feedback" >
        You must agree before submitting.
      </div>
    </div>
  
  
  

  <input type="submit" name="submit" id="signup" class="btn btn-primary btn-lg btn-block" value="Register"/>

</div>

</form>


  
  
 <?php
 


if(isset($_GET['error']))
   echo $_GET['error'];
  

?>
                    </div>

                    <div class="signup-image">
                        
                            <div class="logo">
                                 <img src="../assets/images/logo.png" alt="sing up image">
                            </div>
                        

                        <figure><img src="../assets/images/create ac.svg" alt="sing up image"></figure>
                        
                         <a class="form-text text-muted" href="jobseeker_login.php">  <i class="fas fa-user"></i>  I am already a member </a> 
                    </div>
                </div>
            </div>
        </section>




    </div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script






</body>
</html>
