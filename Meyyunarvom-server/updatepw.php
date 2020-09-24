<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 

		$sql = "SELECT * FROM users WHERE email='$email' and name='$name'";
 

	  $result=mysqli_query($conn,$sql);
	   
          $rowcount=mysqli_num_rows($result);
      
          if(!$rowcount>=1)
		  {
			echo 'Name and Password Mismatch;';
		  }
	   
     else
     {

	    $sql = "update users set password='$password', updated_at =now() where name='$name' and email='$email'";

		
		if ($conn->query($sql) === TRUE)
		{
			 echo 'successfully updated;';
		}
		else
		{
			 echo 'oops! Please try again!;';
		}
	}
		
 $conn->close();
}
?>