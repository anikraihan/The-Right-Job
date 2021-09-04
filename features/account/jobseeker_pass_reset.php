<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the_right_job";
$new=$_POST['new'];
session_start();
session_regenerate_id();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email from user_account where email='$_SESSION[email]'";
$result = $conn->query($sql);
$sql2 = "SELECT email from company where email='$_SESSION[email]'";

$result2 = $conn->query($sql2);

if ($result->num_rows == 1){

  $sql = "UPDATE `user_account` SET `password`='$new' WHERE email='$_SESSION[email]'";

  if ($conn->query($sql) === TRUE) {
  session_destroy();
   $error = '<div class="alert alert-success">Password updated successfully</div>';
    header("location: jobseeker/jobseeker_login.php?error=$error");
} else {
  session_destroy();
  $error = '<div class="alert alert-danger">Password update failed!</div>';

     header("location: jobseeker/jobseeker_login.php?error=$error");
}

}elseif ($result2->num_rows == 1) {
  // code...
  $sql = "UPDATE `company` SET `password`='$new' WHERE email='$_SESSION[email]'";

  if ($conn->query($sql) === TRUE) {
  session_destroy();
   $error = '<div class="alert alert-success">Password updated successfully</div>';
    header("location: company/company_login.php?error=$error");
} else {
  session_destroy();
  $error = '<div class="alert alert-danger">Password update failed!</div>';

     header("location: company/company_login.php?error=$error");
}
}else{
  session_destroy();
  $error = '<div class="alert alert-danger">Password update failed!</div>';

     header("location: jobseeker/jobseeker_login.php?error=$error");
}





$conn->close();
?>