<?php


session_start();


                 
        


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "the.rightob@gmail.com";
$mail->Password   = "Admin@123";





$email = $_SESSION["email"];





$error = "";
if (isset($_POST['submit'])) {
  
  $conn = new mysqli("localhost", "root", "", "the_right_job");

        // If file upload form is submitted
    $id = $_POST["id"];
    $action_name = $_POST["action_name"]; 
    $user_mail = $_POST["user_mail"]; 
    
    

                    $insert = $conn->query("UPDATE `job_post_activity` SET `action_name`='$action_name' WHERE `id` = '$id' ");

                    $conn->close();
                 

                    if ($insert) {
                        $error = '<div class="alert alert-success">Action taken successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }







$mail->IsHTML(true);
$mail->AddAddress($user_mail);
$mail->SetFrom("the.rightob@gmail.com", "The-right job");
$mail->AddReplyTo("the.rightob@gmail.com", "The-right-job");
$mail->AddCC($user_mail);
$mail->Subject = "Job application alert";
$content = "<b>The status of your job application has been changed!. Please login to your dashboard to see the changes.</b>";
  // send email and store data in session

      
     
    $mail->MsgHTML($content); 
if(!$mail->Send()) {
  $error = '<div class="alert alert-success">Email sent failed</div>';
  var_dump($mail);
} else {
  $error = '<div class="alert alert-danger">Email sent!.</div>';
  header("location: ../home/home.php?error=$error");
}
  
}  header("location: ../home/home.php?error=$error");
 


$conn->close();
?>