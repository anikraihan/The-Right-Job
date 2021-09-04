<?php 
session_start();

$user_id = $_GET['user_id'];
$jobid = $_GET['jobid'];
$app_id = $_GET['app_id'];


$email = $_SESSION["email"];


$admin = $_SESSION["utype"];





   
$conn = new mysqli("localhost", "root", "", "the_right_job");




$result00=mysqli_query($conn,"SELECT user_id FROM seeker_profile where user_id = $user_id");

if (mysqli_num_rows($result00)==0){
 $error = '<div class="alert alert-danger">Resume does not exist! </div>';
    
   
    header("location: home.php?error=$error");
}else{
   
   header("location: applicants-resume.php?user_id=$user_id&jobid=$jobid&app_id=$app_id'");


}






   

?>







