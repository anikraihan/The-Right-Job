<?php 
session_start();
$jobid = $_GET['jobid'];
$cid = $_GET['cid'];





   

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


 


$result8=mysqli_query($conn,"SELECT * FROM job_post where id = $jobid");
$result9=mysqli_query($conn,"SELECT * FROM company where id = $cid");



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job details</title>
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

                                           <?php

                                        if(isset($_SESSION['utype']))
                                        {
                                       echo '<li><a href="home.php">Home</a></li>
                                     
                                
                                        <li><a href="profile.php">Profile</a></li>
                                      
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        <li><a href="post_job.php">Post a Job</a></li>
                                        <li><a href="post_review.php">Post a review</a></li>
                                         <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>';
                                        }
                                       else
                                       {    echo '<li><a href="../account/home.php">Home</a></li>
                                                <li><a href="post_job.php">Post a Job</a></li>

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
                        <h3>Job details</h3>
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ jobs listed</h3>
                             <?php echo $jobid;?>
                    
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
                    while($row = mysqli_fetch_array($result8) AND $row2 = mysqli_fetch_array($result9)) {
                         $jpost = $row['id'];
                           $company_id = $row['company_id'];
                           $job_description = $row['job_description'];
                                $job_type = $row['job_type'];
                                $salary = $row['salary'];
                                 $position = $row['position'];
                                 $vacancy = $row['vacancy'];
                                 $expectation = $row['expectation'];
                                 $job_location = $row['job_location'];
                                 $company_name = $row2['company_name'];
                               
                                 $email = $row2['email'];
                                

                              

               echo     '
                    </div>
                    <div class="col-md-6 mb-n5">
                        <div class="profile-head">
                                    <h5>
                                        '.$row['position'].'
                                    </h5>
                                  
                                  
                                   
                          
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Job location</p>
                          '.$row['job_location'].'
                            <p>salary</p>
                          '.$row['salary'].'
                          <p>Job type</p>
                          '.$row['job_type'].'
                        </div>
                    </div>
                    <div class="col-md-8 mt-n5">
                        <div class="tab-content profile-tab" id="myTabContent">
                           
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Company Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['company_id'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row2['company_name'].' </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row2['email'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['salary'].'</p>
                                            </div>
                                        </div>
                                      
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>vacancy</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['vacancy'].'</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Job description</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['job_description'].'</p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Job expectation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['expectation'].'</p>
                                            </div>
                                        </div>
                            </div>
                         

                       
                   
                </div>';
                  echo "<div class='col-md-8'>

                                 <a class='btn btn-primary btn-block'  href='applied-job_method.php?jobpost=$jpost&com=$company_id'>Apply for the job</a>
                                 </div>"
                            

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