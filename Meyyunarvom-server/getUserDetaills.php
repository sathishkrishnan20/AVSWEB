<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];


$response=array();
$response["result"]=array();


  $sql = "select name, email,place,password from users where email='$email'";
 
 
    $r=mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($r);

    while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["name"] = $row['name'];
                        $tmp["email"] = $row['email'];
                        $tmp["place"] = $row['place'];
                        $tmp["password"] = $row['password'];

			
			
	     	array_push($response["result"],$tmp);
		   }

header('Content-Type: application/json');
echo json_encode($response);



mysqli_close($conn);
 
}
?>