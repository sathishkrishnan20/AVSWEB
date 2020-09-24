<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
          $title = $_POST['title'];
          $content= $_POST['content']; 
   
     $sql = "update poem set active_flag_user='N', active_flag_admin = 'N', active_flag_publish='Y' where id= '$id'";

        if(mysqli_query($conn,$sql))
                 {

			 echo 'Your Poem is Successfully Deleted By Admin;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}
          
	}


 $conn->close();

?>