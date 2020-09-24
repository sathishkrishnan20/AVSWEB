<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];


$response=array();
$response["result"]=array();


  $sql = "select id, poem_title, poem_content, active_flag_publish from poem where email='$email' and active_flag_user = 'Y'";
 
 
    $r=mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($r);

    while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
                        $tmp["title"] = $row['poem_title'];
			$tmp["content"] = $row['poem_content'];
                        $tmp["active_flag_publish"] = $row['active_flag_publish'];
			
	     	array_push($response["result"],$tmp);
		   }

header('Content-Type: application/json');
echo json_encode($response);



mysqli_close($conn);
 
}
?>