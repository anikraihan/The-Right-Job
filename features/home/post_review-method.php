<?php
session_start();

$email = $_SESSION["email"];





$error = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"]; 
		$company_name = $_POST["company_name"];
		$post = $_POST["post"];
		$ambience = $_POST["ambience"];
		$rating = $_POST["rating"];
		
		

                    $insert = $conn->query("INSERT into post_reviews (`email`,`first_name`, `last_name`, `company_name`, `post`, `ambience`,`rating`) VALUES ('$email','$first_name','$last_name','$company_name','$post','$ambience','$rating')");

                    $conn->close();
                 

                    if ($insert) {
                        $error = '<div class="alert alert-success">Review posted successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }
                 
        
}
header("Location: home.php?error=$error");

	


    ?>
	