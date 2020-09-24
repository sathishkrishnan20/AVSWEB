<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
          $title = $_POST['title'];
          $content= $_POST['content']; 
   
     $sql = "update poem set active_flag_admin = 'N' where id= '$id'";

        if(mysqli_query($conn,$sql))
                 {

			 echo 'Your Poem is Successfully Deleted From Admin Page;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}
          
	}


 $conn->close();

?>