<?php

include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
 $name = $_POST['name'];
 $place = $_POST['place'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 
 //$name = 'sss';
 //$email = '123456';
 //$password = 'abcd';


		
		$sql = "SELECT email FROM users WHERE email='$email'";
 

	  $result=mysqli_query($conn,$sql);
	   
          $rowcount=mysqli_num_rows($result);
      
          if($rowcount>=1)
		  {
			echo 'You Are Already Registered;';
		  }
	   
   else
   {

	    $sql = "INSERT INTO users (name, place ,email, password)
                VALUES ('$name', '$place', '$email', '$password')";

		
		if ($conn->query($sql) === TRUE)
		{
			 echo 'successfully registered;';
		}
		else
		{
			 echo 'oops! Please try again!;';
		}
	}


 $conn->close();
}
?>