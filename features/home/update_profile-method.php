<?php
session_start();

$email = $_SESSION["email"];



  
                          


$error = "";


if (isset($_POST['submit'])) {

	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted

         $user_id = $_POST["user_id"];
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
        


  
     $duplicate=mysqli_query($conn,"select * from seeker_profile where user_id='$user_id'");
    
    
 if (mysqli_num_rows($duplicate)>0)
{
    $error = '<div class="alert alert-danger">Duplicate Exists!.</div>';
    
    header("Location: home.php?error=$error");
}



else{

  
        
      
         $conn = new mysqli("localhost", "root", "", "the_right_job");
          $imagetmp= addslashes (file_get_contents($_FILES['picFile']['tmp_name']));





                    $insert = $conn->query("INSERT into seeker_profile (`user_id`,`first_name`, `last_name`, `age`, `curent_job`, `school`,`collage`,`uni_name`,`ssc_gpa`,`hsc_gpa`,`uni_cgpa`,`skill`,`previous`,`email`,`picFile`)
                        VALUES ('$user_id','$first_name','$last_name','$age','$curent_job','$school','$collage','$uni_name','$ssc_gpa','$hsc_gpa','$uni_cgpa','$skill','$previous','$email','$imagetmp')");
                        
                       


                     $conn->close();
                  


                    if ($insert) {
                       $error = '<div class="alert alert-success">Profile updated successfully!</div>';
                    } else {
                         $error = '<div class="alert alert-danger">Update failed!. Please try again. </div>';
                    }


       

}

  




header("Location: home.php?error=$error");

}


    ?>
