<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="admin") {
   
    
}
else{
        header("location: ../account/logout.php");
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
    <title>Create a Job post</title>

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />
    
 

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
                                     <li><a href="../account/logout.php">Logout</a></li>
                                
                                        
                                      
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        <li><a href="post_job.php">Post a job</a></li>
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
                        <h3>Post A Job</h3>
                        <?php echo $id;?>
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ Jobs listed</h3>
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/bg.svg">

            </div>

            </div>
        </div>
          </div> 


  
         <div class="review_details_area">
        <div class="container">
          <div class="review_form white-bg">
  <img class="wave" src="img/goals.svg">
          
                        <h4>Apply for the job</h4>
                        <form method="post" name="regform"  class="register-form" id="register-form"  action="post_job-method.php" >
                            <div class="row">
                                
                                <div class="col-md-4">
                   
									<select class="form-control" name="job_catagory" placeholder="Job Category">
                                <option>Developer</option>
                                <option>HR</option>
                                <option>Marketing</option>
                                <option>Finance</option>
                                <option>Ecommerce</option>
                                <option>Engineer</option>
                                <option>Other</option>
                            </select>
									
                                </div>
								
								<div class="col-md-4">
                   
									<select class="form-control" name="job_type" placeholder="Job type">
                                <option>Full Time</option>
                                <option>Part Time</option>
                               
                            </select>
									
                                </div>

                                     <div class="col-md-11">
                                <div class="form-group">
                                        <textarea class="form-control" name="job_description" id="" cols="30" rows="10" placeholder="job_description"></textarea>
                                    </div>

                                </div>
								
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <input class="form-control" type="text" name="position" placeholder="position" >
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                                            <input class="form-control" type="number" name="salary" placeholder="Salary" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                           <input class="form-control" type="number" name="vacancy" placeholder="vacancy" >
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="job_location" placeholder="job_location">
                                    </div>
                                </div>
                              

                                    <div class="col-md-11">
                                <div class="form-group">
                                        <textarea class="form-control" name="expectation" id="" cols="30" rows="10" placeholder="expectation"></textarea>
                                    </div>

                                </div>

                                 


                                
                                <div class="col-md-12">
                                      <input type="submit" name="submit" id="signup" class="btn btn-primary btn-lg btn-block" value="Create new job"/>
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