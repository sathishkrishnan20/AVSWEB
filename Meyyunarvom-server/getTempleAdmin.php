<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{

$response=array();
$response["result"]=array();

//$id = $_GET['id'];
$id =1;

  $sql = "select id,name,email, place, tname,tplace, taddress, tdesc, timage,latitude,longitude,created_at, active_flag_publish from temple where active_flag_user = 'Y' and active_flag_admin='Y'"; // where id='$id'";
 
 
 $r = mysqli_query($conn,$sql);
 
 //$row = mysqli_fetch_array($r);
 
 
   while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
			$tmp["name"] = $row['name'];
                        $tmp["email"] = $row['email'];
			$tmp["place"] = $row['place'];
                        $tmp["created_at"] = $row['created_at'];

			$tmp["taddress"] = $row['taddress'];
			$tmp["tname"] = $row['tname'];
			$tmp["tplace"] = $row['tplace'];
			$tmp["tdesc"] = $row['tdesc'];
			$tmp["timage"] = $row['timage'];
			$tmp["latitude"] = $row['latitude'];
			$tmp["longitude"] = $row['longitude'];


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