<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
 
 $id = $_POST['id']; 
 $title = $_POST['title'];
 $content= $_POST['content'];
 
        
               $sql = "UPDATE poem set poem_title= '$title', poem_content= '$content', active_flag_admin ='Y', active_flag_user='Y',active_flag_publish ='N'  where id='$id'";

		
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