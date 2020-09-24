<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST') 
{
 
 $email = $_POST['email'];
 $question = $_POST['question'];
 $answer = $_POST['answer'];
 
 	   
	    $sql = "INSERT INTO doubts (name,email,place, question,answer,active_flag, active_flag_user, is_answered)
                VALUES ((select name from users where email = '$email'),'$email', (SELECT place FROM users AS a WHERE email = '$email'
),'$question','$answer','Y','Y','N')";

		
		 if(mysqli_query($conn,$sql))
                 {

			 echo 'Your Doubts is Successfully sent, We Will clear your Doubt Soon;';
		  }
		else
		{
			 echo 'oops! Please try again!;';
		}

 $conn->close();

          
	}



?>