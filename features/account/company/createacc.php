<?php

if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
        $company_name = $_POST["company_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $profile_description = $_POST['profile_description'];
        $address = $_POST['address'];
         $admin = $_POST['admin'];
       
       
       
       
       
     $duplicate=mysqli_query($conn,"select * from company where company_name='$company_name' or email='$email'");
    
    
 if (mysqli_num_rows($duplicate)>0)
{
    $error = '<div class="alert alert-danger">Duplicate Exists!.</div>';
    
    header("Location: signup.php?error=$error");
}
elseif($password != $confirm_password){
    $error = '<div class="alert alert-danger">Password and confirm password does not match. Try Again</div>';
    
    header("Location: signup.php?error=$error");
}


else{

        $servername = "localhost";
        $username = "root";
        $pass = "";
try {
            

            $conn = new PDO("mysql:host=$servername;dbname=the_right_job", $username, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
           
                
            $sql = "INSERT into company (`company_name`,`email`, `password`, `profile_description`, `address`,`admin`) VALUES ('$company_name','$email','$password','$profile_description','$address','$admin')";

            $conn->exec($sql);
            $error = '<div class="alert alert-success">Thank you for your register. You can login now.</div>';
            
            header("Location: signup.php?error=$error");
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
