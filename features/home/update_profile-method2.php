<?php
session_start();

$email = $_SESSION["email"];



  
                          


$error = "";
$postid = $_GET['id'];


if (isset($_POST['submit'])) {

	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted

        
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = $_POST["age"];
        $curent_job= $_POST["curent_job"];
        $school = $_POST["school"];
        $collage = $_POST["collage"];
        $uni_name= $_POST["uni_name"];
         $ssc_gpa = $_POST["ssc_gpa"];
        $hsc_gpa= $_POST["hsc_gpa"];
        $uni_cgpa = $_POST["uni_cgpa"];
        $skill = $_POST["skill"];
        $previous= $_POST["previous"];
        $email= $_POST["email"];
        

          $imagetmp= addslashes (file_get_contents($_FILES['picFile']['tmp_name']));





                    $update = $conn->query("UPDATE `seeker_profile` SET `first_name` = '$first_name', `last_name` = '$last_name' , `age` = '$age', `curent_job` = '$curent_job', `school` = '$school', `collage` = '$collage',`uni_name` = '$uni_name', `ssc_gpa` = '$ssc_gpa', `hsc_gpa`= '$hsc_gpa', `uni_cgpa`= '$uni_cgpa',`skill`= '$skill', `previous`= '$previous',`email`= '$email', `picFile`= '$imagetmp'  where `user_id` = '$postid'");
                       


                     $conn->close();
                  


                    if ($update) {
                       $error = '<div class="alert alert-success">Profile updated successfully!</div>';
                    } else {
                         $error = '<div class="alert alert-danger">Update failed!. Please try again. </div>';
                    }


       



  




header("Location: profile.php?error=$error");

}


    ?>
