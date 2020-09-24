<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST') 
{
 
 $email = $_POST['email'];
 $title = $_POST['title'];
 $content= $_POST['content'];
 
 	   
$sql = "INSERT INTO poem (name,email,place, poem_title, poem_content, active_flag_user, active_flag_admin,active_flag_publish) VALUES ((select name from users where email = '$email'),'$email', (SELECT place FROM users AS a WHERE email = '$email'
),'$title','$content','Y','Y', 'N')";

		
		 if(mysqli_query($conn,$sql))
                 {

			 echo 'success;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}
          $conn->close();
	}


 

?>