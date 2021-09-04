<?php 
session_start();


if(isset($_SESSION['email'], $_SESSION['user_image'])) {
$email = $_SESSION["email"];
$user_image = $_SESSION["user_image"];


}
else{
  header("location: ../account/logout.php");
}

?>


<?php

$conn = new mysqli("localhost", "root", "", "the_right_job");




$result=mysqli_query($conn,"SELECT * FROM company,job_post WHERE job_post.company_id=company.id");
//$result2=mysqli_query($conn,"SELECT * FROM company,job_post WHERE job_post.company_id=company.id");
$result3 = mysqli_query($conn,"SELECT * FROM job_post group by job_catagory order by COUNT(job_catagory) desc");
$result12=mysqli_query($conn,"SELECT * FROM post_reviews");

?>


  <?php
$conn = new mysqli("localhost", "root", "", "the_right_job");
$query = "SELECT COUNT( *) as Number
   FROM job_post";
$result16 = mysqli_query($conn,$query);
while ($row = $result16->fetch_assoc()) {
$rxx = $row["Number"];

}

$query = "SELECT COUNT( *) as Num
   FROM seeker_profile";
$result17 = mysqli_query($conn,$query);
while ($row = $result17->fetch_assoc()) {
$seeker = $row["Num"];

}

$query = "SELECT COUNT( *) as Numb
   FROM company";
$result18 = mysqli_query($conn,$query);
while ($row = $result18->fetch_assoc()) {
$com = $row["Numb"];

}

$query = "SELECT COUNT( *) as No
   FROM post_reviews";
$result19 = mysqli_query($conn,$query);
while ($row = $result19->fetch_assoc()) {
$rev = $row["No"];

}

?>


              


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="The Right Job" />

    <!-- title  -->
    <title>The Right Job</title>
    <link rel="shortcut icon" href="img/logos/logo.png">

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5bd5cf3f78.js" crossorigin="anonymous"></script>
     <link href="style.css" rel="stylesheet" />

     <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->

<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('9rf6ri8mzizg');
</script>



</head>

