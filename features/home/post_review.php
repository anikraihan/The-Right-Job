<?php 
session_start();


$admin="";
$email = $_SESSION["email"];

if(isset($_SESSION['utype']))


$admin = $_SESSION["utype"];


if ($admin=="company") {
    $error = '<div class="alert alert-danger">Log into jobseeker profile for posting review.</div>';
    session_destroy();
   
    header("location: ../account/jobseeker/jobseeker_login.php?error=$error");

}
else{

        
    }



   

?>
 <?php
                           $conn = new mysqli("localhost", "root", "", "the_right_job");
                            $query = "select id from company where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }
                            ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a review post</title>

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

</head>
<body>

        <!-- start header section -->
        <header>
            <div class="navbar-default">
               

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="menu_area">
                                <nav class="navbar fixed-center navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header">
                                        <!-- start logo -->
                                        <a href="home.php" class="navbar-brand width-200px sm-width-180px xs-width-150px"><img id="logo" src="img/logos/logo.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">

                                        <li><a href="home.php">Home</a></li>
                                      
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        <li><a href="post_job.php">Post a Job</a></li>
                                        <li><a href="post_review.php">Post a review</a></li>
                                       
                                            <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>


                                            <?php

                                        if(isset($_SESSION['utype']))
                                        {

                                        echo '<li><a href="home.php">Home</a></li>
                                         <li><a href="profile.php">Dashboard</a></li>
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        

                                        <li><a href="post_review.php">Post a review</a></li>
                                         <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>';

                                    }else
                                    {
                                        echo '<li><a href="../account/home.php">Home</a></li>
                                          <li><a href="post_review.php">Post a review</a></li>

                                        <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>';
                                    }



                                    ?>
                                     

                                    </ul>
                                    <!-- end menu area -->

                                   
                                

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
  
 
       <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">
          
            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">
                        <h3>Give a review</h3>
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ reviews listed</h3>
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/review.svg">

            </div>

            </div>
        </div>
          </div> 


  
         <div class="review_details_area">
        <div class="container">
          <div class="review_form white-bg">
  <img class="wave" src="img/type.svg">
          
                        <h4>Write your review</h4>
                        <form method="post" name="regform"  class="register-form" id="register-form"  action="post_review-method.php" >
                            <div class="row">
                                
                             
                               <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" ><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
                                            <input class="form-control" type="text" name="first_name" placeholder="first name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" > Last Name</label>
                                            <input class="form-control" type="text" name="last_name" placeholder="last name" >
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" ><i class="fa fa-building" aria-hidden="true"></i>  Company Name</label>
                                            <input class="form-control" type="text" name="company_name" placeholder="company name" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" ><i class="fa fa-address-card" aria-hidden="true"></i> Post</label>
                                            <input class="form-control" type="text" name="post" placeholder="post" >
                                    </div>
                                </div>
                               
                                
                                     <div class="col-md-12">
                                <div class="form-group">
                                     <label for="validationCustom01" >  Decribe your work ambience</label>
                                        <textarea class="form-control" name="ambience" id="" cols="30" rows="10" placeholder="ambience"></textarea>
                                    </div>

                                </div>
                                   <div class="col-md-4">
                                    <label for="validationCustom01" ><i class="fa fa-star" aria-hidden="true"></i>  Rating</label>
                   
                                    <select class="form-control" name="rating" placeholder="rating">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                               
                            </select>
                                    
                                </div>
                                
                               
                                 


                                
                                <div class="col-md-12">
                                      <input type="submit" name="submit" id="signup" class="btn btn-dark mt-4" value="Save your review"/>
                                </div>

                            </div>

                        </form>

</div>

                    </div>

        </div>
      </div>
    </div>

  </body>

   


 
  <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>
</html>