<?php
include("config.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{


$response=array();
$response["result"]=array();



	  
		$sql= "SELECT id,name,email,place,question, is_answered,created_at,updated_at FROM doubts where active_flag = 'Y' and active_flag_user = 'Y'";
      
	  $r=mysqli_query($conn,$sql);
	 // $res=mysqli_fetch_array($r); 


		   while($row=mysqli_fetch_array($r))
		   {
			$tmp=array();
			
			$tmp["id"] = $row['id'];
                        $tmp["name"] = $row['name']; 
                        $tmp["place"] = $row['place'];
                        $tmp["email"] = $row['email'];
                        $tmp["question"] = $row['question'];
                        $tmp["is_answered"] = $row['is_answered'];
                        $tmp["created_at"] = $row['created_at'];
                        $tmp["updated_at"] = $row['updated_at']; 
			
	     	array_push($response["result"],$tmp);
		  }
header('Content-Type: application/json');
echo json_encode($response);

	
$conn->close();	 

 }
	    

?>