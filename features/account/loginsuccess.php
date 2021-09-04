<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="admin") {
   
      header("location: ../home/admin.php");
}
else{
        
   
   header("location: ../home/home.php");
    }



?>
