<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
	{
	
	  $id = $_POST['id'];
          $title = $_POST['title'];
          $content= $_POST['content']; 
   
     $sql = "update poem set poem_title= '$title', poem_content= '$content', active_flag_publish='Y', updated_at=now() where active_flag_user ='Y' and id= '$id'";

        if(mysqli_query($conn,$sql))
                 {

			 echo 'Your Poem is Successfully Added By Admin;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}
          
	}


 $conn->close();

?>