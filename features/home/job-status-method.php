<?php
session_start();

$email = $_SESSION["email"];





$error = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
		$id = $_POST["id"];
		$action_name = $_POST["action_name"]; 
		
		

                    $insert = $conn->query("UPDATE `job_post_activity` SET `action_name`='$action_name' WHERE `id` = '$id' ");

                    $conn->close();
                 

                    if ($insert) {
                        $error = '<div class="alert alert-success">Action taken successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }
                 
        
}
header("Location: home.php?error=$error");

	


    ?>
	