<?php

session_start();

$error = "";
// store session data
if (isset($_POST['signin'])) {
	
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = '<div class="alert alert-danger">Email or password is invalid!.</div>';
        header("location: jobseeker_login.php?error=$error");
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli("localhost", "root", "", "the_right_job");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
		$sql = "SELECT * FROM user_account WHERE email='" . $email . "' AND password='" . $password . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
			
            $_SESSION["email"] = $email;
            header("location: ../loginsuccess.php?error=$error");
            while ($row = $result->fetch_assoc()) {

                $_SESSION["utype"] = $row['admin'];
            }
            
			
			
			
        } else {
            
            $error = '<div class="alert alert-danger">Email or password is invalid!.</div>';
            header("location: jobseeker_login.php?error=$error");
        }
        $conn->close();
    }
}
