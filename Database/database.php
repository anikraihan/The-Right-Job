<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "the_right_job";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>