<body>

  

    <!-- start main-wrapper section -->
    <!-- <div class="main-wrapper"> -->

        <!-- start header section -->
        <header>
            <div class="navbar-default">
               

                <div class="container-fluid">
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
                                     
                                
                                          <li><a href="../home/post_review.php">Post a review</a></li>
                                         
                                        
                                        
                                        
                                       
                                          <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li> 
                                                                                            

       
                                        
                                    </ul>
                                    <!-- end menu area -->

   
    
    
               

   


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header section -->


               <span>
            <?php
 


                  if(isset($_GET['error']))
                   echo $_GET['error'];
   
 
                 ?>
              </span>

        <!-- start banner -->
        <section class="bg-img screen-height cover-background line-banner" data-overlay-dark="6" data-background="img/banner/bg2.jpg">

            <!-- start banner text -->
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-12 header-text display-table h-100 z-index-1 width-100">
                        <div class="display-table-cell vertical-align-middle text-center">

                             <p class="font-size18 xs-font-size16 text-white letter-spacing-1 margin-15px-bottom">logged in as <?php echo $email;?></p>

                           
                            <?php 

                            	echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
   									 

                            ?>
                            
                                       
                            
                            <h1 class="cd-headline slide">
                                Find Jobs, employment and career opportunities
                            </h1>
                        


                            <div class="form-bg padding-20px-tb margin-40px-top xs-margin-30px-top padding-25px-lr xs-padding-20px-all border-radius-4">
                                <form method="post" action="search/search.js">
                                    <div class="form-row align-items-center">
                                        <div class="col-md-9 my-1">
                                            <input type="text" name="search_text" id="search_text" placeholder="Search by Company Details" class="form-control" />
                                        </div>
                                       
                                      
                                        <div class="col-md-3">
                                            <button type="#" class="btn btn-lg btn-warning">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end banner text -->

        </section>
        <!-- end banner -->


            <div class="container">
           
          
            <br />
            <div id="result"></div>
        </div>
        <div style="clear:both"></div>

    <section class="bg-light">
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Top Hiring Companies</h3>
                </div>
            
            <div class="row">
            <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result3)) {
                    ?>
                <div class="col-lg-4 col-md-6 margin-30px-bottom">
                    <div class="card text-dark border-color-light-black h-100">
                    <div class="card-body padding-20px-tb padding-30px-lr">
                      
                                                   
                        
                        <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-1.png" alt="" />

                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray"><?php echo $row["job_catagory"]; $jc = $row["job_catagory"]; ?></a></h5>
                                       
                                         <?php
                           $conn = new mysqli("localhost", "root", "", "the_right_job");
                            $query = "SELECT COUNT(job_catagory) FROM job_post where `job_catagory` ='$jc'";
                            $result4 = mysqli_query($conn,$query);
                            while ($row = $result4->fetch_assoc()) {
                                $rx = $row["COUNT(job_catagory)"];
                                
                            }
                            ?>

                                        
                                        <a href="#" class="company-btn"><?php echo $rx;?> Open Positions</a>
                                    </div>
                                </div>
                    </div>
                </div>
                 </div>
                 <?php
                        $i++;
                        }
                        ?>
                 </div>
            </div>
        </section>

        <!-- start top company section -->


        <!-- start recent jobs section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Recent Job</h3>
                </div>

                <div class="row">

                        

                     
                    <div class="col-md-12"> 
                      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                         $jpost = $row['id'];
                           $company_id = $row['company_id'];
                           $job_description = $row['job_description'];
                                $job_type = $row['job_type'];
                                $salary = $row['salary'];
                                 $position = $row['position'];
                                 $vacancy = $row['vacancy'];
                                 $expectation = $row['expectation'];
                                 $job_location = $row['job_location'];
                                 $company_name = $row['company_name'];
                                  $deadline = $row['deadline'];

                                
                            echo "<div class='card'>
                                 

                       <a class='text-dark border-color-light-black margin-30px-bottom' href='../home/job-details.php?jobid=$jpost&cid=$company_id'>
                           <div class='card-body padding-20px-tb padding-30px-lr'>
                                <div class='row justify-content-sm-between align-items-sm-center'>
                                    <div class='col-md-6 xs-margin-10px-bottom'>
                                        <div class='d-block d-sm-flex align-items-center'>
                                            <div class='job-icon bg-light mobile-no-margin-right mobile-margin-20px-bottom margin-30px-right'>
                                                <img src='https://img.icons8.com/fluency/48/000000/new-job.png'/>
                                            </div>
                                           
                                            <div>


                                                <span class='text-secondary'>Position: {$position}</span>
                                            <br>Company name: {$company_name}

                                               <br>Salary: ৳{$salary}
                                             

                                            </div>


                                            
                                        </div>
                                        
                                    </div>


                              <div class=' col-md-3 text-secondary xs-margin-10px-bottom'>
                                        <span class='ti-location-pin margin-10px-right'></span><i class='fas fa-location-arrow'></i> {$job_location}
                                        <br><i class='fas fa-clock'></i> {$job_type}
                                           <br>Deadline: {$deadline}
                                        
                                    </div>
                                    
                                     <div class='col-md-3 col-xl-2 text-primary text-left text-md-right'>
                                        Read details →
                                    </div>
                            
                                </div>
                            </div>
                        </a>
                        </div>"
                        ;
                      }
                           
                                    ?>
                       
                      
                       
                        <div class="text-center margin-40px-top">
                            <a href="#" class="butn">Show more jobs</a>
                        </div>
                    
                </div>
            </div>
        </section>
        <!-- end recent jobs section -->

        <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">

                                  <?php
      $i=0;
      while($row = mysqli_fetch_array($result12)) {
      ?>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                               <?php echo $row["ambience"]; ?>
                            </p>
                        </div>
                        <h3 class="title"><?php echo $row["company_name"]; ?></h3>
                    
                        <span class="post"><i class="fas fa-star"></i><?php echo $row["rating"]; ?></span>
                    </div>
                       <?php
                $i++;
                }
                ?>


 
                 
            </div>
        </div>
    </div>
</div>


        <section class="bg-light2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 xs-margin-30px-bottom">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-package font-size24 text-theme-color"></span>
                            </div>

               
                            <h5 class="countup font-size30 no-margin-bottom"><?php echo $rxx;?></h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Live Jobs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 xs-margin-30px-bottom">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-user font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom"><?php echo $seeker;?></h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Candidate</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-files font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom"><?php echo $rev;?></h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Resume</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-medall-alt font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom"><?php echo $com;?></h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       

     

    </div>


  

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- all js include end -->

</body>

 <script>
  $(document).ready(function(){
    load_data();
    function load_data(query)
    {
      $.ajax({
        url:"../home/fetch.php",
        method:"post",
        data:{query:query},
        success:function(data)
        {
          $('#result').html(data);
        }
      });
    }

    $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
        load_data(search);
      }
      else
      {
        load_data();
      }
    });
  });
  </script>



</html>