<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

 $email = $_POST['email'];
 $password = $_POST['password'];
 

 
// $email = 'avsgroup@gmail.com';
// $password = 'admin';


	
		$sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
       
	   $result=array();

	  $r=mysqli_query($conn,$sql);
	  $res=mysqli_fetch_array($r);
      
          
		  if(isset($res))
		  {
			array_push($result,array(
                        "name"=>$res['name'],
                        "email"=>$res['email'],
                        "pass"=>$res['password']
		));

                   echo json_encode(array("result"=>$result));

		  }
	    else
            {
		 echo 'invalid;';
	    }
 
}
$conn->close();
?>