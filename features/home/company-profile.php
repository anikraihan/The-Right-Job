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
                            $query = "select id from company where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }
                            ?>



<?php

$conn = new mysqli("localhost", "root", "", "the_right_job");




$result=mysqli_query($conn,"SELECT * FROM job_post_activity where company_id = $id");
$result2=mysqli_query($conn,"SELECT * FROM job_post_activity,job_post WHERE job_post_activity.job_post_id = job_post.id");
$result7=mysqli_query($conn,"SELECT * FROM company where id = $id");

?>



<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="The Right Job" />

    <!-- title  -->
    <title>Company dashboard</title>

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />

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

                                   
                                        <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="home.php">Home</a></li>
                                    
                                        
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
    
    <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">
          
            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">


                          <?php
      $i=0;
      while($row = mysqli_fetch_array($result7)) {
        $cid = $row['id'];
          $comapny_name = $row['company_name'];
          $email = $row['email'];
              $profile_description = $row['profile_description'];
                $address = $row['address'];
               
                              

               echo     
                        '<h3>'.$row['company_name'].'</h3>


                       
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> '.$row['address'].'</h3>
                             
                     ' ;}

                        ?>
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/company-cv.svg">

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

            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Recent Job Applications</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result) AND $row2 = mysqli_fetch_array($result2)) {
                         $id = $row2['id'];
                          $company_id = $row2['company_id'];
                          $cname = $row2['cname'];
                          $job_catagory = $row2['job_catagory'];
                          $job_description = $row2['job_description'];
                          $job_type = $row2['job_type'];
                          $salary = $row2['salary'];
                          $position = $row2['position'];
                          $vacancy = $row2['vacancy'];
                          $job_location = $row2['job_location'];
                          $user_id = $row['user_id'];
                           $app_id = $row['id'];


                                

                                 

                       echo  "<a class='card text-dark border-color-light-black margin-30px-bottom' href='applicants-profile.php?user_id=$user_id&jobid=$id&app_id=$app_id'>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>position :{$position}</span>
                                            <br>Company name: {$cname}

                                               <br>Salary: ৳{$salary}

                                            </div>


                                            
                                        </div>
                                    </div>
                                    <div class='col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin margin-10px-right'></span>Job location: {$job_location}
                                        <br>Application id: {$user_id}
                                    </div>
                                    <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                        View candidate details →
                                    </div>
                                </div>
                            </div>
                        </a>"
                        ;
                      }
                           
                                    ?>
                       
                      
                       
                        
                </div>
            </div>
        </section>
  
       
            
           
       
            
           

</body>

    <!-- all js include start -->

    <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>


</html>