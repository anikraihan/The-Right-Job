<?php
session_start();
session_regenerate_id();
if($_SESSION['otp']==$_POST['otp']){
	  $error = '<div class="alert alert-success">Otp varified successfully.</div>';
	 header('Location:new-password.php');
}else{
	//echo "Otp error";
	  $error = '<div class="alert alert-danger">Invalid! OTP.</div>';
	  header("location: send-otp.php?error=$error");
}?>