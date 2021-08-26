<?php
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
$mail->Username   = "raihan.apurba@northsouth.edu";
$mail->Password   = "?anik567336445@raihaN?";





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the_right_job";
$ee=$_POST['em'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email from user_account where email='$ee'";
$result = $conn->query($sql);
$sql2 = "SELECT email from company where email='$ee'";
$result2 = $conn->query($sql2);

if (($result->num_rows == 1) or($result2->num_rows == 1)) {
	$otp = rand(100000,999999); 


$mail->IsHTML(true);
$mail->AddAddress($ee);
$mail->SetFrom("raihan.apurba@northsouth.edu", "The-right job");
$mail->AddReplyTo("raihan.apurba@northsouth.edu", "The-right-job");
$mail->AddCC($ee);
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>Enter the given OTP $otp.</b>";
  // send email and store data in session

      
     
    $mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
   session_start();
   session_regenerate_id();
   $_SESSION['otp']=$otp;
   $_SESSION['email']=$ee;
    $error = '<div class="alert alert-success">Otp has been sent to your email.</div>';
 header("location: send-otp.php?error=$error");
  }
else{
   $error = '<div class="alert alert-danger">No email found!</div>';
    header("location: forgot.php?error=$error");
}
$conn->close();
?>