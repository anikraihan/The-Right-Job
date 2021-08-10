
<?php

include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM review");

$result2 = mysqli_query($conn,"SELECT * FROM feedback");

$result3 = mysqli_query($conn,"SELECT * FROM login");

session_start();
$email = $_SESSION["email"];
$admin = $_SESSION["utype"];


if ($admin=="admin") {
   
	
}
else{
		header("location: logout.php");
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>

        <!-- CSS here -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <link rel="stylesheet" href="css/style.css">
 

</head>
<body>
      <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                   
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#">home</a></li>
                                            <li><a href="browse_reviews.php">Browse Reviews</a></li>
                                           <li><a href="policy.php">privacy & policy</a></li>
                                           <li><a href="viewmessage.php">View Message</a></li>
                                          
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="logout.php">Log out</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="post_review.php">Post a Review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
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
                        
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ Reviews listed</h3>
                            <h1 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> 100+ Users registered</h1>
                             
                    
                    </div>
                </div>

            
            </div>
        </div>
          </div> 


  <div class="container-fluid">
    
        <div class="job_listing_area p-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Users Listing</h3>
                    </div>
                </div>
             
            </div>
            <div class="job_lists">
                <div class="row">
				
                   <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result3)) {
                    ?>
					
					  <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                            
                                    <img src="img/person.png" alt="">
                             
                                <div class="jobs_conetent">
                             <h4><?php echo $row["name"];?></h4>
                                    <div class="links_locat d-flex align-items-center">
                                      <div class="location">
                                            <p> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["email"]; ?></p>
                                        </div>
                                       <div class="location">
                                            <p><i class="fa fa-id-card" aria-hidden="true"></i> <?php echo $row["id"]; ?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-key" aria-hidden="true"></i> <?php echo $row["password"]; ?></p>
                                        </div>
                                     
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                   <form action="deleteuser.php?id=<?php echo $row["email"]; ?>" method="post">
								
										<input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
									</form>
									
                                
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
        </div>
    </div>




    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Job Listing</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="brouse_job text-right">
                        
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row" >
                        <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>

                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb" >
                                    <img style="width: 100%" src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href='job_details.php?id=<?php echo $row["reviewId"];?>'><h4><?php echo $row["jobCatagory"]; ?></h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i><span class="badge badge-secondary"> <?php echo $row["companyName"]; ?></span></p>
                                        </div>
                                       
                                        <div class="location">
                                                    <p> <i class="fa fa-star" aria-hidden="true"></i> Rating :<span class="badge badge-warning"><?php echo $row["rating"]; ?></span></p>
                                                </div>
                                                <div class="location">
                                                    <p> <i class="fa fa-user" aria-hidden="true"></i> Posted by :<span class="badge badge-warning"><?php echo $row["email"]; ?></span></p>
                                                </div>
                                                <div class="location">
                                    <p>Review Id: <span class="badge badge-danger"> <?php echo $row["reviewId"]; ?></span></p>
                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                  
									<form action='deletepost.php?id=<?php echo $row["reviewId"];?>' method="post">
								
										<input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
									</form>
									
									<form action='updatepost.php?id=<?php echo $row["reviewId"];?>' method="post">
								
										<input  class='btn btn-success' type="submit" name="submit" value="Update"> 
									</form>
                                    
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
        </div>
    </div>


      </div>
    </div>

  </body>

  <!-- footer start -->
    <footer class="footer">
        <div class="footer_top" style="padding: 50px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    
                                </a>
                            </div>
                            <p>
                                HOUSE NO 168 <br>
                                ROAD NO 8, BLOCK G <br>
                                BASHUNDHARA R/A, DHAKA <br>
                                +8801841434022 <br>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
               
                    

                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-5 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                       

                             <img width="100%" src="img/fb.svg" alt="">
                        </div>
                    </div> 

                
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by ANIK RAIHAN  
                        </p>
                    </div>
                </div>
            </div>
        </div>

    
    </footer>
   

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</html>