<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
     
        

	
 
$sql = "update temple set active_flag_admin='N' where id= '$id'";

 
 if(mysqli_query($conn,$sql))
 {

 // file_put_contents($path,base64_decode($timage));
  
  echo "Successfully Removed the Temple From Admin;";
 }
 else{
 echo "Error in Deleting;";
 }
$conn->close();
}

?>