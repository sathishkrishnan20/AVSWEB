<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $oldemail = $_POST['email'];
 $name = $_POST['name'];
 $oldemail = $_POST['oldemail'];
 $email = $_POST['email'];
 $place = $_POST['place'];
 $password = $_POST['password'];

     $sql = "update users set name = '$name', email= '$email', place ='$place', password='$password', updated_at =now() where email='$oldemail'";

		
		if ($conn->query($sql) === TRUE)
		{
			 echo 'successfully updated;';
		}
		else
		{
			 echo 'oops! Please try again!;';
		}
	
		
 $conn->close();
}
?>