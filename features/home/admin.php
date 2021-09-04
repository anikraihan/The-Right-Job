<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="admin") {
   
   
}
else{
         $error = '<div class="alert alert-danger">Access is only available for admin</div>';
    session_destroy();
   


    header("location: ../account/jobseeker/jobseeker_login.php?error=$error");

    }


   

?>


<?php

$conn = new mysqli("localhost", "root", "", "the_right_job");




$result=mysqli_query($conn,"SELECT * FROM company");
$result2=mysqli_query($conn,"SELECT * FROM user_account where admin='jobseeker'");
$result3=mysqli_query($conn,"SELECT * FROM job_post_activity,job_post where job_post_activity.job_post_id=job_post.id");

$result4=mysqli_query($conn,"SELECT id FROM job_post_activity");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>

 

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
                        <h3>Admin dashboard</h3>
                      
      
                    
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/admin.svg">

            </div>

            </div>
        </div>
          </div> 


  

        
 <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">All registered Users</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result2)) {
                         $id = $row['id'];
                         $fname = $row['first_name'];
                           $lname = $row['last_name'];
                             $email = $row['email'];
                               $password = $row['password'];
                                 $gender = $row['gender'];
                                   $contact_number = $row['contact_number'];
                          

                                

                                 

                       echo  "<a class='card text-dark border-color-light-black margin-30px-bottom' href=#>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>User id: {$id}</span>
                                            <br>First name: {$fname}

                                               <br>Last name: {$lname}

                                            </div>


                                            
                                        </div>
                                    </div>
                                    <div class='col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin'></span>Email: {$email}
                                        <br>Gender: {$gender}
                                       <br>Contact number: {$contact_number}
                                    </div>
                                    <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                        <form action='deleteuser.php?id={$id}' method='post'>
                                
                                        <input  class='btn btn-danger' type='submit' name='submit' value='Delete'> 
                                    </form>
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


        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">All registered Companies</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result) ) {
                         $id = $row['id'];
                         $cname = $row['company_name'];
                          
                             $email = $row['email'];
                               $password = $row['password'];
                                
                                   $address = $row['address'];
                          $profile_description = $row['profile_description'];

                                

                                 

                       echo  "<a class='card text-dark border-color-light-black margin-30px-bottom' href=#>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>Company id: {$id}</span>

                                            <br>Company name: {$cname}

                                               <br>Company description: {$profile_descript

                                            </div>


                                            
                                        </div>
                                    </div>
                                    <div class='col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin'></span>Email: {$email}
                                        <br>Address: {$address}
                                      
                                    </div>
                                    <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                           <form action='deletecompany.php?id={$id}' method='post'>
                                
                                        <input  class='btn btn-danger' type='submit' name='submit' value='Delete'> 
                                    </form>

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

            <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">All job applications</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result3) AND ($row2 = mysqli_fetch_array($result4))
                ) {
                         $user_id= $row['user_id'];
                         $cname = $row['cname'];
                          
                             $salary = $row['salary'];
                               $job_type = $row['job_type'];
                               $action_name = $row['action_name'];
                                
                                   $deadline = $row['deadline'];
                          $position = $row['position'];
                           $id = $row2['id'];

                                

                                 

                       echo  "<a class='card text-dark border-color-light-black margin-30px-bottom' href=#>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>User id: {$user_id}</span>

                                            <br>Company name: {$cname}

                                               <br>Position: {$position}

 

                                            </div>


                                            
                                        </div>
                                    </div>
                                    <div class='col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin'></span> Salary: {$salary} taka
                                        <br>Status: {$action_name}
                                         <br>Deadline: {$deadline}
                                         <br>Job type: {$job_type}
                                      
                                    </div>
                                    <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                           <form action='deletepost.php?id={$id}' method='post'>
                                
                                        <input  class='btn btn-danger' type='submit' name='submit' value='Delete'> 
                                    </form>

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