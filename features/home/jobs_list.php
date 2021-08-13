<?php 
session_start();


if(isset($_SESSION['email'])) {
$email = $_SESSION["email"];
}
else{
    header("location: login.php");
}

?>


<?php

$conn = new mysqli("localhost", "root", "", "the_right_job");




$result=mysqli_query($conn,"SELECT * FROM job_post");
$result2=mysqli_query($conn,"SELECT * FROM company,job_post WHERE job_post.company_id=company.id");


?>



<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="The Right Job" />

    <!-- title  -->
    <title>All jobs</title>

 

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
    
    <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">
          
            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">
                        <h3>Give a review</h3>
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ jobs listed</h3>
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/review.svg">

            </div>

            </div>
        </div>
          </div> 
   
 <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Recent Job</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result) AND $row2 = mysqli_fetch_array($result2)) {
                         $id = $row['id'];
                           $company_id = $row['company_id'];
                           $job_description = $row['job_description'];
                                $job_type = $row['job_type'];
                                $salary = $row['salary'];
                                 $position = $row['position'];
                                 $vacancy = $row['vacancy'];
                                 $expectation = $row['expectation'];
                                 $job_location = $row['job_location'];
                                 $company_name = $row2['company_name'];
                                

                                 

                       echo  "<a class='card text-dark border-color-light-black margin-30px-bottom' href='listing-details.html'>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>{$position}</span>
                                            <br> {$company_name}

                                               <br> ৳{$salary}

                                            </div>


                                            
                                        </div>
                                    </div>
                                    <div class='col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin margin-10px-right'></span>{$job_location}
                                        <br> {$job_type}
                                    </div>
                                    <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                        Apply now →
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