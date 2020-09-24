<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
         
   
     $sql = "update poem set active_flag_user ='N', active_flag_admin= 'N', active_flag_publish= 'N' where id= '$id'";

        if(mysqli_query($conn,$sql))
                 {

			 echo 'Your Poem has been successfully unpublished;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}
          
	}


 $conn->close();

?>