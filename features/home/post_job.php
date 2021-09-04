<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="company") {
   
    
}
else{
         $error = '<div class="alert alert-danger">Log into company profile to post a job</div>';
    session_destroy();
   
    header("location: ../account/company/company_login.php?error=$error");
    }


   

?>
 <?php
                           $conn = new mysqli("localhost", "root", "", "the_right_job");
                            $query = "select * from company where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);

                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                 $company_name = $row['company_name']; 
                                
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
                                     
                                        <li><a href="company-profile.php">Company dashboard</a></li>
                                        <li><a href="post_job.php">Post a Job</a></li>
                                       
                                        <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>
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
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/job.svg">

            </div>

            </div>
        </div>
          </div> 


  
         <div class="review_details_area">
        <div class="container">
          <div class="review_form white-bg">
  <img class="wave" src="img/type.svg">
          
                        <h4>Apply for the job</h4>
                        <form method="post" name="regform"  class="register-form" id="register-form"  action="post_job-method.php" >
                            <div class="row">
                                
                                <div class="col-md-4">
                   
									<select class="form-control" name="job_catagory" placeholder="Job Category">
                                <option>Developer</option>
                                <option>HR</option>
                                <option>Marketing</option>
                                <option>Finance</option>
                                <option>Intern</option>
                                <option>Sales executive</option>
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
<div class="col-md-6">
                                 <div class="form-group"> 
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="deadline" placeholder="MM/DD/YYY" type="text"/>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="deadline"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</html>