<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{

$email = $_POST['email'];
$email ="123";


$response=array();
$response["result"]=array();

$sql = "select id, tname,tplace,taddress,tdesc,timage, latitude, longitude, active_flag_publish from temple where email='$email' and active_flag_user = 'Y'";
 
 
    $r=mysqli_query($conn,$sql);
//$row = mysqli_fetch_array($r);

    while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
                        $tmp["tname"] = $row['tname'];
			$tmp["tplace"] = $row['tplace'];
                        $tmp["taddress"] = $row['taddress'];
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
?>