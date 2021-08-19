<?php
$com = $_GET['id'];
if (isset($_POST['submit'])) {


$conn = new mysqli("localhost", "root", "", "the_right_job");
      
        
// sql to delete a record
$sql = "DELETE FROM company WHERE id='$com'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  
} else {
  echo "Error deleting record: " . $conn->error;
}
header("Location: admin.php");

}
