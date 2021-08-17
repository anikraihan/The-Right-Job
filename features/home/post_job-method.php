<?php
session_start();

$email = $_SESSION["email"];



     $conn = new mysqli("localhost", "root", "", "the_right_job");

                            $query = "select id,company_name from company where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                 $company_name = $row['company_name']; 
                  

                            }
                          


$error = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
		$job_catagory = $_POST["job_catagory"];
		$job_description = $_POST["job_description"]; 
		$job_type = $_POST["job_type"];
		$salary = $_POST["salary"];
		$position = $_POST["position"];
		$vacancy = $_POST["vacancy"];
		$expectation = $_POST["expectation"];
		$job_location = $_POST["job_location"];

       
        $date = date('Y-m-d', strtotime($_POST['deadline']));
       

                    $insert = $conn->query("INSERT into job_post (`company_id`,`cname`,`job_catagory`, `job_description`, `job_type`, `salary`, `position`,`vacancy`, `expectation`, `job_location`, `deadline`) VALUES ('$id','$company_name','$job_catagory','$job_description','$job_type','$salary','$position','$vacancy','$expectation','$job_location','$date')"
		

                    


                    $conn->close();
                 
                    if ($insert) {
                        $error = '<div class="alert alert-success">New job posted successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }
                 
            
        // Display status message
        echo $error;
}
header("Location: home.php?error=$error");

	


    ?>
	