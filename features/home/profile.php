<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="company") {
    $error = '<div class="alert alert-danger">Profile dashboard is only for jobseeker</div>';
    session_destroy();
   
    header("location: ../account/jobseeker/jobseeker_login.php?error=$error");

}
else{

        
    }


   

?>


<?php
                           $conn = new mysqli("localhost", "root", "", "the_right_job");
                            $query = "select id from user_account where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }
                            ?>




<?php

$conn = new mysqli("localhost", "root", "", "the_right_job");




$result7=mysqli_query($conn,"SELECT * FROM seeker_profile where user_id = $id");



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile dashboard</title>
      <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

   

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


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
                                     
                                
                                        <li><a href="profile.php">Profile</a></li>
                                      
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        <li><a href="post_job.php">Post a Job</a></li>
                                        <li><a href="post_review.php">Post a review</a></li>
                                       
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
             <span>
            <?php
 


                  if(isset($_GET['error']))
                   echo $_GET['error'];
   
 
                 ?>
              </span>
        <!-- end header section -->


            <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">
          
            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">
                        <h3>Profile dashboard</h3>
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ profile listed</h3>
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/profile.svg">

            </div>

            </div>
        </div>
          </div> 



<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">

	<div class="container emp-profile">
            <form method="post">
                <div class="row">

                         <?php
      $i=0;
      while($row = mysqli_fetch_array($result7)) {
        $user_id = $row['user_id'];
          $first_name = $row['first_name'];
          $last_name = $row['last_name'];
              $age = $row['age'];
               $curent_job = $row['curent_job'];
               $school = $row['school'];
                $collage = $row['collage'];
                $uni_name = $row['uni_name'];
                $ssc_gpa = $row['ssc_gpa'];
                        $hsc_gpa = $row['hsc_gpa'];
                                $uni_cgpa = $row['uni_cgpa'];
                              

               echo     '<div class="col-md-4">
                        <div class="profile-img">
                            <img class="img d-flex justify-content-end" src="data:image/png;base64,'.base64_encode($row['picFile']).'" alt="Profile image">
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-n5">
                        <div class="profile-head">
                                    <h5>
                                        '.$row['first_name'].'
                                    </h5>
                                  
                                  
                                    <p class="proile-rating">AGE : <span>'.$row['age'].'</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       
                        <a href="update_profile2.php" class="profile-edit-btn">Edit profile</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Schooll name</p>
                          '.$row['school'].'
                            <p>Collage name</p>
                          '.$row['collage'].'
                          <p>University name</p>
                          '.$row['uni_name'].'
                        </div>
                    </div>
                    <div class="col-md-8 mt-n5">
                        <div class="tab-content profile-tab" id="myTabContent">
                           
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['user_id'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['first_name'].' '.$row['last_name'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['email'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>SSC GPA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['ssc_gpa'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>HSC GPA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['hsc_gpa'].'</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Undergrad Cgpa</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['uni_cgpa'].'</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Current Job</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['curent_job'].'</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Previous Job</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['previous'].'</p>
                                            </div>
                                        </div>
                            </div>
                       
                   
                </div>'
                      ;
          }

                        ?>
                         </div>
            </form>           
        </div>

              </div>
                </div>
            </div>
        </section>
</body>

 <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>
</html>