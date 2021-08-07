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

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

  

    <!-- start main-wrapper section -->
    <!-- <div class="main-wrapper"> -->

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
                                    </ul>
                                    <!-- end menu area -->

                                   
                                

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header section -->

        <!-- start banner -->
        <section class="bg-img screen-height cover-background line-banner" data-overlay-dark="6" data-background="img/banner/bg2.jpg">

            <!-- start banner text -->
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-12 header-text display-table h-100 z-index-1 width-100">
                        <div class="display-table-cell vertical-align-middle text-center">

                             <p class="font-size18 xs-font-size16 text-white letter-spacing-1 margin-15px-bottom">logged in as <?php echo $email;?></p>
                            
                                       
                            
                            <h1 class="cd-headline slide">
                                Find Jobs, employment and career opportunities
                            </h1>
                        


                            <div class="form-bg padding-20px-tb margin-40px-top xs-margin-30px-top padding-25px-lr xs-padding-20px-all border-radius-4">
                                <form method="post" action="#!">
                                    <div class="form-row align-items-center">
                                        <div class="col-md-3 my-1">
                                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Keyword">
                                        </div>
                                        <div class="col-md-3 my-1">
                                            <input type="text" class="form-control" id="inlineFormInputName1" placeholder="Location">
                                        </div>
                                        <div class="col-md-3 my-1">
                                            <select class="form-control" id="exampleFormControlSelect2">
                                                <option selected>All Categories</option>
                                                <option value="1">HealthCare</option>
                                                <option value="2">Education</option>
                                                <option value="3">Reataurant</option>
                                                <option value="4">Design &amp; Art</option>
                                                <option value="5">Finance</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 my-1">
                                            <button type="submit" class="btn btn-lg btn-warning">Search</button>
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

        <!-- start featured categories Section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Top Job Categories</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 sm-margin-30px-bottom">
                        <div class="h-100">
                            <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4 h-100" data-background="img/content/01.jpg">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">HealthCare</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">120 jobs</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row margin-30px-bottom">
                            <div class="col-md-4 xs-margin-30px-bottom">
                                <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4" data-background="img/content/02.jpg">
                                    <div class="mt-auto position-relative z-index-9">
                                        <h5 class="text-white">Education</h5>
                                        <div class="position-relative z-index-9 text-white opacity6">12 jobs</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 xs-margin-30px-bottom">
                                <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4" data-background="img/content/03.jpg">
                                    <div class="mt-auto position-relative z-index-9">
                                        <h5 class="text-white">Reataurant</h5>
                                        <div class="position-relative z-index-9 text-white opacity6">20 jobs</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4" data-background="img/content/04.jpg">
                                    <div class="mt-auto position-relative z-index-9">
                                        <h5 class="text-white">Construction</h5>
                                        <div class="position-relative z-index-9 text-white opacity6">94 jobs</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 xs-margin-30px-bottom">
                                <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4" data-background="img/content/05.jpg">
                                    <div class="mt-auto position-relative z-index-9">
                                        <h5 class="text-white">Design &amp; Art</h5>
                                        <div class="position-relative z-index-9 text-white opacity6">231 jobs</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-5">
                                <a href="listing-details.html" class="card bg-img box-hover cover-background border-0 p-4" data-background="img/content/06.jpg">
                                    <div class="mt-auto position-relative z-index-9">
                                        <h5 class="text-white">Finance</h5>
                                        <div class="position-relative z-index-9 text-white opacity6">45 jobs</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end featured categories Section -->

        <!-- start top company section -->
        <section class="bg-light">
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Top Hiring Companies</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 margin-30px-bottom">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-1.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">Accuratna</a></h5>
                                        <p class="no-margin-bottom">Makati City, Philippines</p>
                                        <a href="#" class="company-btn">2 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 margin-30px-bottom">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-2.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">Creative Tech.</a></h5>
                                        <p class="no-margin-bottom">Victoria, Canada</p>
                                        <a href="#" class="company-btn">4 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 margin-30px-bottom">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-3.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">Sculptena</a></h5>
                                        <p class="no-margin-bottom">London, United Kingdom</p>
                                        <a href="#" class="company-btn">8 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-4.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">JAT Infra Pvt Ltd</a></h5>
                                        <p class="no-margin-bottom">Putrajaya, Malaysia</p>
                                        <a href="#" class="company-btn">1 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 xs-margin-30px-bottom">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-5.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">Relives Healthcare</a></h5>
                                        <p class="no-margin-bottom">Utrecht, Netherlands</p>
                                        <a href="#" class="company-btn">5 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card text-dark border-color-light-black h-100">
                            <div class="card-body padding-20px-tb padding-30px-lr">
                                <div class="d-flex align-items-center">
                                    <div class="margin-30px-right top-company">
                                        <img src="img/content/job-6.png" alt="" />
                                    </div>
                                    <div>
                                        <h5 class="no-margin-bottom font-size20"><a href="#" class="text-extra-dark-gray">VIAP Academy</a></h5>
                                        <p class="no-margin-bottom">Sydney, Australia</p>
                                        <a href="#" class="company-btn">6 Open Positions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end top company section -->

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
                                                <img src='img/content/job-1.png' alt='' />
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
                       
                      
                       
                        <div class="text-center margin-40px-top">
                            <a href="#" class="butn">Show more jobs</a>
                        </div>
                    
                </div>
            </div>
        </section>
        <!-- end recent jobs section -->

        <!-- start counter section -->
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 xs-margin-30px-bottom">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-package font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom">12376</h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Live Jobs</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 xs-margin-30px-bottom">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-user font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom">89562</h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Candidate</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-files font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom">28166</h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Resume</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="text-center">
                            <div class="margin-20px-bottom">
                                <span class="ti-medall-alt font-size24 text-theme-color"></span>
                            </div>
                            <h5 class="countup font-size30 no-margin-bottom">1366</h5>
                            <p class="no-margin-bottom text-extra-dark-gray font-weight-600">Companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end counter section -->

        <!-- start testimonial section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">Testimonials</h3>
                </div>
                <div class="owl-carousel owl-theme" id="testmonials-carousel">

                    <div class="border-all padding-30px-all h-100 margin-10px-all">
                        <div class="d-flex align-items-center margin-20px-bottom testmonial-single">
                            <div class="margin-20px-right width-55px">
                                <img src="img/testmonials/t-1.jpg" class="rounded-circle" alt="" />
                            </div>
                            <div>
                                <h6 class="font-size16 no-margin-bottom">Joseph Marine</h6>
                                <span>Jobseeker</span>
                            </div>
                        </div>
                        <p class="no-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                    <div class="border-all padding-30px-all h-100 margin-10px-all">
                        <div class="d-flex align-items-center margin-20px-bottom testmonial-single">
                            <div class="margin-20px-right width-55px">
                                <img src="img/testmonials/t-2.jpg" class="rounded-circle" alt="" />
                            </div>
                            <div>
                                <h6 class="font-size16 no-margin-bottom">Lillis Toyadi</h6>
                                <span>Jobseeker</span>
                            </div>
                        </div>
                        <p class="no-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                    <div class="border-all padding-30px-all h-100 margin-10px-all">
                        <div class="d-flex align-items-center margin-20px-bottom testmonial-single">
                            <div class="margin-20px-right width-55px">
                                <img src="img/testmonials/t-3.jpg" class="rounded-circle" alt="" />
                            </div>
                            <div>
                                <h6 class="font-size16 no-margin-bottom">Eman Isaliya</h6>
                                <span>Jobseeker</span>
                            </div>
                        </div>
                        <p class="no-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                    <div class="border-all padding-30px-all h-100 margin-10px-all">
                        <div class="d-flex align-items-center margin-20px-bottom testmonial-single">
                            <div class="margin-20px-right width-55px">
                                <img src="img/testmonials/t-4.jpg" class="rounded-circle" alt="" />
                            </div>
                            <div>
                                <h6 class="font-size16 no-margin-bottom">Minali Wosaz</h6>
                                <span>Jobseeker</span>
                            </div>
                        </div>
                        <p class="no-margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- end testimonial section -->

       

        <!-- start footer section -->
        <footer>
            <div class="footer-bar xs-padding-15px-tb">
                <div class="container">
                    <div class="float-right xs-width-100 text-center xs-margin-5px-bottom">
                        <ul class="social-icon-style no-margin">
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-left xs-width-100 text-center">
                        <p class="text-medium-gray font-weight-600 margin-5px-top xs-no-margin-top">&copy; 2020 Job Board is Powered by Chitrakoot Web</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer section -->

    </div>
    <!-- end main-wrapper section -->

    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- all js include end -->

</body>

</html>