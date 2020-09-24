<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{

$response=array();
$response["result"]=array();

//$id = $_GET['id'];
$id =1;

  $sql = "select id, name, place, email, poem_title, poem_content,updated_at from poem where active_flag_publish ='Y'"; // where id='$id'";
 
 
 $r = mysqli_query($conn,$sql);

//$row = mysqli_fetch_array($r);

    while($row=mysqli_fetch_array($r)) {
			$tmp=array();
			$tmp["id"] = $row['id'];
                        $tmp["name"] = $row['name'];
                        $tmp["place"] = $row['place'];
                        $tmp["title"] = $row['poem_title'];
			$tmp["content"] = $row['poem_content'];
                        $tmp["updated_at"] = $row['updated_at'];
			
	     	array_push($response["result"],$tmp);
		   }

header('Content-Type: application/json');
echo json_encode($response);



mysqli_close($conn);
 
}
else{
 echo "Error";}
?>