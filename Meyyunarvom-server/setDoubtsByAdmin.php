<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
 //$email = $_POST['email'];
 //$question = $_POST['question'];
 
 $id = $_POST['id'];
 $answer = $_POST['answer'];



            
                $sql = "UPDATE doubts set answer='$answer', is_answered= 'Y', updated_at= now() where id='$id'";
                 
                  if(mysqli_query($conn,$sql))
                  {

			 echo 'Your answer has been Successfully sent;';
		  }
		  else
		  {
			 echo 'oops! Please try again!;';
		  }

                
	}


 $conn->close();

?>