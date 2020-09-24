<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{

$response=array();
$response["result"]=array();


  $sql = "select id,email,tname,tplace,tdesc, timage,taddress,latitude, longitude from temple where active_flag_user='Y' and active_flag_publish ='Y'"; 
 
 
 $r = mysqli_query($conn,$sql);
 
 //$row = mysqli_fetch_array($r);
 
 
   while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
                        $tmp["email"] = $row['email'];
			$tmp["tname"] = $row['tname'];
			$tmp["tplace"] = $row['tplace'];
                        $tmp["taddress"] = $row['taddress'];
			$tmp["tdesc"] = $row['tdesc'];
			$tmp["timage"] = $row['timage'];
                        $tmp["latitude"] = $row['latitude'];
                        $tmp["longitude"] = $row['longitude'];

	     	array_push($response["result"],$tmp);
		   }

header('Content-Type: application/json');
echo json_encode($response);



mysqli_close($conn);
 
}
else{
 echo "Error";}
?>