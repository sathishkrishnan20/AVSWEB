<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
     
        

	
 
 $sql = "update temple set active_flag_user= 'N', active_flag_admin='N', active_flag_publish='N' where id= '$id'";

 
 if(mysqli_query($conn,$sql))
 {

 // file_put_contents($path,base64_decode($timage));
  
  echo "Successfully Deleted the Temple By Admin;";
 }
 else{
 echo "Error in Deleting;";
 }
$conn->close();
}

?>