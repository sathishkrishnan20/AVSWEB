<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
 //$email = $_POST['email'];
 //$question = $_POST['question'];
 
 $id = $_POST['id'];

              
             $sql = "UPDATE doubts set active_flag='N' where id='$id'";

		
		 if(mysqli_query($conn,$sql))
                 {

			 echo 'Deleted Successfully by Admin;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}

 $conn->close();

	}




?>