<?php

if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
        $first_name = $_POST["first_name"];
         $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $gender = $_POST['gender'];
        $contact_number = $_POST['contact_number'];
        $admin = $_POST['admin'];
       
       
       
       
     $duplicate=mysqli_query($conn,"select * from user_account where email='$email' or contact_number='$contact_number'");
    
    
 if (mysqli_num_rows($duplicate)>0)
{
    $error = '<div class="alert alert-danger">Duplicate Exists!.</div>';
    
    header("Location: jobseeker_reg.php?error=$error");
}
elseif($password != $confirm_password){
    $error = '<div class="alert alert-danger">Password and confirm password does not match. Try Again</div>';
    
    header("Location: jobseeker_reg.php?error=$error");
}


else{

        $servername = "localhost";
        $username = "root";
        $pass = "";
try {
            

            $conn = new PDO("mysql:host=$servername;dbname=the_right_job", $username, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                
            $sql = "INSERT into user_account (`first_name`,`last_name`,`email`, `password`, `gender`, `contact_number`,`admin`) VALUES ('$first_name','$last_name','$email','$password','$gender','$contact_number','$admin')";

            $conn->exec($sql);
            $error = '<div class="alert alert-success">Thank you for your register. You can login now.</div>';
            
            header("Location: jobseeker_login.php?error=$error");
}
                 

    catch(PDOException $e)
        {
      echo $sql . "
      " . $e->getMessage();
    }
    $conn = null;

}

}

            
        




	


    ?>
