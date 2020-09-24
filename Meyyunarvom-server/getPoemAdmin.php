<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{

$response=array();
$response["result"]=array();


 $sql = "select id,name,email, place, poem_title, poem_content,created_at, active_flag_publish from poem where active_flag_user = 'Y' and active_flag_admin='Y'";
 
 
 $r = mysqli_query($conn,$sql);
 
 //$row = mysqli_fetch_array($r);
 
 
   while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
			$tmp["name"] = $row['name'];
                        $tmp["email"] = $row['email'];
			$tmp["place"] = $row['place'];
                        $tmp["title"] = $row['poem_title'];
			$tmp["content"] = $row['poem_content'];
			$tmp["created_at"] = $row['created_at'];

                        $tmp["active_flag_publish"] = $row['active_flag_publish'];
			
			
	     	array_push($response["result"],$tmp);
		   }

header('Content-Type: application/json');
echo json_encode($response);



mysqli_close($conn);
 
}
else{
 echo "Error";}
?>