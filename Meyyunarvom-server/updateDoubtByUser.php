<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
 //$email = $_POST['email'];
$id = $_POST['id']; 
$question = $_POST['question'];
 
        
               $sql = "UPDATE doubts set question= '$question' , active_flag ='Y',active_flag_user='Y' where id='$id'";

		
		 if(mysqli_query($conn,$sql))
                 {

			 echo 'Updated Successfully by User;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}

$conn->close();
               
             
	}


 

?>